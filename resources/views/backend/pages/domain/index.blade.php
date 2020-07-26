<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/domain.domain') )

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
		<h1><i class="{{ 'fa fa-dashcube' }}"></i> {{ __('backend/domain.domain_management') }}</h1>
	</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('backend/default.dashboard') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/domain.domain') }}</li>
	</ul>
</div>

<!-- Table Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">

			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-table' }}"></i> {{ __('backend/domain.domain_list') }}</h2></div>
					{{-- <div class="col-md-6"><a href="{{ route('admin.domain.add') }}" class="float-right btn btn-primary"><i class="fa fa-plus"></i> {{ __('backend/default.add_new') }}</a></div> --}}
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

				<div class="toggle-table-column alert-info br-2 p-2 mb-2">
					<strong>{{ __('backend/default.table_toggle_message') }} </strong><br>
					<a href="#" class="toggle-vis" data-column="0"><b>{{ __('backend/default.sl') }}</b></a> |
					<a href="#" class="toggle-vis" data-column="1"><b>{{ __('backend/domain.domain_name') }}</b></a> |
					<a href="#" class="toggle-vis" data-column="2"><b>{{ __('backend/domain.username') }}</b></a> |
					<a href="#" class="toggle-vis" data-column="3"><b>{{ __('backend/domain.password') }}</b></a> |
					<a href="#" class="toggle-vis" data-column="4"><b>{{ __('backend/database.database') }}</b></a> |
					<a href="#" class="toggle-vis" data-column="5"><b>{{ __('backend/default.action') }}</small></b></a>

				</div>
				<div class="table-responsive pt-1">
					<table id="datatable" class="table table-bordered table-hover display">

						<thead>
							<th class="text-center">{{ __('backend/default.sl') }}</th>
							<th>{{ __('backend/domain.domain_name') }}</th>
							<th>{{ __('backend/domain.username') }}</th>
							<th>{{ __('backend/domain.password') }}</th>
							<th class="text-center">{{ __('backend/database.database') }}</th>
							<th class="action text-center">{{ __('backend/default.action') }}</th>
						</thead>
						<tbody>						    
							@foreach ($rows as $row)
							<tr class="">
								<td class="text-center">{{ $loop->index+1 }}</td>
								<td title="Click to copy ''{{ $row->domain_name }}''" class="cursor-copy" onclick="copyElementText(this.id)" id="_{{ $row->id }}_1">{{ $row->domain_name }}</sup></td>
								<td title="Click to copy ''{{ $row->d_username }}''" class="cursor-copy" onclick="copyElementText(this.id)" id="_{{ $row->id }}_2">{{ $row->d_username }}</td>
								<td title="Click to copy ''{{ $row->d_password }}''" class="cursor-copy" onclick="copyElementText(this.id)" id="_{{ $row->id }}_3">{{ $row->d_password }}</td>
								<td class="text-center">
									<span class="badge badge-info" style="font-size: 85%;">{{ count($row->db) }}</span>
								</td>
								<td class="action">
									<div class="btn-group">

										<!-- Checking Admin Access -->
										@foreach($permissions->submenus as $key => $permission)
										@if(\App\Models\Menu::checkBodyMenu($permission->id, $bodyMenu->in_body))
											@if($key == 0)
											<a {{ count($row->db) > 0 ? '':'disabled' }} href="{{ route('admin.domain.view', $row->id) }}" class="btn btn-info {{ count($row->db) > 0 ? '':'disabled' }}"  title="Databases" ><i class="fa fa-database"></i></a>
	                                        @elseif($key == 1)
	                                        <a href="{{ route('admin.domain.edit', $row->id) }}" class="btn btn-warning" title="Edit" ><i class="fa fa-edit"></i></a>
	                                        @else
	                                        <button title="Delete" class="btn {{ $row->status == 0 ? 'btn-secondary disabled':' btn-danger' }}" onClick="deleteMethod({{ json_encode($row->id) }})" role="button" {{ $row->status == 0? 'disabled':'' }}><i class="fa fa-trash"></i></button>
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
	function copyElementText(id) {
		var text = document.getElementById(id).innerText;
		var elem = document.createElement("textarea");
		document.body.appendChild(elem);
		elem.value = text;
		elem.select();
		document.execCommand("copy");
		document.body.removeChild(elem);
		$('#'+id).closest('table').find('.text-success').removeClass('text-success');
		$('#'+id).addClass('text-success');
	}
</script>
@endsection