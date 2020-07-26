<?php


namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploadHelper;
use App\Helpers\QueryHelper;
use App\Helpers\StringHelper;
use App\Helpers\NumberHelper;
use App\Models\Cost;
use App\Models\Source;

class CostController extends Controller
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
		$rows = Cost::orderBy('status', 'desc')->orderBy('id', 'desc')->get();
		return view('backend.pages.cost.index', compact('rows'));
	}

	public function add()
	{
		$sources = Source::orderBy('status', 'desc')->orderBy('id', 'desc')->where('source_type', 2)->get();
		return view('backend.pages.cost.add', compact('sources'));
	}

	public function add_source(Request $request)
	{
		if (count(Source::where('source', $request->source)->where('source_type', $request->source_type)->get()) > 0) {
			session()->flash('add_message', 'Added');
			return redirect()->route('admin.cost.add');
		}

		$this->validate($request, [
			'source' => 'required',
			'source_type' => 'required',
		]);
		
		$data = $request->except(['_token']);
		QueryHelper::simpleInsert('Source', $data);

		session()->flash('add_message', 'Added');
		return redirect()->route('admin.cost.add');
	}


	public function store(Request $request)
	{
		$this->validate($request, [
			'source_id' => 'required',
			'date' => 'required',
			'amount' => 'required',
		]);
		$data = $request->except(['_token']);
		QueryHelper::simpleInsert('Cost', $data);
		session()->flash('add_message', 'Added');
		return redirect()->route('admin.cost.index');
	}

	public function edit($id)
	{
		$row = Cost::where('id', $id)->first();
		return view('backend.pages.cost.edit', compact('row'));
	}

	public function update(Request $request, $id)
	{
		$cost = Cost::where('id', $id)->first();
		$this->validate($request, [
			'source_id' => 'required',
			'date' => 'required',
			'amount' => 'required',
		]);
		$data = $request->except(['_token']);
		$cost->update($data);
		session()->flash('update_message', 'Added');
		return redirect()->route('admin.cost.index');
	}

	public function delete($id)
	{
		$cost = Cost::where('id', $id)->first();
		$data['status'] = 0;
		$cost->update($data);
		session()->flash('deactive_message', 'Deactived');
		return redirect()->route('admin.cost.index');
	}
}
