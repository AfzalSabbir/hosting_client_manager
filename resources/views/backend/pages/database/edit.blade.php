<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/database.edit_database') )

<!-- Write Styles <style>In Here</style> -->
@section('styles')
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
		<li class="breadcrumb-item"><a href="{{ route('admin.database.index') }}">{{ __('backend/database.database') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/default.edit') }}</li>
	</ul>
</div>

<!-- Edit Form Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-pencil-square' }}"></i> {{ __('backend/database.edit_database') }}</h2></div>
					{{-- <div class="col-md-6"><a href="{{ route('admin.database.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a></div> --}}
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="card-body">
				@include('backend.partials.error_message')
				<form class="form-horizontal" action="{{ route('admin.database.update', $row->id) }}" method="post" enctype="multipart/form-data">
					@csrf
					
					<div class="form-group">
						<div class="col-md-6 mb-2 mx-auto">
							<label for="source" class="label">Domain name <span class="text-danger">*</span></label>
							<div>
									{{-- @dd($rows) --}}
								<select required="" class="form-control" name="domain_id" id="domain_name">
									<option value="" disabled >--Select Client--</option>
									@foreach($domains as $domain)
									<option value="{{ $domain->id }}" {{ ($domain->id == $row->domain_id)?'selected':'' }}>{{ $domain->domain_name }} - <span class="badge badge-secondary">{{ count($domain->db) }}</span></option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-6 mb-2 mx-auto">
							<label for="source" class="label">Database Name <span class="text-danger">*</span></label>
							<div>
								<input type="text" value="{{ $row->db_name }}" class="form-control" name="db_name" id="db_name" required="">
							</div>
						</div>
						<div class="col-md-6 mb-2 mx-auto">
							<label for="source" class="label">Username <span class="text-danger">*</span></label>
							<div>
								<input type="text" value="{{ $row->username }}" class="form-control" name="username" id="d_username" required="">
							</div>
						</div>
						<div class="col-md-6 mb-2 mx-auto">
							<label for="amount" class="label">Password <span class="text-danger">*</span></label>
							<div>
								<input type="text" value="{{ $row->password }}" class="form-control" name="password" id="d_password" required="">
							</div>
							<button type="submit" class="btn btn-primary float-right mt-3">{{ __('backend/default.submit') }}</button>
						</div>
					</div>


				</form>
			</div>
		</div>
	</div>
</div>
@endsection

<!-- Write Scripts <script fileType="text/javascript">In Here</script> -->
@section('scripts')
<script>
	$(document).ready(function(){
		$("#domain_name").select2();
	});
</script>
@endsection