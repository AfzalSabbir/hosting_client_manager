<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/general_income.add_general_income') )

<!-- Write Styles <style>In Here</style> -->
@section('styles')
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
		<li class="breadcrumb-item"><a href="{{ route('admin.general_income.index') }}">{{ __('backend/general_income.general_income') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/default.add_new') }}</li>
	</ul>
</div>

<!-- Add Form Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-plus-square' }}"></i> {{ __('backend/general_income.add_general_income') }}</h2></div>
					<div class="col-md-6">
						<button id="add_source" class="float-right btn btn-primary ml-2"><i class="fa fa-plus"></i> {{ __('backend/default.add_source') }}</button>
						<a href="{{ route('admin.general_income.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a></div>
					<div class="clearfix">
						
					</div>

				</div>
			</div>
			<div class="card-body">
				@include('backend.partials.error_message')
				<form class="form-horizontal" action="{{ route('admin.general_income.store') }}" method="post" enctype="multipart/form-data">
					@csrf
					
					<div class="form-group">
						{{-- <div class="col-md-6 mb-2 mx-auto">
							<label for="source" class="label">Source <span class="text-danger">*</span></label>
							<div>
								<input type="text" class="form-control" name="source" id="source" required="">
							</div>
						</div> --}}
						<div class="col-md-6 mb-2 mx-auto">
							<label for="source_id" class="label">Source <span class="text-danger">*</span></label>
							<select class="form-control" name="source_id" id="source_id" required="">
								<option disabled="" selected="">-- Select Source --</option>
								@foreach($sources as $source)
									<option value="{{ $source->id }}">{{ $source->source }}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-6 mb-2 mx-auto">
							<label for="date" class="label">Date <span class="text-danger">*</span></label>
                            <div class="input-group date" id="date" data-provide="datepicker">
                                <input type="text" class="form-control" name="date" autocomplete="off" data-date-format="yyyy-mm-dd" required="">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
						</div>
						<div class="col-md-6 mb-2 mx-auto">
							<label for="amount" class="label">Amount <span class="text-danger">*</span></label>
							<div>
								<input type="text" class="form-control" name="amount" id="amount" required="">
							</div>
							<button type="submit" class="btn btn-primary float-right mt-2">{{ __('backend/default.submit') }}</button>
						</div>
					</div>


				</form>
			</div>
			<div class="card-body">
				<form class="form-horizontal mt-4 alert-info pt-3 pb-5 br-4 border-info" id="add_source_container" action="{{ route('admin.general_income.add_source') }}" method="post" enctype="multipart/form-data" style="display: none;">
					@csrf
					
					<div class="form-group">
						<div class="col-md-6 mb-2 mx-auto">
							<label for="source" class="label">Source <span class="text-danger">*</span></label>
							<div>
								<input type="text" class="form-control" name="source" id="source" required="">
								<input type="hidden" class="form-control" name="source_type" value="1" id="source_type" required="">
							</div>
							<button type="submit" class="btn btn-primary float-right mt-2">{{ __('backend/default.submit') }}</button>
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

		$('#add_source').on('click', function(event) {
			$('#add_source_container').show();
			event.preventDefault();
		});
	});
</script>
@endsection