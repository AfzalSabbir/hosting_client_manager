<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/payment.payment') )

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
	#total_ td {
		border: none !important;
	}
</style>
@endsection

<!-- This Section Will Shown <body>In Here</body> -->
@section('content')
<!-- Top Management Part -->
<div class="app-title">
	<div>
		<h1><i class="{{ 'fa fa-money' }}"></i> {{ __('backend/payment.payment_management') }}</h1>
	</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('backend/default.dashboard') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/payment.payment') }}</li>
	</ul>
</div>

<!-- Table Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">

			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-table' }}"></i> {{ __('backend/payment.payment_list') }}</h2></div>
					<div class="col-md-6">
						<h2>
							<a href="#" onclick="print_method()" class="ml-3 btn btn-primary text-center float-right">
								<i class="fa fa-print"></i>
							</a>
						</h2>
						<a href="{{ route('admin.payment.add') }}" class="float-right btn btn-primary"><i class="fa fa-plus"></i> {{ __('backend/default.add_new') }}</a>
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
					Payment List
				</h6>
			</div>

                <form action="{{ route('admin.payment.index') }}" method="post" class="none alert-info px-2 py-2 pb-0 mb-3 br-2">
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

                        <div class="col-md-2 my-1">
                            <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile" value="{{ $app->request->input('mobile') }}">
                        </div>

                        <div class="col-md-6">
                        	<div class="form-row">
		                        <div class="col-md-5 my-1">
		                            <select class="form-control" name="district_id" id="district">
		                                <option disabled="" selected="">-- Select District --</option>
		                                @foreach($D_U as $key => $upazilas)
		                                	<option value="{{ $key }}" {{ $app->request->input('district_id') == $key ? 'selected' : '' }}>{{ $upazilas['district_name'] }}</option>
		                                @endforeach
		                            </select>
		                        </div>
		                        <div class="col-md-5 my-1">
		                            <select class="form-control" name="upazila_id" id="upazila">
		                                <option id="first_option" disabled="" selected="">-- Select Upazila --</option>
		                                @if($app->request->input('district_id'))
			                                @foreach($D_U as $key => $upazilas)
				                                @if($app->request->input('district_id') == $key)
					                				@foreach($upazilas['upazila'] as $k => $upazila)
						                       			<option value="{{ $k }}" {{ $app->request->input('upazila_id') == $k ? 'selected' : '' }}>{{ $upazila }}</option>
													@endforeach
				                                @endif
			                                @endforeach
		                                @endif
		                            </select>
		                        </div>
		                        <div class="col-md-2 my-1">
		                            <button type="submit" class="submit_btn btn btn-primary float-right">Search</button>
		                        </div>
		                    </div>
                        </div>
                    </div>
                </form>
                <div class="d-none">
                	@foreach($D_U as $key => $upazilas)
                		<div id="_{{ $key }}">
                            <option id="first_option" disabled="" selected="">-- Select Upazila --</option>
                			@foreach($upazilas['upazila'] as $k => $upazila)
                       			<option value="{{ $k }}">{{ $upazila }}</option>
							@endforeach
                       	</div>
					@endforeach
                </div>
				<!-- Permission for Admin Access -->
				@php
				$permissions = \App\Models\Menu::orderBy('id', 'desc')->where('url', substr(url()->current(), 1+strlen(url('/'))))
				->orWhere('url', substr(url()->current(), strlen(url('/'))))->first();
				if(Auth::guard('admin')->user()->admin_role == 3){
					$bodyMenu = \App\Models\Role::where('admin_id', Auth::guard('admin')->id())->first();
				}
				else{
					$bodyMenu = \App\Models\Role::where('role', Auth::guard()->user()->admin_role)->first();
				}

				@endphp

				<div class="toggle-table-column alert-info br-2 p-2 mb-2 none">
					<strong>{{ __('backend/default.table_toggle_message') }} </strong>
					<br>
					<a href="#" class="toggle-vis" data-column="0"><b>{{ __('backend/default.sl') }}</b></a> |
					<a href="#" class="toggle-vis" data-column="1"><b>{{ __('backend/client.client') }}</b></a> |
					<a href="#" class="toggle-vis" data-column="2"><b>{{ __('backend/default.mobile') }}</b></a> |
					<a href="#" class="toggle-vis" data-column="3"><b>{{ __('backend/payment.project_price') }}</b></a> |
					<a href="#" class="toggle-vis" data-column="4"><b>{{ __('backend/default.payment') }}</b></a> |
					<a href="#" class="toggle-vis" data-column="5"><b>{{ __('backend/payment.due') }}</b></a> |
					<a href="#" class="toggle-vis" data-column="6"><b>{{ __('backend/default.status') }}</small></b></a> |
					<a href="#" class="toggle-vis" data-column="7"><b>{{ __('backend/default.action') }}</small></b></a>

				</div>
				<div class="table-responsive pt-1">
					<table id="datatable" class="table table-bordered table-hover table-striped display">

						<thead class="alert-secondary">
							<th>{{ __('backend/default.sl') }}</th>
							<th>{{ __('backend/client.client') }}</th>
							<th>{{ __('backend/default.mobile') }}</th>
							<th>{{ __('backend/payment.project_price') }}</th>
							<th>{{ __('backend/payment.payment') }}</th>
							<th>{{ __('backend/payment.due') }}</th>
							<th class="text-center">{{ __('backend/default.status') }}</th>
							<th class="action">{{ __('backend/default.action') }}</th>
						</thead>
						<tbody>
							@foreach ($rows as $row)
							<tr class="{{ $row->status == 0 ? 'deactive_':'' }}">
								<td>{{ $loop->index+1 }}</td>
								<td>{{ $row->name }}</td>
								<td>{{ $row->mobile }}</td>
								<td>{{ $row->project_price }}</td>
								<td>{{ $row->payment }}</td>
								<td>{{ $row->due }}</td>
								{{-- <td>{{ $row->status == 1 ? 'Actived' : 'Deactived' }}</td> --}}
								<td class="text-center h3">
									{!!
										$row->project_price == $row->payment ? '
										<i title="Paid" class="fa fa-check text-success"></i><span class="d-none">1 Paid</span>
										' : ( $row->payment > 0 ? '
										<i title="Due" class="fa fa-warning text-warning"></i><span class="d-none">0 Due</span>
										' : '
										<i title="Not Paid" class="fa fa-times text-danger"></i><span class="d-none">-1 Not Paid, NotPaid, Due</span>
										')
									!!}
								</td>
								<td class="action">
									<div class="btn-group">

										<!-- Checking Admin Access -->
										@foreach($permissions->submenus as $key => $permission)
										@if(\App\Models\Menu::checkBodyMenu($permission->id, $bodyMenu->in_body))

										@if($key == 0)
										<a title="Payment History" class="btn btn-info {{ $row->payment > 0 ? '' : 'disabled' }}" {{ $row->payment > 0 ? '' : 'disabled' }} href="{{ route($permission->route, $row->client_id).'?name='.urlencode($row->name) }}"><i class="fa fa-history"></i></a>
										@elseif($key == 1)
										<a title="Edit" class="btn btn-warning" href="{{ route($permission->route, $row->client_id).'?name='.urlencode($row->name) }}"><i class="fa fa-edit"></i></a>
										@elseif($key == 2)
										<button title="Delete" class="btn text-white {{ $row->status == 0? ' btn-secondary disabled':' btn-danger' }}" onClick="deleteMethod({{ $row->client_id }})" {{ $row->status == 0? 'disabled':'' }}><i class="fa fa-trash"></i></button>
										@endif

										@endif
										@endforeach
									</div>
								</td>
							</tr>
							@endforeach
							
						</tbody>
					</table>
					<div id="total_" class="row mx-0 mt-3" style="display: none;">
						<div class="col-md-9"></div>
						<div class="col-md-3 br-4 px-0" style="border: 1px solid #ddd;">
							<table class="table mb-0 table-striped">
								<tbody>
									<tr>
										<td><strong>Total Project Price</strong></td>
										<td>:</td>
										<td class="text-right">{{ $rows->sum('payment')+$rows->sum('due') }}TK</td>
									</tr>
									<tr>
										<td><strong>Total Paid</strong></td>
										<td>:</td>
										<td class="text-right">{{ $rows->sum('payment') }}TK</td>
									</tr>
									<tr>
										<td><strong>Total Due</strong></td>
										<td>:</td>
										<td class="text-right">{{ $rows->sum('due') }}TK</td>
									</tr>
								</tbody>
							</table>
						</div>
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
	$(document).ready(function() {

		$('body').addClass('sidenav-toggled');

		$('select[name=datatable_length]').on('change', function(event) {
			if ($(this).val() == '-1') {
				$('#total_').show();
			} else {
				$('#total_').hide();
			}
			event.preventDefault();
			/* Act on the event */
		});

		$('#district').select2();
		$('#upazila').select2();

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

		$('#district').on('change', function(){
			$('#upazila').html($('#_'+$(this).val()).html());
			$('#upazila').select2({
				placeholder: '-- Select Upazila --'
			});
			$('#upazila').val(null).trigger('change');
		});

		$('.toggle-vis').on('click', function(){
			if (!$(this).hasClass('text-danger')) {
				$(this).addClass('text-danger');
			} else {
				$(this).removeClass('text-danger');
			}
		});
		
		$('.submit_btn').on('click', function(event) {
			if (!($('#fromDate input').val().length > 0 || $('#toDate input').val().length > 0 || $('#mobile').val().length > 0 || $('#district').val() != null || $('#upazila').val() != null )) {
				event.preventDefault();
			}
		});

	});
</script>
@endsection