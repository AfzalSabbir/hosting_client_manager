<?php


namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploadHelper;
use App\Helpers\QueryHelper;
use App\Helpers\StringHelper;
use App\Helpers\NumberHelper;
use App\Helpers\SMSHelper;
use App\Models\PaymentHistory;
use App\Models\Payment;
use App\Models\Client;
use Mail;
use DB;

class PaymentController extends Controller
{

	/**
	* Site Access
	**/
	public function __construct()
	{
		$this->middleware('auth:admin');
	}

	public function index(Request $request)
	{
		if ($request->isMethod('post')) {

			$rows = DB::table('clients')
			->leftjoin("payments as payment", "payment.client_id", "=", "clients.id")
			->select("clients.*", "payment.*")
			->where("clients.status", 1)->where("payment.status", 1)
			->orderBy('name', 'asc');

			if ($request->district_id) {
				$rows = $rows->where('district_id', $request->district_id);
			}

			if ($request->upazila_id) {
				$rows = $rows->where('upazila_id', $request->upazila_id);
			}

			if ($request->mobile) {
				$rows = $rows->where('mobile', $request->mobile);
			}

            /*if($request->to_date){
                //$orders = $orders->whereBetween('orders.created_at', [$request->from_date, $request->to_date]);
                $orders = $orders->whereBetween('orders.created_at', [$request->from_date, date('Y-m-d', strtotime($request->to_date. ' + 1 days'))]);
            }
            elseif($request->from_date){
                //$orders = $orders->whereBetween('orders.created_at', [$request->from_date, $request->from_date]);
                $orders = $orders->whereBetween('orders.created_at', [$request->from_date, date('Y-m-d', strtotime($request->to_date. ' + 1 days'))]);
            }*/

            if($request->to_date || $request->from_date) {

				$rows = DB::table('clients')
				->leftjoin("payment_histories as payment", "payment.client_id", "=", "clients.id")
				->select("clients.name as name", "clients.project_price as project_price", "clients.mobile as mobile", "payment.*")
				->where("clients.status", 1)->where("payment.status", 1)
				->orderBy('payment_at', 'desc');

	            if(!$request->to_date) {
	                $request->to_date = date("Y-m-d");
	            }
	            if($request->to_date && $request->from_date) {
	                $rows = $rows->whereBetween('payment_at', [$request->from_date, date('Y-m-d', strtotime($request->to_date. ' + 1 days'))]);
	            }

				$rows = $rows->get();

				//dd($rows);

				return view('backend.pages.payment.date_view', compact('rows'));

	        }

			$rows = $rows->get();

		} else {

			$rows = DB::table('clients')
			->leftjoin("payments as payment", "payment.client_id", "=", "clients.id")
			->select("clients.*", "payment.*")
			->where("clients.status", 1)->where("payment.status", 1)
			->orderBy('name', 'asc')
			->get();
		}

		//dd($clients, $request);

		$districts = DB::table('districts')
		->leftjoin("upazilas as upazila", "upazila.district_id", "=", "districts.id")
		->select("districts.*", "upazila.name as upazila_name", "upazila.id as upazila_id")
		->where("districts.status", 1)->where("upazila.status", 1)
		->orderBy('name', 'asc')
		->orderBy('upazila_name', 'asc')
		->get()
		->groupBy('name');

		//dd($rows->sum('id'));

		$D_U = [];
		foreach ($districts as $name => $upazilas) {
			foreach ($upazilas as $key => $upazila) {
				if ($key == 0) {
					$D_U[$upazila->id]['district_name'] = $upazila->name;
				}
				$D_U[$upazila->id]['upazila'][$upazila->upazila_id] = $upazila->upazila_name;
			}
		}

		//dd($D_U);

		return view('backend.pages.payment.index', compact('rows',/* 'clients',*/ 'D_U'));
	}

	public function add()
	{
		$clients = Client::orderBy('status', 'desc')
		->orderBy('name', 'desc')
		->where('status', '!=', 9)
		->get();
		// dd($clients);
		return view('backend.pages.payment.add', compact('clients'));
	}

	public function add_id($id)
	{	
		$clients = Client::orderBy('name', 'desc')
		->where('status', '!=', 9)
		->get();

		$client_ = Client::where('id', $id)
		->where('status', '!=', 9)
		->first();

		if (!Payment::where('client_id', $id)->first()) {
			$data['client_id'] = $id;
			$data['payment'] = 0;
			$data['due'] = $client_->project_price;
			QueryHelper::simpleInsert('Payment', $data);
		}

		$payment = Payment::where('client_id', $id)
		->where('status', '!=', 9)
		->first();

		if (!$payment) {
			return view('backend.pages.payment.add', compact('clients', 'client_', 'id'));
		} else {
			return view('backend.pages.payment.add', compact('clients', 'client_', 'id', 'payment'));
		}
	}

