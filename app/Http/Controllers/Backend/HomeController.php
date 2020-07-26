<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\QueryHelper;
use Countries;
use Auth;
use Hash;
use DB;

class HomeController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth:admin');
    }

    /**
     * Admin Dashboard 
    */
    public function index()
    {

      $today = date('Y-m-d');

      $clients = DB::table('clients')
      ->orderBy('status', 'desc')
      ->orderBy('id', 'desc')
      ->get();

      $costs = DB::table('costs')
      ->orderBy('status', 'desc')
      ->orderBy('id', 'desc')
      ->get();

      $payments = DB::table('payments')
      ->orderBy('status', 'desc')
      ->orderBy('id', 'desc')
      //->where('payment', '>', 0)
      ->get();

      $general_incomes = DB::table('general_incomes')
      ->orderBy('status', 'desc')
      ->orderBy('id', 'desc')
      ->get();

      $clients_today = DB::table('clients')
      ->orderBy('status', 'desc')
      ->orderBy('id', 'desc')
      ->whereBetween('created_at', [$today, date('Y-m-d', strtotime($today. ' + 1 days'))])
      ->get();

      $costs_today = DB::table('costs')
      ->orderBy('status', 'desc')
      ->orderBy('id', 'desc')
      ->whereBetween('created_at', [$today, date('Y-m-d', strtotime($today. ' + 1 days'))])
      ->get();

      $payments_today = DB::table('payment_histories')
      ->orderBy('status', 'desc')
      ->orderBy('id', 'desc')
      //->where('payment', '>', 0)
      ->whereBetween('created_at', [$today, date('Y-m-d', strtotime($today. ' + 1 days'))])
      ->get();
      
      $dues_today = DB::table('payments')
      ->orderBy('status', 'desc')
      ->orderBy('id', 'desc')
      //->where('payment', '>', 0)
      ->whereBetween('updated_at', [$today, date('Y-m-d', strtotime($today. ' + 1 days'))])
      ->get();

      $general_incomes_today = DB::table('general_incomes')
      ->orderBy('status', 'desc')
      ->orderBy('id', 'desc')
      ->whereBetween('created_at', [$today, date('Y-m-d', strtotime($today. ' + 1 days'))])
      ->get();
        
      //dd($payments_today);
      return view('backend.pages.index', compact('clients', 'costs', 'payments', 'general_incomes', 'clients_today', 'costs_today', 'payments_today', 'dues_today', 'general_incomes_today'));
    }

    public function chart()
    {
      return view('backend.pages.demo.chart');
    }

    public function form()
    {
      return view('backend.pages.demo.form');
    }

    public function table()
    {
      return view('backend.pages.demo.table');
    }


    /*
     * Change password form
    */
    public function chnagePasswordForm()
    {
        return view('backend.pages.changePasswordForm');
    }


    /*
    * Change password with matching old one
    */
    public function chnagePassword(Request $request)
    {
        $this->validate($request, [
          'old_password' => 'required',
          'password' => 'required|confirmed',
          'password_confirmation' => 'required'
        ]);

        $admin = Auth::guard('admin')->user();

        if(Hash::check($request->old_password, $admin->password)){
          $admin->password = Hash::make($request->password);
          $admin->save();

          session()->flash('success', 'Password changed successfully');
          return back();
        }
        else{
          session()->flash('old_password', 'Old password does not match');
          return back();
        }
    }
}
