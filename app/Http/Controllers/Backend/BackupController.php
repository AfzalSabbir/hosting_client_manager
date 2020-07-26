<?php

namespace App\Http\Controllers\Backend;

use App\Helpers\ImageUploadHelper;
use App\Http\Controllers\Controller;
use Artisan;
use Illuminate\Http\Request;

class BackupController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:admin');
	}


	public function index()
	{
    	// directory we want to scan
		$dircontents = scandir(base_path('database\\Billing'));

		return view('backend.pages.backup.index', compact('dircontents'));
	}


	public function newBackup()
	{
		Artisan::call('backup:run');

		session()->flash('add_message', 'Succesfully Saved');
		return redirect()->route('admin.backup.index');
	}


	public function deleteBakup($file)
	{
		ImageUploadHelper::delete('database/Billing/'.$file);

		session()->flash('delete_message', 'Succesfully Deleted');
		return redirect()->route('admin.backup.index');
	}
}
