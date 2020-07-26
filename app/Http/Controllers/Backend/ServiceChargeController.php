<?php


namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploadHelper;
use App\Helpers\QueryHelper;
use App\Helpers\StringHelper;
use App\Helpers\NumberHelper;
use App\Helpers\SMSHelper;

use App\Models\ServiceCharge;
use App\Models\ServiceChargeHistory;
use App\Models\Payment;
use App\Models\Client;
use Mail;


class ServiceChargeController extends Controller
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
		$rows = ServiceCharge::where('status', '!=', 9)
		->where('service_charge', '!=', null)
		->orderBy('status', 'desc')
		->orderBy('id', 'desc')
		->get();
		return view('backend.pages.service_charge.index', compact('rows'));
	}

	public function add()
	{
		$clients = Client::orderBy('status', 'desc')
		->orderBy('name', 'asc')
		->where('status', '!=', 9)
		//->where('is_paid', 1)
		->get();
		return view('backend.pages.service_charge.add', compact('clients'));
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

		if (!ServiceCharge::where('client_id', $id)->first()) {
			$data['client_id'] = $id;

			$data['expiration_at'] = date('Y-m-d', strtotime($client_->created_at. ' + 1 year'));

			QueryHelper::simpleInsert('ServiceCharge', $data);
		}

		$service_charge = ServiceCharge::where('client_id', $id)
		->where('status', '!=', 9)
		->first();
		
		if (!$service_charge) {
			return view('backend.pages.service_charge.add', compact('clients', 'client_', 'id'));
		} else {
			return view('backend.pages.service_charge.add', compact('clients', 'client_', 'id', 'service_charge'));
		}
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'client_id' => 'required',
			'service_charge' => 'required',
			'service_duration' => 'required',
		]);

		//$data = $request->except(['_token']);


		$client_ = Client::where('id', $request->client_id)
		->where('status', '!=', 9)
		->first();

		$service_domain = ServiceCharge::where('client_id', $request->client_id)
		->where('status', '!=', 9)
		->first();

		$data['service_charge'] = $request->service_charge;
		$service_duration = $request->service_duration;

		$one_year_time = 31536000;
		$one_month_time = $one_year_time/12;

		if (strpos($service_domain->expiration_at->diffForHumans(), 'ago') !== false) {
			if ($service_duration > 0) {
				$data['service'] = $service_duration*12;
				$service_duration = strtotime(date('Y-m-d'))+$one_year_time*$service_duration;
			} else {
				$data['service'] = 6;
				$service_duration = strtotime(date('Y-m-d'))+$one_year_time*(1/2);
			}

		}else{
			if ($service_duration > 0) {
				$data['service'] = $service_duration*12;
				$service_duration = strtotime($service_domain->expiration_at)+$service_duration*$one_year_time;
			} else {
				$data['service'] = 6;
				$service_duration = strtotime($service_domain->expiration_at)+(1/2)*$one_year_time;
			}
		}

		$data['expiration_at'] = date('Y-m-d H:i:s', $service_duration);
		$service_domain->update($data);

		$data_['service_expiration_date'] = date('Y-m-d H:i:s', $service_duration);
		$data_['service_charge'] = $data['service_charge']/$data['service']*12;
		$client_->update($data_);


		$service_history = new ServiceChargeHistory;
		$service_history->client_id = $request->client_id;
		$service_history->service_id = $service_domain->id;
		$service_history->service = $data['service'];
		$service_history->service_charge = $data['service_charge'];
		$service_history->expiration_at = $data['expiration_at'];
		$service_history->save();

		/* SMS Sending*/
		/*
		$success = '';
		$mobile_no = $request->mobile;
		$message = 'Dear '.explode(' ', $request->client_name)[0].', Tk '.$request->service_charge.' has being received successfully for service of '.$data['service'].' months. Regards, Freelance IT.';
		$message_length = intval(ceil(strlen($message)/160));
	 	$success = SMSHelper::sendSMS($mobile_no, $message, $message_length);
		if($success){
			session()->flash('sending_success', "Successfully Send!");
		}
		else{
			session()->flash('sending_failed', "SMS Send Error!");
		}
		*/
		$service_charge = $data['service_charge'];
		$mail_body = '
		<style>
			h3 {
				margin: 0;
			}
		</style>
		<div style="display: block; width: 90%; border: 1px solid #ddd; border-radius: 4px; padding: 15px;
		">
	    	<div style="display: block; background: #ddd; padding: 10px; text-align: center; font-size: large; border-radius: 4px;">
	    		<a href="'.asset('/admin/service_domain/view/'.$request->client_id.'?name='.urlencode($request->client_name)).'">
	    			'.$request->client_name.'
	    		</a>
	    		<br>
	    		<small>Date: '.date('Y-m-d').'</small>
	    	</div>
			<h3>Name: '.$request->client_name.'</h3>
			<h3>Client ID: '.$request->client_id.'</h3>
			<h3>Renewal Price: '.$service_charge.'৳</h3>
			<h3>Renewal For: '.$data['service'].'Months</h3>
			<h3>Expiration Date: '.date('Y-m-d', strtotime($data['expiration_at'])).'</h3>
		</div>
					';
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
		return redirect()->route('admin.service_charge.index');
	}

	public function view($id)
	{
		$row = ServiceCharge::where('id', $id)->first();
		return view('backend.pages.service_charge.view', compact('row'));
	}
	
	public function check()
	{
		$today = date('Y-m-d');

		$rows = Client::where('status', '!=', 9)
		->whereBetween('service_expiration_date', [date('Y-m-d', strtotime($today. ' - 100 years')), date('Y-m-d', strtotime($today. ' + 30 days'))])
		//->orWhere('service_expiration_date', null)
		->orderBy('id', 'desc')
		->get();
		//dd($rows);
		return view('backend.pages.service_charge.check', compact('rows'));
	}

	public function edit($id)
	{
		$row = ServiceCharge::where('id', $id)->first();
		return view('backend.pages.service_charge.edit', compact('row'));
	}

	public function update(Request $request, $id)
	{
		$service_charge = ServiceCharge::where('id', $id)->first();
		$this->validate($request, [
			'' => '',
		]);
		$data = $request->except(['_token']);
		$service_charge->update($data);
		session()->flash('update_message', 'Added');
		return redirect()->route('admin.service_charge.index');
	}

	public function delete($id)
	{
		$service_charge = ServiceCharge::where('id', $id)->first();
		$data['status'] = 0;
		$service_charge->update($data);
		session()->flash('deactive_message', 'Deactived');
		return redirect()->route('admin.service_charge.index');
	}
}
