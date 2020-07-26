<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/general_income.general_income') )

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
		<h1><i class="{{ 'fa fa-credit-card' }}"></i> {{ __('backend/general_income.general_income_management') }}</h1>
	</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('backend/default.dashboard') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/general_income.general_income') }}</li>
	</ul>
</div>

<!-- Table Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">

			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-table' }}"></i> {{ __('backend/general_income.general_income_list') }}</h2></div>
					{{-- <div class="col-md-6"><a href="{{ route('admin.general_income.add') }}" class="float-right btn btn-primary"><i class="fa fa-plus"></i> {{ __('backend/default.add_new') }}</a></div> --}}
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
						F iT Lab Client Manager
					</h3>
					<h6 class="text-center">
						General Income List
					</h6>
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

					<a href="#" class="toggle-vis" data-column="0"><b>{{ __('backend/default.sl') }}</b></a> |
					<a href="#" class="toggle-vis" data-column="1"><b>{{ __('backend/default.date') }}</b></a> |
					<a href="#" class="toggle-vis" data-column="2"><b>{{ __('backend/default.source') }}</b></a> |
					<a href="#" class="toggle-vis" data-column="3"><b>{{ __('backend/default.amount') }}</b></a> |

					{{-- <a href="#" class="toggle-vis" data-column="4"><b>{{ __('backend/default.status') }}</small></b></a> | --}}
					<a href="#" class="toggle-vis" data-column="5"><b>{{ __('backend/default.action') }}</small></b></a>

				</div>
				<div class="table-responsive pt-1">
					<table id="datatable" class="table table-bordered table-hover display">

						<thead>
							<th>{{ __('backend/default.sl') }}</th>
							<th>{{ __('backend/default.date') }}</th>
							<th>{{ __('backend/default.source') }}</th>
							<th>{{ __('backend/default.amount') }}</th>

							{{-- <th>{{ __('backend/default.status') }}</th> --}}
							<th class="action">{{ __('backend/default.action') }}</th>
						</thead>
						<tbody>

							@foreach ($rows as $row)
							<tr class="{{ $row->status == 0 ? 'deactive_':'' }}">
								<td>{{ $loop->index+1 }}</td>
								<td>{{ $row->date }}</td>
								<td>{{ $row->source->source }}</td>
								<td>{{ $row->amount }}</td>

								{{-- <td>{{ $row->status == 1 ? 'Actived' : 'Deactived' }}</td> --}}
								<td class="action">
									<div class="btn-group">

										<!-- Checking Admin Access -->
										@foreach($permissions->submenus as $key => $permission)
										@if(\App\Models\Menu::checkBodyMenu($permission->id, $bodyMenu->in_body))

										@if($key == 0)
										<a title="Edit" class="btn btn-info" href="{{ route($permission->route, $row->id) }}"><i class="fa fa-edit"></i></a>
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
		//$('body').addClass('sidenav-toggled');

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