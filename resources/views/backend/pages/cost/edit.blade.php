<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/cost.edit_cost') )

<!-- Write Styles <style>In Here</style> -->
@section('styles')
@endsection

<!-- This Section Will Shown <body>In Here</body> -->
@section('content')
<!-- Top Management Part -->
<div class="app-title">
	<div>
		<h1><i class="{{ 'fa fa-credit-card-alt' }}"></i> {{ __('backend/cost.cost_management') }}</h1>
	</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('backend/default.dashboard') }}</a></li>
		<li class="breadcrumb-item"><a href="{{ route('admin.cost.index') }}">{{ __('backend/cost.cost') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/default.edit') }}</li>
	</ul>
</div>

<!-- Edit Form Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-pencil-square' }}"></i> {{ __('backend/cost.edit_cost') }}</h2></div>
					{{-- <div class="col-md-6"><a href="{{ route('admin.cost.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a></div> --}}
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="card-body">
				@include('backend.partials.error_message')
				<form class="form-horizontal" action="{{-- route('admin.cost.update',$row->id) --}}" method="post" enctype="multipart/form-data">
					@csrf

					<div class="form-group">
						<div class="col-md-6 mb-2 mx-auto">
							<label for="source" class="label">Source <span class="text-danger">*</span></label>
							<div>
								<input value="{{ $row->source }}" type="text" class="form-control" name="source" id="source" required="">
							</div>
						</div>
						<div class="col-md-6 mb-2 mx-auto">
							<label for="date" class="label">Date <span class="text-danger">*</span></label>
                            <div class="input-group date" id="date" data-provide="datepicker">
                                <input value="{{ $row->date }}" type="text" class="form-control" name="date" autocomplete="off" data-date-format="yyyy-mm-dd" required="">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
						</div>
						<div class="col-md-6 mb-2 mx-auto">
							<label for="amount" class="label">Amount <span class="text-danger">*</span></label>
							<div>
								<input value="{{ $row->amount }}" type="text" class="form-control" name="amount" id="amount" required="">
							</div>
							<button type="submit" class="btn btn-primary float-right mt-3">{{ __('backend/default.update') }}</button>
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
<script type="text/javascript">
	$(document).ready(function() {
		$.fn.datepicker.defaults.format = "yyyy-mm-dd";
		$('#date').datepicker();
	});
</script>
@endsection