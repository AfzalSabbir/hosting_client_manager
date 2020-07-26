<?php


namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploadHelper;
use App\Helpers\QueryHelper;
use App\Helpers\StringHelper;
use App\Helpers\NumberHelper;
use App\Helpers\SMSHelper;
use App\Models\RenewalDomain;
use App\Models\RenewalHistory;
use App\Models\Payment;
use App\Models\Client;
use Mail;

class RenewalDomainController extends Controller
{

	/**
	* Site Access
	**/
	public function __construct()
	{
		$this->middleware('auth:admin');
	}

	public function index()
	{
		$rows = RenewalDomain::where('status', '!=', 9)
		->where('renewal_amount', '!=', null)
		->orderBy('status', 'desc')
		->orderBy('id', 'desc')
		->get();
		return view('backend.pages.renewal_domain.index', compact('rows'));
	}

	public function add()
	{
		$clients = Client::orderBy('status', 'desc')
		->orderBy('name', 'asc')
		->where('status', '!=', 9)
		//->where('is_paid', 1)
		->get();
		return view('backend.pages.renewal_domain.add', compact('clients'));
	}

	public function add_id($id)
	{	
		$clients = Client::orderBy('status', 'desc')
		->orderBy('name', 'asc')
		->where('status', '!=', 9)
		//->where('is_paid', 1)
		->get();

		$client_ = Client::where('id', $id)
		->where('status', '!=', 9)
		->first();


		if (!RenewalDomain::where('client_id', $id)->first()) {
			$data['client_id'] = $id;
			$data['expiration_at'] = $client_->expiration_date;

			QueryHelper::simpleInsert('RenewalDomain', $data);
		}

		$renewal_domain = RenewalDomain::where('client_id', $id)
		->where('status', '!=', 9)
		->first();
		
		if (!$renewal_domain) {
			return view('backend.pages.renewal_domain.add', compact('clients', 'client_', 'id'));
		} else {
			return view('backend.pages.renewal_domain.add', compact('clients', 'client_', 'id', 'renewal_domain'));
		}
	}

