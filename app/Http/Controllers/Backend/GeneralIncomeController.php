<?php


namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUploadHelper;
use App\Helpers\QueryHelper;
use App\Helpers\StringHelper;
use App\Helpers\NumberHelper;
use App\Models\GeneralIncome;
use App\Models\Source;

class GeneralIncomeController extends Controller
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
		$rows = GeneralIncome::orderBy('status', 'desc')->orderBy('id', 'desc')->get();
		return view('backend.pages.general_income.index', compact('rows'));
	}

	public function add()
	{
		$sources = Source::orderBy('status', 'desc')->orderBy('id', 'desc')->where('source_type', 1)->get();
		return view('backend.pages.general_income.add', compact('sources'));
	}

	public function add_source(Request $request)
	{
		//dd(count(Source::where('source', $request->source)->where('source_type', $request->source_type)->get()) > 0);
		if (count(Source::where('source', $request->source)->where('source_type', $request->source_type)->get()) > 0) {
			session()->flash('add_message', 'Added');
			return redirect()->route('admin.general_income.add');
		}

		$this->validate($request, [
			'source' => 'required',
			'source_type' => 'required',
		]);

		$data = $request->except(['_token']);
		QueryHelper::simpleInsert('Source', $data);

		session()->flash('add_message', 'Added');
		return redirect()->route('admin.general_income.add');
	}

	public function store(Request $request)
	{
		//dd($request);
		$this->validate($request, [
			'source_id' => 'required',
			'date' => 'required',
			'amount' => 'required',
		]);
		$data = $request->except(['_token']);
		QueryHelper::simpleInsert('GeneralIncome', $data);
		session()->flash('add_message', 'Added');
		return redirect()->route('admin.general_income.index');
	}

	public function edit($id)
	{
		$row = GeneralIncome::where('id', $id)->first();
		return view('backend.pages.general_income.edit', compact('row'));
	}

	public function update(Request $request, $id)
	{
		$general_income = GeneralIncome::where('id', $id)->first();
		$this->validate($request, [
			'source_id' => 'required',
			'date' => 'required',
			'amount' => 'required',
		]);
		$data = $request->except(['_token']);
		$general_income->update($data);
		session()->flash('update_message', 'Added');
		return redirect()->route('admin.general_income.index');
	}

	public function delete($id)
	{
		$general_income = GeneralIncome::where('id', $id)->first();
		$data['status'] = 9;
		$general_income->update($data);
		session()->flash('deleted_message', 'Deleted');
		return redirect()->route('admin.general_income.index');
	}
}