	public function store(Request $request)
	{

		$this->validate($request, [
			'payment' => 'required',
			'payment_at' => 'required',
		]);

		$data = $request->except(['_token', 'client']);
		// dd($data);

		$payment = Payment::where('client_id', $data['client_id'])
		->where('status', '!=', 9)
		->first();

		$this_payment = $data['payment'];
		$data['payment'] = $data['payment'] + $payment->payment;
		$payment->update($data);

		if ($data['due'] == 0) {
			$client_ = Client::where('id', $data['client_id'])
			->where('status', '!=', 9)
			->first();
			
			$data_['is_paid'] = 1;
			$client_->update($data_);
		}

		$payment_history = new PaymentHistory;
		$payment_history->payment_id = $payment->id;
		$payment_history->client_id = $data['client_id'];
		$payment_history->payment_at = $data['payment_at'];
		$payment_history->payment = $data['payment'];
		$payment_history->this_payment = $this_payment;
		$payment_history->due = $data['due'];
		$payment_history->save();

		/* SMS Sending*/
		// $success = '';
		// $mobile_no = $data['mobile'];
		// $message = 'Dear Client, Tk '.$this_payment.' has being received successfully. Due TK: '.$data['due'].'. Regards, Freelance IT.';
		// $message_length = intval(ceil(strlen($message)/160));
	 // 	$success = SMSHelper::sendSMS($mobile_no, $message, $message_length);
		// if($success){
		// 	session()->flash('sending_success', "Successfully Send!");
		// }
		// else{
		// 	session()->flash('sending_failed', "SMS Send Error!");
		// }

		/* Mail Sending*/
		$total_price = $payment->payment + intval($payment->due);
		$mail_body = '
		<style>
			h3 {
				margin: 0;
			}
		</style>
		<div style="display: block; width: 90%; border: 1px solid #ddd; border-radius: 4px; padding: 15px;
		">
	    	<div style="display: block; background: #ddd; padding: 10px; text-align: center; font-size: large; border-radius: 4px;">
	    		<a href="'.asset('/admin/payment/view/'.$data['client_id'].'?name='.urlencode($request->client_name)).'">
	    			'.$request->client_name.'
	    		</a>
	    		<br>
	    		<small>Date: '.date('Y-m-d').'</small>
	    	</div>
			<h3>Name: '.$request->client_name.'</h3>
			<h3>Client ID: '.$data['client_id'].'</h3>
			<h3>Project Price: '.$total_price.'৳</h3>
			<h3>Total Paid: '.$data['payment'].'৳</h3>
			<h3>Last Paid: '.$this_payment.'৳</h3>
			<h3>Due: '.$data['due'].'৳</h3>
		</div>
					';
        /*Mail::send(array(), array(), function ($message) use ($request, $mail_body) {
		 	$mail_subject = 'Payment of '.$request->client_name;

		 	$mail_to_name = 'Freelance IT Lab';
		 	$mail_to_address = 'afzalbd1@gmail.com';

		 	$mail_from_name = 'No-Replay - FITLab Client Manager';
		 	$mail_from_address = 'fitlabclientmanager@gmail.com';

		 	$message->to($mail_to_address, $mail_to_name)
					->subject($mail_subject)
					->from($mail_from_address, $mail_from_name)
					->setBody($mail_body, 'text/html');
		});*/

		session()->flash('update_message', 'Updated');
		return redirect()->route('admin.payment.index');
	}

	public function view($id)
	{
		$rows = PaymentHistory::where('client_id', $id)
		->where('status', '!=', 9)
		->get();
		return view('backend.pages.payment.view', compact('rows'));
	}

	public function date_view(Request $request)
	{

	     if($request->to_date || $request->from_date) {

			$rows = DB::table('clients')
			->leftjoin("payment_histories as payment", "payment.client_id", "=", "clients.id")
			->select("clients.name as name", "clients.project_price as project_price", "clients.mobile as mobile", "payment.*")
			->where("clients.status", 1)->where("payment.status", 1)
			->orderBy('payment_at', 'desc');

			//$rows = PaymentHistory::where('status', '!=', 9);

            if(!$request->to_date) {
                $request->to_date = date("Y-m-d");
            }
            if($request->to_date && $request->from_date) {
                $rows = $rows->whereBetween('payment_at', [$request->from_date, date('Y-m-d', strtotime($request->to_date. ' + 1 days'))]);
            }

			$rows = $rows->get();

			dd($rows);

			return view('backend.pages.payment.date_view', compact('rows'));

        } else {
        	return \Redirect::route('admin.payment.index');
        }
	}

	public function edit($id)
	{
		$row = Payment::where('id', $id)
		->where('status', '!=', 9)
		->first();
		return view('backend.pages.payment.edit', compact('row'));
	}

	public function update(Request $request, $id)
	{
		$payment = Payment::where('id', $id)
		->where('status', '!=', 9)
		->first();
		$this->validate($request, [
			'payment' => 'required',
		]);
		$data = $request->except(['_token']);
		$payment->update($data);
		session()->flash('update_message', 'Added');
		return redirect()->route('admin.payment.index');
	}

	public function delete($id)
	{
		$payment = Payment::where('client_id', $id)
		->where('status', '!=', 9)
		->first();
		$data['status'] = 9;
		$payment->update($data);
		session()->flash('deactive_message', 'Deactived');
		return redirect()->route('admin.payment.index');
	}
}