	public function store(Request $request)
	{

		$this->validate($request, [
			'client_id' => 'required',
			'renewal_amount' => 'required',
			'renewal_duration' => 'required',
		]);

		$client_ = Client::where('id', $request->client_id)
		->where('status', '!=', 9)
		->first();

		$renewal_domain = RenewalDomain::where('client_id', $request->client_id)
		->where('status', '!=', 9)
		->first();

		$data['renewal_amount'] = $request->renewal_amount;
		$renewal_duration = $request->renewal_duration;

		$one_year_time = 31536000;
		$one_month_time = $one_year_time/12;

		if (strpos($renewal_domain->expiration_at->diffForHumans(), 'ago') !== false) {
			if ($renewal_duration > 0) {
				$data['renewal'] = $renewal_duration*12;
				$renewal_duration = strtotime(date('Y-m-d'))+$one_year_time*$renewal_duration;
			} else {
				$data['renewal'] = 6;
				$renewal_duration = strtotime(date('Y-m-d'))+$one_year_time*(1/2);
			}

		}else{
			if ($renewal_duration > 0) {
				$data['renewal'] = $renewal_duration*12;
				$renewal_duration = strtotime($renewal_domain->expiration_at)+$renewal_duration*$one_year_time;
			} else {
				$data['renewal'] = 6;
				$renewal_duration = strtotime($renewal_domain->expiration_at)+(1/2)*$one_year_time;
			}
		}

		$data['expiration_at'] = date('Y-m-d H:i:s', $renewal_duration);
		$renewal_domain->update($data);

		$data_['expiration_date'] = date('Y-m-d H:i:s', $renewal_duration);
		$data_['renewal_price'] = $data['renewal_amount']/$data['renewal']*12;
		$client_->update($data_);


		$renewal_history = new RenewalHistory;
		$renewal_history->client_id = $request->client_id;
		$renewal_history->renewal_id = $renewal_domain->id;
		$renewal_history->renewal = $data['renewal'];
		$renewal_history->renewal_amount = $data['renewal_amount'];
		$renewal_history->expiration_at = $data['expiration_at'];
		$renewal_history->save();

		/* SMS Sending*/
		// $success = '';
		// $mobile_no = $request->mobile;
		// $message = 'Dear '.explode(' ', $request->client_name)[0].', Tk '.$request->renewal_amount.' has being received successfully for renewal of '.$data['renewal'].' months. Regards, Freelance IT.';
		// $message_length = intval(ceil(strlen($message)/160));
	 // 	$success = SMSHelper::sendSMS($mobile_no, $message, $message_length);
		// if($success){
		// 	session()->flash('sending_success', "Successfully Send!");
		// }
		// else{
		// 	session()->flash('sending_failed', "SMS Send Error!");
		// }

		// $renewal_amount = $data['renewal_amount'];
		// $mail_body = '
		// <style>
		// 	h3 {
		// 		margin: 0;
		// 	}
		// </style>
		// <div style="display: block; width: 90%; border: 1px solid #ddd; border-radius: 4px; padding: 15px;
		// ">
	 //    	<div style="display: block; background: #ddd; padding: 10px; text-align: center; font-size: large; border-radius: 4px;">
	 //    		<a href="'.asset('/admin/renewal_domain/view/'.$request->client_id.'?name='.urlencode($request->client_name)).'">
	 //    			'.$request->client_name.'
	 //    		</a>
	 //    		<br>
	 //    		<small>Date: '.date('Y-m-d').'</small>
	 //    	</div>
		// 	<h3>Name: '.$request->client_name.'</h3>
		// 	<h3>Client ID: '.$request->client_id.'</h3>
		// 	<h3>Renewal Price: '.$renewal_amount.'৳</h3>
		// 	<h3>Renewal For: '.$data['renewal'].'Months</h3>
		// 	<h3>Expiration Date: '.date('Y-m-d', strtotime($data['expiration_at'])).'</h3>
		// </div>
		// 			';
		/*Mail::send(array(), array(), function ($message) use ($request, $mail_body) {
		 	$mail_subject = 'Renewal of '.$request->client_name;

		 	$mail_to_name = 'Freelance IT Lab';
		 	$mail_to_address = 'afzalbd1@gmail.com';

		 	$mail_from_name = 'No-Replay - FITLab Client Manager';
		 	$mail_from_address = 'fitlabclientmanager@gmail.com';

		 	$message->to($mail_to_address, $mail_to_name)
					->subject($mail_subject)
					->from($mail_from_address, $mail_from_name)
					->setBody($mail_body, 'text/html');
		});*/

		session()->flash('add_message', 'Added');
		return redirect()->route('admin.renewal_domain.index');
	}

	public function view($id)
	{
		$rows = RenewalHistory::where('client_id', $id)
		->where('status', '!=', 9)
		->orderBy('id', 'desc')
		->get();
		//dd($rows);
		return view('backend.pages.renewal_domain.view', compact('rows'));
	}

	public function check()
	{
		$today = date('Y-m-d');

		$rows = Client::where('status', '!=', 9)
		->whereBetween('expiration_date', [date('Y-m-d', strtotime($today. ' - 100 years')), date('Y-m-d', strtotime($today. ' + 30 days'))])
		->orderBy('id', 'desc')
		->get();
		//dd($rows);
		return view('backend.pages.renewal_domain.check', compact('rows'));
	}

	public function edit($id)
	{
		$row = RenewalDomain::where('id', $id)
		->where('status', '!=', 9)
		->first();
		return view('backend.pages.renewal_domain.edit', compact('row'));
	}

	public function update(Request $request, $id)
	{
		$renewal_domain = RenewalDomain::where('id', $id)
		->where('status', '!=', 9)
		->first();
		$this->validate($request, [
			'' => '',
		]);
		$data = $request->except(['_token']);
		$renewal_domain->update($data);
		session()->flash('update_message', 'Added');
		return redirect()->route('admin.renewal_domain.index');
	}

	public function delete($id)
	{
		$renewal_domain = RenewalDomain::where('id', $id)
		->where('status', '!=', 9)
		->first();
		$data['status'] = 9;
		$renewal_domain->update($data);
		session()->flash('delete_message', 'Deleted');
		return redirect()->route('admin.renewal_domain.index');
	}
}
