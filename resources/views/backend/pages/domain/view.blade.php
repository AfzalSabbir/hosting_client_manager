<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/domain.view_domain') )

<!-- Write Styles <style>In Here</style> -->
@section('styles')
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
		<li class="breadcrumb-item"><a href="{{ route('admin.domain.index') }}">{{ __('backend/domain.domain') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/default.view') }}</li>
	</ul>
</div>

<!-- Table Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card ">

			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-eye' }}"></i> {{ __('backend/domain.view_domain') }}</h2></div>
					<div class="col-md-6">
						<div class="btn-group float-right">
							<a href="{{ route('admin.domain.index') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a><a href="{{ route('admin.domain.edit',$row->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> {{ __('backend/default.edit') }}</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="card-body">
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
							<td>
								<div class="btn-group">
									<a href="{{ route('admin.database.edit', $db->id) }}" class="btn btn-success text-white" title="view history" ><i class="fa fa-edit"></i></a>
									<button title="Delete" class="btn btn-danger" onClick="" role="button"><i class="fa fa-trash mx-0"></i></button>
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
@endsection

<!-- Write Scripts <script fileType="text/javascript">In Here</script> -->
@section('scripts')
<script type="text/javascript">
	$(document).ready(function() {
		$('.database').on('mouseover', function(event) {
			$('#database_detail').fadeIn('500');
			event.preventDefault();
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