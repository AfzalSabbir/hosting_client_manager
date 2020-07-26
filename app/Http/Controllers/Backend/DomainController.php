<?php


namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploadHelper;
use App\Helpers\QueryHelper;
use App\Helpers\StringHelper;
use App\Helpers\NumberHelper;
use App\Models\Domain;
use App\Models\Database;
use DB;

class DomainController extends Controller
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
		$rows = Domain::orderBy('id', 'desc')->where('status', 1)->get();
		return view('backend.pages.domain.index', compact('rows'));
	}

	public function add()
	{
		return view('backend.pages.domain.add');
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'domain_name' => 'required',
			'd_username' => 'required',
			'd_password' => 'required',
		]);
		$data = $request->except(['_token']);

		QueryHelper::simpleInsert('Domain', $data);
		session()->flash('add_message', 'Added');
		return redirect()->route('admin.domain.index');
	}

	public function edit($id)
	{
		$row = Domain::where('id', $id)->where('status', 1)->first();
		return view('backend.pages.domain.edit', compact('row'));
	}

	public function view($id)
	{
		$row = Domain::where('id',$id)->where('status', 1)->first();
		return view('backend.pages.database.index', compact('row'));
	}

	public function update(Request $request, $id)
	{
		$domain = Domain::where('id', $id)->where('status', 1)->first();
		$this->validate($request, [
			'domain_name' => 'required',
			'd_username' => 'required',
			'd_password' => 'required',
		]);
		$data = $request->except(['_token']);
		$domain->update($data);
		session()->flash('update_message', 'Added');
		return redirect()->route('admin.domain.index');
	}

	public function delete($id)
	{
		Database::where('domain_id', $id)->update(['status' => 9]);
		Domain::where('id', $id)->update(['status' => 9]);
		session()->flash('deactive_message', 'Deactived');
		return redirect()->route('admin.domain.index');
	}
}
