<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Client;
use App\Models\Cost;
use App\Models\GeneralIncome;
use App\Models\RenewalHistory;
use App\Models\ServiceChargeHistory;
use Mail;
use DB;

class BalanceSheetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index(Request $request)
    {
    	$today = date('Y-m-d');
    	//dd(date_default_timezone_get());

		if ($request->isMethod('post')) {

			$payments = DB::table('clients')
			->leftjoin("payments as payment", "payment.client_id", "=", "clients.id")
			->select("clients.name as client_name", "payment.*")
			->where("payment.payment", '>', 0)
			->where("clients.status", 1)
			->where("payment.status", 1)
			->orderBy('name', 'asc');

            if($request->to_date || $request->from_date) {

				$payments = DB::table('clients')
				->leftjoin("payments as payment", "payment.client_id", "=", "clients.id")
				->select("clients.name as client_name", "clients.project_price as project_price", "clients.mobile as mobile", "payment.*")
				->where("payment.payment", '>', 0)
				->where("clients.status", 1)
				->where("payment.status", 1)
				->orderBy('payment_at', 'desc');
				//->get();

				$costs = Cost::orderBy('status', 'desc')
				->orderBy('id', 'desc');
				//->get();

				$general_incomes = GeneralIncome::orderBy('status', 'desc')
				->orderBy('id', 'desc');
				//->get();

	            if(!$request->to_date) {
	                $to_date = date("Y-m-d");
	            }
	            if($request->to_date && $request->from_date) {
	                $payments = $payments->whereBetween('payment_at', [$request->from_date, date('Y-m-d', strtotime($request->to_date. ' + 1 days'))]);
					$costs = $costs->whereBetween('date', [$today, date('Y-m-d', strtotime($today. ' + 1 days'))]);
					$general_incomes = $general_incomes->whereBetween('date', [$today, date('Y-m-d', strtotime($today. ' + 1 days'))]);
	            }

				$payments = $payments->get();
				$costs = $costs->get();
				$general_incomes = $general_incomes->get();

				//dd($payments,$costs,$general_incomes);

				return view('backend.pages.balance_sheet.index', compact('payments', 'costs', 'general_incomes'));

	        }

			$payments = $payments->get();
			return view('backend.pages.balance_sheet.index', compact('payments'));

		} else {

			$payments = DB::table('clients')
			->leftjoin("payment_histories as payment", "payment.client_id", "=", "clients.id")
			->select("clients.name as client_name", "payment.*")
			->where("payment.payment", '>', 0)
			->where("clients.status", 1)
			->where("payment.status", 1)
			->whereBetween('payment_at', [$today, date('Y-m-d', strtotime($today. ' + 1 days'))])
			->orderBy('name', 'asc')
			->get();

			$costs = Cost::orderBy('status', 'desc')
			->orderBy('id', 'desc')
			->whereBetween('date', [$today, date('Y-m-d', strtotime($today. ' + 1 days'))])
			->get();

			$general_incomes = GeneralIncome::orderBy('status', 'desc')
			->orderBy('id', 'desc')
			->whereBetween('date', [$today, date('Y-m-d', strtotime($today. ' + 1 days'))])
			->get();

			$renewal_domains = RenewalHistory::orderBy('status', 'desc')
			->orderBy('id', 'desc')
			->whereBetween('created_at', [$today, date('Y-m-d', strtotime($today. ' + 1 days'))])
			->get();

			$service_charges = ServiceChargeHistory::orderBy('status', 'desc')
			->orderBy('id', 'desc')
			->whereBetween('expiration_at', [$today, date('Y-m-d', strtotime($today. ' + 1 days'))])
			->get();

			//dd('Else',$payments,$costs,$general_incomes);

        	return view('backend.pages.balance_sheet.index', compact('payments', 'costs', 'general_incomes', 'renewal_domains', 'service_charges'));
		}
    }
}
