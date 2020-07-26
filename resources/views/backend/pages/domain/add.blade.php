<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/domain.add_domain') )

<!-- Write Styles <style>In Here</style> -->
@section('styles')
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
		<li class="breadcrumb-item"><a href="{{ route('admin.domain.index') }}">{{ __('backend/domain.domain') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/default.add_new') }}</li>
	</ul>
</div>

<!-- Add Form Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-plus-square' }}"></i> {{ __('backend/domain.add_domain') }}</h2></div>
					{{-- <div class="col-md-6"><a href="{{ route('admin.domain.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a></div> --}}
					<div class="clearfix"></div>

				</div>
			</div>
			<div class="card-body">
				@include('backend.partials.error_message') 
				<form class="form-horizontal" action="{{ route('admin.domain.store') }}" method="post" enctype="multipart/form-data">
					@csrf
					
					<div class="form-group">
						<div class="col-md-6 mb-2 mx-auto">
							<label for="source" class="label">Domain name <span class="text-danger">*</span></label>
							<div>
								<input type="text" class="form-control" name="domain_name" id="domain_name" required="">
							</div>
						</div>
						<div class="col-md-6 mb-2 mx-auto">
							<label for="source" class="label">Username <span class="text-danger">*</span></label>
							<div>
								<input type="text" class="form-control" name="d_username" id="d_username" required="">
							</div>
						</div>
						<div class="col-md-6 mb-2 mx-auto">
							<label for="amount" class="label">Password <span class="text-danger">*</span></label>
							<div>
								<input type="text" class="form-control" name="d_password" id="d_password" required="">
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
@endsection