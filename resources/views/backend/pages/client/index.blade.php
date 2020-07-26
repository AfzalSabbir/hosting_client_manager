<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/client.client') )

<!-- Write Styles <style>In Here</style> -->
@section('styles')
<style type="text/css">
	.table th, .table td {
		padding: 0.5rem !important;
		padding-right: 1.3rem !important;
	}
</style>
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
</style>
@endsection

<!-- This Section Will Shown <body>In Here</body> -->
@section('content')
<!-- Top Management Part -->
<div class="app-title">
	<div>
		<h1><i class="{{ 'fa fa-id-card' }}"></i> {{ __('backend/client.client_management') }}</h1>
	</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('backend/default.dashboard') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/client.client') }}</li>
	</ul>
</div>

<!-- Table Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">

			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-table' }}"></i> {{ __('backend/client.client_list') }}</h2></div>
					<div class="col-md-6">
						<h2>
							<a href="#" onclick="print_method()" class="btn btn-primary text-center float-right">
								<i class="fa fa-print"></i>
							</a>
						</h2>
						<a href="{{ route('admin.client.add') }}" class="float-right btn btn-primary mr-2"><i class="fa fa-plus"></i> {{ __('backend/default.add_new') }}</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="card-body">

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
					<kbd class="bg-light">
						<a href="#" class="toggle-vis" data-column="1">
							<b>{{ __('backend/default.name') }} {{ __('backend/default.district') }} {{ __('backend/default.upazila') }}</b>
						</a>
					</kbd> |
					<a href="#" class="toggle-vis" data-column="2"><b>{{ __('backend/default.contact_person') }}</b></a> |
					<kbd class="bg-light">
						<a href="#" class="toggle-vis" data-column="3">
							<b>{{ __('backend/default.mobile') }} {{ __('backend/default.email') }} {{ __('backend/default.address') }}</b>
						</a> 
					</kbd> |
					<kbd class="bg-light">
						<a href="#" class="toggle-vis" data-column="4">
							<b>{{ __('backend/default.domain') }} {{ __('backend/default.hosting') }} {{ __('backend/default.expiration_date') }}</b>
						</a>
					</kbd> |
					<kbd class="bg-light">
						<a href="#" class="toggle-vis" data-column="5">
							<b>{{ __('backend/default.project_price') }} {{ __('backend/default.renewal_price') }} {{ __('backend/default.service_charge') }}</b>
						</a>
					</kbd> |
					{{-- <a href="#" class="toggle-vis" data-column="6"><b>{{ __('backend/default.expiration_date') }}</b></a> | --}}
					<a href="#" class="toggle-vis" data-column="6"><b>{{ __('backend/default.status') }}</small></b></a> |
					<a href="#" class="toggle-vis" data-column="7"><b>{{ __('backend/default.action') }}</small></b></a>

				</div>
				<div class="hide w-100">
					<h3 class="text-center">
						F iT Lab Client Manager
					</h3>
					<h6 class="text-center">
						Client List
					</h6>
				</div>
				<div class="table-responsive pt-1">
					<table id="datatable" class="table table-bordered table-hover display table-striped" style="font-size: smaller;">
						<thead>

		                    <tr class="alert-secondary">
								<th>{{ __('backend/default.sl') }}</th>
		                        <th>
		                        	~&nbsp;{{ __('backend/default.name') }}<br>
		                        	~&nbsp;{{ __('backend/default.district') }}<br>
		                        	~&nbsp;{{ __('backend/default.upazila') }}
		                        </th>
		                        <th>{{ __('backend/default.contact_person') }}</th>
		                        <th>
		                        	~&nbsp;{{ __('backend/default.mobile') }}<br>
		                        	~&nbsp;{{ __('backend/default.email') }}<br>
		                        	~&nbsp;{{ __('backend/default.address') }}
		                        </th>
		                        <th>
		                        	~&nbsp;{{ __('backend/default.domain') }}<br>
		                        	~&nbsp;{{ __('backend/default.hosting') }}<br>
		                        	~&nbsp;{{ __('backend/default.expiration_date') }}
		                        </th>
		                        <th style="width: 85px !important;">
		                        	~&nbsp;{{ __('backend/default.project_price') }}<br>
		                        	~&nbsp;{{ __('backend/default.renewal_price') }}<br>
		                        	~&nbsp;{{ __('backend/default.service_charge') }}
		                        </th>
		                        {{-- <th>{{ __('backend/default.expiration_date') }}</th> --}}
								<th>{{ __('backend/default.status') }}</th>
								<th class="action">{{ __('backend/default.action') }}</th>
		                    </tr>

						</thead>
						<tbody>
							@foreach ($rows as $row)
							<tr class="{{ $row->status == 0 ? 'deactive_':'' }}">
								<td class="px-0 ">{{ $loop->index+1 }}</td>
								<td class="px-0 " style="padding: 0 !important;">
									<table class="w-100 table table-bordered mb-0">
										<tbody class="w-100">
											<tr><td>~&nbsp;{{ $row->name }}<br></td></tr>
											<tr><td>~&nbsp;{{ $row->district->name }}<br></td></tr>
											<tr><td>~&nbsp;{{ $row->upazila->name }}</td></tr>
										</tbody>
									</table>
								</td>
								<td class="px-0 ">{{ $row->contact_person }}</td>
								<td class="px-0 " style="padding: 0 !important;">
									<table class="w-100 table table-bordered mb-0">
										<tbody class="w-100">
											<tr><td>~&nbsp;{{ $row->mobile }}<br></td></tr>
											<tr><td>~&nbsp;{{ $row->email }}<br></td></tr>
											<tr><td>~&nbsp;{{ $row->address }}</td></tr>
										</tbody>
									</table>
								</td>
								<td class="px-0 " style="padding: 0 !important;">
									<table class="w-100 table table-bordered mb-0">
										<tbody class="w-100">
											<tr><td>~&nbsp;{{ $row->domain }}<br></td></tr>
											<tr><td>~&nbsp;{{ $row->hosting }}<br></td></tr>
											<tr><td>~&nbsp;{{ date('Y-m-d', strtotime($row->expiration_date)) }}</td></tr>
										</tbody>
									</table>
								</td>
								<td class="text-left" style="padding: 0 !important; width: 100px;">
									<table class="w-100 table table-bordered mb-0">
										<tbody class="w-100">
											<tr><td>~&nbsp;{{ $row->project_price }}&nbsp;TK<br></td></tr>
											<tr><td>~&nbsp;{{ $row->renewal_price }}&nbsp;TK<br></td></tr>
											<tr><td>~&nbsp;{{ $row->service_charge }}&nbsp;TK</td></tr>
										</tbody>
									</table>
								</td>
								{{-- <td class="px-0 ">{{ $row->expiration_date }}</td> --}}

								<td class="px-0 text-center h4">
									{!! isset($row->payment->id) ? ($row->payment->due == 0 ? '
										<i title="Paid: '.$row->project_price.' TK" class="fa fa-check text-success"></i>
										<span class="d-none">1 Paid</span>
									' : '
										<i title="Due: '.$row->payment->due.' TK" class="'.($row->project_price == $row->payment->due ? 'fa fa-times text-danger' : 'fa fa-warning text-warning').'"></i>
										<span class="d-none">0 Due</span>
									') : '
										<i title="Due: '.$row->project_price.' TK" class="fa fa-times text-danger"></i>
										<span class="d-none">0 Not Paid, NotPaid, Due</span>
									' !!}
								</td>
								<td class="px-0 action">
									<div class="btn-group">

										<!-- Checking Admin Access -->
										@foreach($permissions->submenus as $key => $permission)
										@if(\App\Models\Menu::checkBodyMenu($permission->id, $bodyMenu->in_body))

                                        @if($key == 0)
										<a title="Payment History" class="btn btn-info {{ isset($row->payment->payment) ? ($row->payment->payment > 0 ? '' : 'disabled'):'disabled' }}" {{ isset($row->payment->payment) ? ($row->payment->payment > 0 ? '' : 'disabled'):'disabled' }} href="{{ route('admin.payment.view', $row->id).'?name='.urlencode($row->name) }}"><i class="fa fa-history"></i></a>
                                        @elseif($key == 1)
                                        <a title="Edit" href="{{route($permission->route, $row->id)}}" class="btn btn-warning"><i class="fa fa-edit mx-0"></i></a>
                                        @else
                                        <button title="Delete" class="btn {{ $row->status == 0 ? 'btn-secondary disabled':' btn-danger' }}" onClick="deleteMethod({{ json_encode($row->id) }})" role="button" {{ $row->status == 0? 'disabled':'' }}><i class="fa fa-trash mx-0"></i></button>
                                        @endif

										@endif
										@endforeach
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>

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

		$('.toggle-vis').on('click', function(){
			if (!$(this).hasClass('text-danger')) {
				$(this).addClass('text-danger');
			} else {
				$(this).removeClass('text-danger');
			}
		});
	});
</script>
@endsection
