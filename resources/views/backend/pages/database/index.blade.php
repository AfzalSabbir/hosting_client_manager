<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/database.database') )

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
		<h1><i class="{{ 'fa fa-database' }}"></i> {{ __('backend/database.database_management') }}</h1>
	</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('backend/default.dashboard') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/database.database') }}</li>
	</ul>
</div>

<!-- Table Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">

			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-table' }}"></i> {{ __('backend/database.database_list') }}</h2></div>
					<div class="col-md-6"><a href="{{ route('admin.database.add') }}" class="float-right btn btn-primary"><i class="fa fa-plus"></i> {{ __('backend/default.add_new') }}</a></div>
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="card-body">

				<!-- Permission for Admin Access -->
				@php
				$permissions = \App\Models\Menu::orderBy('id', 'desc')
					->Where('url', '/admin/database/add')->first();
				if(Auth::guard('admin')->user()->admin_role == 3){
					$bodyMenu = \App\Models\Role::where('admin_id', Auth::guard('admin')->id())->first();
				}
				else{
					$bodyMenu = \App\Models\Role::where('role', Auth::guard()->user()->admin_role)->first();
				}

				@endphp

				{{-- <div class="toggle-table-column alert-info br-2 p-2 mb-2">
					<strong>{{ __('backend/default.table_toggle_message') }} </strong><br>

					<a href="#" class="toggle-vis" data-column="0"><b>{{ __('backend/default.sl') }}</b></a> |

					<a href="#" class="toggle-vis" data-column="1"><b>{{ __('backend/default.status') }}</small></b></a> |
					<a href="#" class="toggle-vis" data-column="2"><b>{{ __('backend/default.action') }}</small></b></a>

				</div>--}}
				<div class="table-responsive pt-1">
					<table class="overflow-hidden table table-bordered display {{ (count($row->db) == null)? 'd-none':'' }}">
						<thead>
							<tr class="text-center">
								<th colspan="5" class="mb-0 pb-0" style="background-image: linear-gradient(#ddd, #d1ecf1, #d1ecf1, #d1ecf1);">
									<div class="h3 cursor-pointer database" {{-- title="Click to view detail" --}}>Database</div>
									<div class="row alert-info px-1 py-2 mt-2 database_detail" id="database_detail" {{-- style="display: none;" --}}>
										<div class="col-md-4 h5 mb-0">{{ __('backend/domain.domain_name') }}: <span style="font-weight: 100;">{{ $row->domain_name }}</span></div>
										<div class="col-md-4 h5 mb-0">{{ __('backend/domain.username') }}: <span style="font-weight: 100;">{{ $row->d_username }}</span></div>
										<div class="col-md-4 h5 mb-0">{{ __('backend/domain.password') }}: <span style="font-weight: 100;">{{ $row->d_password }}</span></div>
									</div>
								</th>
							</tr>
							<tr style="background-image: linear-gradient(#eee, #d1ecf1, #d1ecf1, #eee);">
								<th width="7">SL</th>
								<th>Name</th>
								<th>Username</th>
								<th>Password</th>
								<th width="20" class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
							{{-- Using Eloquent Relation --}}
							@foreach($row->db as $db)
							<tr>
								<td>{{ $loop->index+1 }}</td>
								<td class="cursor-copy" title="Click to copy ''{{ $db->db_name }}''" onclick="copyElementText(this.id)" id="_{{ $db->id }}_1">{{ $db->db_name }}</td>
								<td class="cursor-copy" title="Click to copy ''{{ $db->username }}''" onclick="copyElementText(this.id)" id="_{{ $db->id }}_2">{{ $db->username }}</td>
								<td class="cursor-copy" title="Click to copy ''{{ $db->password }}''" onclick="copyElementText(this.id)" id="_{{ $db->id }}_3">{{ $db->password }}</td>
								{{-- <td>
									<div class="btn-group">
										<a href="{{ route('admin.database.edit', $db->id) }}" class="btn btn-success text-white" title="view history" ><i class="fa fa-edit"></i></a>
										<button title="Delete" class="btn btn-danger" onClick="" role="button"><i class="fa fa-trash mx-0"></i></button>
									</div>
								</td> --}}
								<td class="action">
									<div class="btn-group">
										{{-- @dd($permissions) --}}
										<!-- Checking Admin Access -->
										@foreach($permissions->submenus as $key => $permission)
										@if(\App\Models\Menu::checkBodyMenu($permission->id, $bodyMenu->in_body))

										@if($key == 0)
										<a title="Edit" class="btn btn-info" href="{{ route($permission->route, $db->id) }}"><i class="fa fa-edit"></i></a>
										@else
										<button title="Delete" class="btn text-white {{ $db->status == 0? ' btn-secondary disabled':' btn-danger' }}" onClick="database_deleteMethod('{{ url('/') }}', {{ $db->id }})" {{ $db->status == 0? 'disabled':'' }}><i class="fa fa-trash"></i></button>
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

	@php 
		$full_url = explode('/', url()->current());
		$new_url = '/'.$full_url[count($full_url)-4].'/'.$full_url[count($full_url)-3].'/'.$full_url[count($full_url)-2];
	@endphp

	//console.log("{{ url('/') }}"+"/admin/database/delete/");

	$('.active_submenu').closest('ul').find('.active_submenu').removeClass('active_submenu');
	$('.treeview-menu li:nth-child(3)').children('a').addClass('active_submenu');

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