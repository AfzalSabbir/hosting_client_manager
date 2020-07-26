<?php


namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploadHelper;
use App\Helpers\QueryHelper;
use App\Helpers\StringHelper;
use App\Helpers\NumberHelper;
use App\Models\Payment;
use App\Models\Client;
use DB;
use Mail;

class ClientController extends Controller
{

	/**
	* Site Access
	**/
	public function __construct()
	{
		$this->middleware('auth:admin');
	}

	// public function send()
	// {
	// 	$mail_body = 'Body';
	// 	Mail::raw($mail_body,function($message){
	// 		$message->to('afzalbd1@gmail.com', 'ABC')->subject('test email3');
	// 		$message->from('fitlabclientmanager@gmail.com', 'FITLab Client Manager');

	// 	});
	// 	return 'sent';
	// }

	public function index()
	{
		$rows = Client::where('status', '!=', 9)->orderBy('status', 'desc')->orderBy('id', 'desc')->get();
		$payments = Payment::where('status', '!=', 9)->get();
		$payment_clinet_id = [];
		foreach ($payments as $key => $payment) {
			$payment_clinet_id[$key] = $payment->client_id;
		}
		//dd(in_array('2', $payment_clinet_id));

		return view('backend.pages.client.index', compact('rows', 'payments', 'payment_clinet_id'));
	}

	public function add()
	{
		$districts = DB::table('districts')
		->leftjoin("upazilas as upazila", "upazila.district_id", "=", "districts.id")
		->select("districts.*", "upazila.name as upazila_name", "upazila.id as upazila_id"/*, "upazila.district_id as district_id"*/)
		->where("districts.status", 1)->where("upazila.status", 1)
		->orderBy('name', 'asc')
		->orderBy('upazila_name', 'asc')
		->get()
		->groupBy('name');
		return view('backend.pages.client.add', compact('districts'));
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'contact_person' => 'required',
			'mobile' => 'required',
			'email' => 'required',
			'address' => 'required',
			'domain' => 'required',
			'hosting' => 'required',
			'district_id' => 'required',
			'upazila_id' => 'required',
			'project_price' => 'required',
			'renewal_price' => 'required',
			'service_charge' => 'required',
			'expiration_date' => 'required',
		]);
		$data = $request->except(['_token']);
		//dd($data);
		QueryHelper::simpleInsert('Client', $data);
		session()->flash('add_message', 'Added');
		return redirect()->route('admin.client.index');
	}

	public function view($id)
	{
		$row = Client::where('id', $id)->first();
		return view('backend.pages.client.view', compact('row'));
	}

	public function edit($id)
	{
		$row = Client::where('id', $id)->first();
		$districts = DB::table('districts')
		->leftjoin("upazilas as upazila", "upazila.district_id", "=", "districts.id")
		->select("districts.*", "upazila.name as upazila_name", "upazila.id as upazila_id"/*, "upazila.district_id as district_id"*/)
		->where("districts.status", 1)->where("upazila.status", 1)
		->orderBy('name', 'asc')
		->orderBy('upazila_name', 'asc')
		->get()
		->groupBy('name');
		//dd($districts);
		return view('backend.pages.client.edit', compact('row', 'districts'));
	}

	public function update(Request $request, $id)
	{
		//dd($request->input());

		$client = Client::where('id', $id)->first();
		$this->validate($request, [
			'name' => 'required',
			'contact_person' => 'required',
			'mobile' => 'required',
			'email' => 'required',
			'address' => 'required',
			'domain' => 'required',
			'hosting' => 'required',
			'district_id' => 'required',
			'upazila_id' => 'required',
			// 'project_price' => 'required',
			// 'renewal_price' => 'required',
			// 'service_charge' => 'required',
			//'expiration_date' => 'required',
		]);
		$data = $request->except(['_token']);
		$client->update($data);
		session()->flash('update_message', 'Added');
		return redirect()->route('admin.client.index');
	}

	public function delete($id)
	{
		$client = Client::where('id', $id)->first();
		$data['status'] = 9;
		$client->update($data);
		session()->flash('deactive_message', 'Deactived');
		return redirect()->route('admin.client.index');
	}
}
