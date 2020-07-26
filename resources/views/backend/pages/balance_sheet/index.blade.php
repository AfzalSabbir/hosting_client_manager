<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/balance_sheet.balance_sheet') )

<!-- Write Styles <style>In Here</style> -->
@section('styles')
<style type="text/css">
	div.col-md-5.my-1 span.select2,
	.submit_btn {
		width: 100% !important;
	}
	label {
		margin-bottom: 0 !important; 
	}
	.dataTables_filter input {
		height: 30.38px !important;
	}
	#datatable_wrapper .row:nth-child(1) {
		padding: 8px 4px;
		border-radius: 2px;
		color: #383d41;
	    background-color: #e2e3e5;
	    border-color: #d6d8db;
	}
	thead tr:first-child {
		background-image: linear-gradient(#eee, #fff, #fff, #eee) !important;
	}

</style>
@endsection

<!-- This Section Will Shown <body>In Here</body> -->
@section('content')
<!-- Top Management Part -->
<div class="app-title">
	<div>
		<h1><i class="{{ 'fa fa-paperclip' }}"></i> {{ __('backend/balance_sheet.balance_sheet_management') }}</h1>
	</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('backend/default.dashboard') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/balance_sheet.balance_sheet') }}</li>
	</ul>
</div>

<!-- Table Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">

			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-table' }}"></i> {{ __('backend/balance_sheet.balance_sheet_list') }}</h2></div>
					{{-- <div class="col-md-6"><a href="{{ route('admin.balance_sheet.add') }}" class="float-right btn btn-primary"><i class="fa fa-plus"></i> {{ __('backend/default.add_new') }}</a></div> --}}
					<div class="col-md-6">
						<h2>
							<a href="#" onclick="print_method()" class="btn btn-primary text-center float-right">
								<i class="fa fa-print"></i>
							</a>
						</h2>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>

			<div class="card-body">
				<div class="hide w-100">
					<h3 class="text-center">
						FITLab Client Manager
					</h3>
					<h6 class="text-center">
						Balance Sheet
					</h6>
				</div>
                <form action="{{ route('admin.balance_sheet.index') }}" method="post" class="none alert-info px-2 py-2 pb-0 mb-3 br-2">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-2 my-1">
                            <div class="input-group date" id="fromDate" data-provide="datepicker">
                                <input placeholder="From Date" type="text" class="form-control" name="from_date" value="{{ $app->request->input('from_date') }}" autocomplete="off">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 my-1">
                            <div class="input-group date" id="toDate" data-provide="datepicker">
                                <input placeholder="To Date" type="text" class="form-control" name="to_date" value="{{ $app->request->input('to_date') }}" autocomplete="off">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                        	<div class="form-row">
		                        <div class="col-md-2 my-1">
		                            <button type="submit" class="submit_btn btn btn-primary float-right">Search</button>
		                        </div>
		                    </div>
                        </div>
                    </div>
                </form>
	            <div class="row">
	                <div class="col-md-12 mb-2">
	                	<div class="d-none d-md-block" style="height: 13px;border-left: 2px solid #dee2e6;position: absolute;z-index: 10;left: 50%;bottom: 12px;"></div>
	                	<div class="col-md-6 d-none d-md-block" style="height: 20px;border: 2px solid #dee2e6;border-bottom: none;position: absolute;z-index: 10;left: 25%;bottom: -8px;"></div>
	                    <table class="table table-bordered table-striped br-4 mb-4 text-center">
	                    	<thead>
		                        <tr>
	                            	<th colspan="6" class="text-center thead_td_1 cursor-default">Overview</th>
		                        </tr>
		                        <tr class="">
		                            <th>Payment</th>
		                            <th>Renewal</th>
		                            <th>Service</th>
		                            <th>General Income</th>
		                            <th>Cost</th>
		                            <th>Balance</th>
		                        </tr>
	                    	</thead>
	                    	<tbody>
	                    		<tr>
			                        <td class="alert-info">
			                        	<span class="" id="payment"></span>&nbsp;<sup><code class="text-default">TK</code></sup></th>
			                        </td>
			                        <td class="alert-info">
			                        	<span class="" id="renewal"></span>&nbsp;<sup><code class="text-default">TK</code></sup></th>
			                        </td>
			                        <td class="alert-info">
			                        	<span class="" id="service"></span>&nbsp;<sup><code class="text-default">TK</code></sup></th>
			                        </td>
			                        <td class="alert-info">
			                        	<span class="" id="general_income"></span>&nbsp;<sup><code class="text-default">TK</code></sup></th>
			                        </td>
			                        <td class="alert-warning">
			                        	<span class="" id="cost"></span>&nbsp;<sup><code class="text-default">TK</code></sup></th>
			                        </td>
			                        <td class="alert-success">
			                        	<span class="" id="total_balance"></span>&nbsp;<sup><code class="text-default">TK</code></sup></th>
			                        </td>
	                    		</tr>
		                    </tbody>
	                    </table>
	                    {{-- <h3 class="mt-4">
	                    	Balance : 
	                        <span class="border py-1 px-4" id="sub_balance"></span>
	                         - 
	                        <span class="border py-1 px-4" id="cost"></span>
	                        =
	                        <span class="border py-1 px-4" id="total_balance"></span>
	                    </h3> --}}
	                </div>
	                <div class="col-md-6 mb-2">
		                <div class="position-relative">
		                    <table class="table table-bordered table-striped br-4 mb-4">
		                    	<thead>
			                        <tr>
		                            	<th colspan="4" class="text-center thead_td_1 cursor-pointer">Payment ({{ count($payments) }})</th>
			                        </tr>
			                        <tr class="">
			                            <th style="width: 7%">SL</th>
			                            <th style="width: 20%">Date</th>
			                            <th>Client</th>
			                            <th style="width: 15%">Amount</th>
			                        </tr>
		                    	</thead>
		                    	<tbody>
		                    		@if(count($payments) > 0)
				                        @foreach($payments as $payment)
					                        <tr class="all_data">
					                            <td>{{ $loop->index+1 }}</td>
					                            <td>{{ date('Y-m-d' ,strtotime($payment->payment_at)) }}</td>
					                            <td>{{ $payment->client_name }}</td>
					                            <td>{{ $payment->payment }}&nbsp;<sup><code class="text-default">TK</code></sup></th></td>
					                        </tr>
				                        @endforeach
				                    @else
				                    	<tr class="text-center alert-danger all_data" style="background-image: linear-gradient(to right, #f8d7da, #fff, #fff, #f8d7da) !important;">
				                    		<td colspan="4"><i class="fa fa-warning"></i> No Data Available</td>
				                    	</tr>
				                    @endif
		                    		<tr class="alert-success">
			                            <th colspan="3" class="text-right" style="background-image: linear-gradient(to right, #d4edda, #fff) !important;">Total</th>
			                            <th id="total_payment" style="background-image: linear-gradient(to right, #fff, #d4edda) !important;">{{ $payments->sum('payment') }}&nbsp;<sup><code class="text-default">TK</code></sup></th></th>
			                        </tr>
			                    </tbody>
		                    </table>
		                    <span class="d-none d-md-block" style="height: 26px; border-left: 2px solid #dee2e6; position: absolute; z-index: 10; left: 50%; bottom: -25px"></span>
	                	</div>
	                	<div class="position-relative">
		                    <table class="table table-bordered table-striped br-4 mb-4">
		                    	<thead>
			                        <tr>
			                            <th colspan="5" class="text-center thead_td_1 cursor-pointer">Renewal ({{ count($renewal_domains) }})</th>
			                        </tr>
			                        <tr class="">
			                            <th style="width: 7%">SL</th>
			                            <th style="width: 20%">Date</th>
			                            <th>Name</th>
			                            <th>Renewal</th>
			                            <th style="width: 15%">Amount</th>
			                        </tr>
		                    	</thead>
		                    	<tbody>
		                    		@if(count($renewal_domains) > 0)
				                        @foreach($renewal_domains as $renewal_domain)
					                        <tr class="all_data">
					                            <td>{{ $loop->index+1 }}</td>
					                            <td>{{ date('Y-m-d', strtotime($renewal_domain->created_at)) }}</td>
					                            <td>{{ $renewal_domain->client->name }}</td>
					                            <td>{{ $renewal_domain->renewal }} Months</td>
					                            <td>{{ $renewal_domain->renewal_amount }}&nbsp;<sup><code class="text-default">TK</code></sup></th></td>
					                        </tr>
				                        @endforeach
				                    @else
				                    	<tr class="text-center alert-danger all_data" style="background-image: linear-gradient(to right, #f8d7da, #fff, #fff, #f8d7da) !important;">
				                    		<td colspan="5"><i class="fa fa-warning"></i> No Data Available</td>
				                    	</tr>
				                    @endif
		                    		<tr class="alert-success">
			                            <th colspan="4" class="text-right" style="background-image: linear-gradient(to right, #d4edda, #fff) !important;">Total</th>
			                            <th id="total_renewal" style="background-image: linear-gradient(to right, #fff, #d4edda) !important;">{{ $renewal_domain->sum('renewal_amount') }}&nbsp;<sup><code class="text-default">TK</code></sup></th></th>
			                        </tr>
			                    </tbody>
		                    </table>
			                <span class="d-none d-md-block" style="height: 26px; border-left: 2px solid #dee2e6; position: absolute; z-index: 10; left: 50%; bottom: -25px"></span>
		            	</div>
	                	<div class="position-relative">
		                    <table class="table table-bordered table-striped br-4 mb-4">
		                    	<thead>
			                        <tr>
			                            <th colspan="5" class="text-center thead_td_1 cursor-pointer">Service ({{ count($service_charges) }})</th>
			                        </tr>
			                        <tr class="">
			                            <th style="width: 7%">SL</th>
			                            <th style="width: 20%">Date</th>
			                            <th>Name</th>
			                            <th>Service</th>
			                            <th style="width: 15%">Amount</th>
			                        </tr>
		                    	</thead>
		                    	<tbody>
		                    		@if(count($service_charges) > 0)
				                        @foreach($service_charges as $service_charges)
					                        <tr class="all_data">
					                            <td>{{ $loop->index+1 }}</td>
					                            <td>{{ date('Y-m-d', strtotime($service_charges->created_at)) }}</td>
					                            <td>{{ $service_charges->client->name }}</td>
					                            <td>{{ $service_charges->service }}</td>
					                            <td>{{ $service_charges->service_amount }}&nbsp;<sup><code class="text-default">TK</code></sup></th></td>
					                        </tr>
				                        @endforeach
				                    @else
				                    	<tr class="text-center alert-danger all_data" style="background-image: linear-gradient(to right, #f8d7da, #fff, #fff, #f8d7da) !important;">
				                    		<td colspan="5"><i class="fa fa-warning"></i> No Data Available</td>
				                    	</tr>
				                    @endif
		                    		<tr class="alert-success">
			                            <th colspan="4" class="text-right" style="background-image: linear-gradient(to right, #d4edda, #fff) !important;">Total</th>
			                            <th id="total_service" style="background-image: linear-gradient(to right, #fff, #d4edda) !important;">{{ $general_incomes->sum('service_amount') }}&nbsp;<sup><code class="text-default">TK</code></sup></th></th>
			                        </tr>
			                    </tbody>
		                    </table>
			                <span class="d-none d-md-block" style="height: 26px; border-left: 2px solid #dee2e6; position: absolute; z-index: 10; left: 50%; bottom: -25px"></span>
		            	</div>
	                	<div class="position-relative">
		                    <table class="table table-bordered table-striped br-4 mb-4">
		                    	<thead>
			                        <tr>
			                            <th colspan="4" class="text-center thead_td_1 cursor-pointer">General Income ({{ count($general_incomes) }})</th>
			                        </tr>
			                        <tr class="">
			                            <th style="width: 7%">SL</th>
			                            <th style="width: 20%">Date</th>
			                            <th>Source</th>
			                            <th style="width: 15%">Amount</th>
			                        </tr>
		                    	</thead>
		                    	<tbody>
		                    		@if(count($general_incomes) > 0)
				                        @foreach($general_incomes as $general_income)
					                        <tr class="all_data">
					                            <td>{{ $loop->index+1 }}</td>
					                            <td>{{ date('Y-m-d', strtotime($general_income->date)) }}</td>
					                            <td>{{ $general_income->source->source }}</td>
					                            <td>{{ $general_income->amount }}&nbsp;<sup><code class="text-default">TK</code></sup></th></td>
					                        </tr>
				                        @endforeach
				                    @else
				                    	<tr class="text-center alert-danger all_data" style="background-image: linear-gradient(to right, #f8d7da, #fff, #fff, #f8d7da) !important;">
				                    		<td colspan="4"><i class="fa fa-warning"></i> No Data Available</td>
				                    	</tr>
				                    @endif
		                    		<tr class="alert-success">
			                            <th colspan="3" class="text-right" style="background-image: linear-gradient(to right, #d4edda, #fff) !important;">Total</th>
			                            <th id="total_income" style="background-image: linear-gradient(to right, #fff, #d4edda) !important;">{{ $general_incomes->sum('amount') }}&nbsp;<sup><code class="text-default">TK</code></sup></th></th>
			                        </tr>
			                    </tbody>
		                    </table>
			            </div>
	                </div>
	                <div class="col-md-6 mb-2">
	                    <table class="table table-bordered table-striped br-4 mb-4">
	                    	<thead>
		                        <tr>
	                            	<th colspan="4" class="text-center thead_td_1 cursor-pointer">Cost ({{ count($costs) }})</th>
		                        </tr>
		                        <tr class="">
		                            <th style="width: 7%">SL</th>
		                            <th style="width: 20%">Date</th>
		                            <th>Source</th>
		                            <th style="width: 15%">Amount</th>
		                        </tr>
	                    	</thead>
	                    	<tbody>
	                    		@if(count($costs) > 0)
			                        @foreach($costs as $cost)
				                        <tr class="all_data">
				                            <td>{{ $loop->index+1 }}</td>
				                            <td>{{ date('Y-m-d' ,strtotime($cost->date)) }}</td>
				                            <td>{{ $cost->source->source }}</td>
				                            <td>{{ $cost->amount }}&nbsp;<sup><code class="text-default">TK</code></sup></th></td>
				                        </tr>
			                        @endforeach
			                    @else
			                    	<tr class="text-center alert-danger all_data" style="background-image: linear-gradient(to right, #f8d7da, #fff, #fff, #f8d7da) !important;">
			                    		<td colspan="4"><i class="fa fa-warning"></i> No Data Today</td>
			                    	</tr>
			                    @endif
	                    		<tr class="alert-success">
		                            <th colspan="3" class="text-right" style="background-image: linear-gradient(to right, #d4edda, #fff) !important;">Total</th>
		                            <th id="total_cost" style="background-image: linear-gradient(to right, #fff, #d4edda) !important;">{{ $costs->sum('amount') }}&nbsp;<sup><code class="text-default">TK</code></sup></th></th>
		                        </tr>
		                    </tbody>
	                    </table>
	                </div>
	            </div>
			</div>
		</div>
	</div>
</div>
@endsection

<!-- Write Scripts <script fileType="text/javascript">In Here</script> -->
@section('scripts')
<script type="text/javascript">
    var total_payment = document.getElementById("total_payment").textContent;
    var total_payment = parseFloat(total_payment);

    var total_income = document.getElementById("total_income").textContent;
    var total_income = parseFloat(total_income);

    var total_renewal = document.getElementById("total_renewal").textContent;
    var total_renewal = parseFloat(total_renewal);

    var total_service = document.getElementById("total_service").textContent;
    var total_service = parseFloat(total_service);

    var total_cost = document.getElementById("total_cost").textContent;
    var total_cost = parseFloat(total_cost);

    var sub_balance =  total_income + total_payment + total_renewal + total_service;

    var balance = sub_balance - total_cost;

    //document.getElementById("sub_balance").innerHTML = sub_balance;
    document.getElementById("payment").innerHTML = total_payment;
    document.getElementById("renewal").innerHTML = total_renewal;
    document.getElementById("service").innerHTML = total_service;
    document.getElementById("general_income").innerHTML = total_income;
    document.getElementById("cost").innerHTML = total_cost;
    document.getElementById("total_balance").innerHTML = balance;
</script>
<script type="text/javascript">

	//$('.thead_td_1').closest('thead').next('tbody').children('.all_data').hide();

	$(document).ready(function() {
		//$('body').addClass('sidenav-toggled');
		$('.thead_td_1').on('click', function() {
			$(this).closest('thead').next('tbody').children('.all_data').toggle('fast');
		});

		$('.toggle-vis').on('click', function(){
			if (!$(this).hasClass('text-danger')) {
				$(this).addClass('text-danger');
			} else {
				$(this).removeClass('text-danger');
			}
		});


		var today = new Date();

		$('#fromDate').datepicker({
			format: 'yyyy-mm-dd',
			autoclose:true,
			endDate: "today",
			maxDate: today
		}).on('changeDate', function (ev) {
			$(this).datepicker('hide');

			if (!($('#toDate input').val() >= $('#fromDate input').val()) && $('#fromDate input').val() != '' && $('#toDate input').val() != '') {

				var to_date = new Date($('#toDate input').val());

				var year = to_date.getFullYear();
				var month = to_date.getMonth();
				var date = to_date.getDate();
				var $date = new Date(year, month, date);

				$('#fromDate').datepicker("setDate", $date);

				alert("FromDate mustn't be future than ToDate");
			}
		});

		$('#toDate').datepicker({
			format: 'yyyy-mm-dd',
			autoclose:true,
			endDate: "today",
			maxDate: today
		}).on('changeDate', function (ev) {
			$(this).datepicker('hide');

			if (!($('#toDate input').val() >= $('#fromDate input').val()) && $('#fromDate input').val() != '' && $('#toDate input').val() != '') {

				var to_date = new Date($('#toDate input').val());

				var year = to_date.getFullYear();
				var month = to_date.getMonth();
				var date = to_date.getDate();
				var $date = new Date(year, month, date);

				$('#fromDate').datepicker("setDate", $date);

				alert("FromDate mustn't be future than ToDate");
			}
		});
		$('.submit_btn').on('click', function(event) {
			if (!($('#fromDate input').val().length > 0 && $('#toDate input').val().length > 0 )) {
				event.preventDefault();
			}
		});
		if (!($('#fromDate input').val().length > 0)) {
			$('#fromDate input').val("{{ date('Y-m-d') }}")
		}
		if (!($('#toDate input').val().length > 0)) {
			$('#toDate input').val("{{ date('Y-m-d') }}")
		}

		$('input').blur(function(event) {
			if (!($(this).val().length > 0)) {
				$(this).val("{{ date('Y-m-d') }}")
			}
		});
	});
</script>
@endsection