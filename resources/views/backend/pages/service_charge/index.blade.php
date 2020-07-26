<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/service_charge.service_charge') )

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
</style>
@endsection

<!-- This Section Will Shown <body>In Here</body> -->
@section('content')
<!-- Top Management Part -->
<div class="app-title">
	<div>
		<h1><i class="{{ 'fa fa-ambulance' }}"></i> {{ __('backend/service_charge.service_charge_management') }}</h1>
	</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('backend/default.dashboard') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/service_charge.service_charge') }}</li>
	</ul>
</div>

<!-- Table Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">

			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-table' }}"></i> {{ __('backend/service_charge.service_charge_list') }}</h2></div>
					{{-- <div class="col-md-6"><a href="{{ route('admin.service_charge.add') }}" class="float-right btn btn-primary"><i class="fa fa-plus"></i> {{ __('backend/default.add_new') }}</a></div> --}}
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
				//dd($permissions);
				@endphp

				<div class="toggle-table-column alert-info br-2 p-2 mb-2 none">
					<strong>{{ __('backend/default.table_toggle_message') }} </strong>
					<br>
					<a href="#" class="toggle-vis" data-column="0"><b>{{ __('backend/default.sl') }}</b></a> |

					<a href="#" class="toggle-vis" data-column="1"><b>{{ __('backend/default.name') }}</small></b></a> |
					<a href="#" class="toggle-vis" data-column="2"><b>{{ __('backend/default.mobile') }}</small></b></a> |
					<a href="#" class="toggle-vis" data-column="3"><b>{{ __('backend/service_charge.charge') }}</small></b></a> |
					<a href="#" class="toggle-vis" data-column="4"><b>{{ __('backend/default.domain') }}</small></b></a> |
					<a href="#" class="toggle-vis" data-column="5"><b>{{ __('backend/default.hosting') }}</small></b></a> |
					<a href="#" class="toggle-vis" data-column="6"><b>{{ __('backend/default.expire') }}</small></b></a> |
					<a href="#" class="toggle-vis" data-column="7"><b>{{ __('backend/default.state') }}</small></b></a> |
					<a href="#" class="toggle-vis" data-column="8"><b>{{ __('backend/default.action') }}</small></b></a>

				</div>
				<div class="table-responsive pt-1">
					<table id="datatable" class="table table-bordered table-hover display">

						<thead class="alert-secondary">
							<th class="text-center">{{ __('backend/default.sl') }}</th>
							<th>{{ __('backend/default.name') }}</th>
							<th>{{ __('backend/default.mobile') }}</th>
							<th class="text-center">{{ __('backend/service_charge.charge') }}</th>
							<th>{{ __('backend/default.domain') }}</th>
							<th>{{ __('backend/default.hosting') }}</th>
							<th class="text-center">{{ __('backend/default.expire') }}</th>
							<th class="text-center">{{ __('backend/default.state') }}</th>
							<th class="text-center action">{{ __('backend/default.action') }}</th>
						</thead>
						<tbody>

							@foreach ($rows as $row)
							<tr class="{{ ($row->status == 0 || strpos($row->expiration_at->diffForHumans(), 'ago') !== false) ? 'deactive_':'' }}">
								<td class="text-center">{{ $loop->index+1 }}</td>

								<td>{{ $row->client->name }}</td>
								<td>{{ $row->client->mobile }}</td>
								<td class="text-center">{{ $row->service_charge }}</td>
								<td>{{ $row->client->domain }}</td>
								<td>{{ $row->client->hosting }}</td>
								<td class="text-center px-0">
									<strong>{{ date('Y-m-d', strtotime($row->expiration_at)) }}</strong>
									<br>
									<small>{{ $row->expiration_at->diffForHumans() }}</small>
								</td>
								<td class="text-center">{{ $row->status == 1 && !(strpos($row->expiration_at->diffForHumans(), 'ago') !== false) ? 'Active' : 'Deactive' }}</td>
								<td class="action">
									<div class="btn-group">

										<!-- Checking Admin Access -->
										@foreach($permissions->submenus as $key => $permission)
										@if(\App\Models\Menu::checkBodyMenu($permission->id, $bodyMenu->in_body))

										@if($key == 0)
										<a title="History" class="btn btn-info" href="{{ route($permission->route, $row->id) }}"><i class="fa fa-history"></i></a>
                                        @elseif($key == 1)
                                        <a title="Servie" href="{{ asset('/admin/service_charge/add/'.$row->client_id) }}?name={{ urlencode($row->client->name) }}" class="btn btn-warning"><i class="fa fa-ambulance"></i></a>
										@else
										<button title="Delete" class="btn text-white {{ $row->status == 0? ' btn-secondary disabled':' btn-danger' }}" onClick="deleteMethod({{ $row->id }})" {{ $row->status == 0? 'disabled':'' }}><i class="fa fa-trash"></i></button>
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
										<td><strong>Total Service Charge</strong></td>
										<td>:</td>
										<td class="text-right">{{ $rows->sum('service_charge') }} TK</td>
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