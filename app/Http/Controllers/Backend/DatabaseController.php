<?php


namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploadHelper;
use App\Helpers\QueryHelper;
use App\Helpers\StringHelper;
use App\Helpers\NumberHelper;
use App\Models\Database;
use App\Models\Domain;

class DatabaseController extends Controller
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
		//$rows = Database::orderBy('status', 'desc')->orderBy('id', 'desc')->get();
		return view('backend.pages.database.index'/*, compact('rows')*/);
	}

	public function add()
	{
		$rows = Domain::orderBy('id', 'desc')->where('status', 1)->get();
		return view('backend.pages.database.add', compact('rows'));
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'domain_id' => 'required',
			'db_name' => 'required',
			'username' => 'required',
			'password' => 'required',
		]);
		$data = $request->except(['_token']);
		QueryHelper::simpleInsert('Database', $data);
		session()->flash('add_message', 'Added');
		return redirect()->route('admin.domain.index');
	}

	public function edit($id)
	{
		$row = Database::where('id', $id)->where('status', 1)->first();
		$domains = Domain::get();
		return view('backend.pages.database.edit', compact('row', 'domains'));
	}

	public function update(Request $request, $id)
	{
		$database = Database::where('id', $id)->where('status', 1)->first();
		$this->validate($request, [
			'domain_id' => 'required',
			'db_name' => 'required',
			'username' => 'required',
			'password' => 'required',
		]);
		$data = $request->except(['_token']);
		$database->update($data);
		session()->flash('update_message', 'Added');
		return redirect()->route('admin.domain.view', $database->domain_id);
	}

	public function delete($id)
	{
		$database = Database::where('id', $id)->where('status', 1)->update(['status' => 9]);
		session()->flash('Delete_message', 'Deactived');
		return redirect()->route('admin.domain.index');
	}
}
