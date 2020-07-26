<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/client.add_client') )

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
		<li class="breadcrumb-item"><a href="{{ route('admin.client.index') }}">{{ __('backend/client.client') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/default.add_new') }}</li>
	</ul>
</div>

<!-- Add Form Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-md-6 mb-2"><h2><i class="{{ 'fa fa-plus-square' }}"></i> {{ __('backend/client.add_client') }}</h2></div>
					<div class="col-md-6 mb-2"><a href="{{ route('admin.client.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a></div>
					<div class="clearfix"></div>

				</div>
			</div>
			<div class="card-body">
				@include('backend.partials.error_message')
				<form class="form-horizontal" action="{{ route('admin.client.store') }}" method="post" enctype="multipart/form-data">
					@csrf

					<div class="form-row">
						<div class="col-md-6 mb-2">
							<label for="name" class="label">Name <span class="text-danger">*</span></label>
							<div>
								<input type="text" class="form-control" name="name" id="name" required="">
							</div>
						</div>
						<div class="col-md-6 mb-2">
							<label for="contact_person" class="label">Contact Person <span class="text-danger">*</span></label>
							<div>
								<input type="text" class="form-control" name="contact_person" id="contact_person" required="">
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-2">
							<label for="mobile" class="label">Mobile <span class="text-danger">*</span></label>
							<div>
								<input type="text" class="form-control" name="mobile" id="mobile" required="">
							</div>
						</div>
						<div class="col-md-6 mb-2">
							<label for="email" class="label">Email <span class="text-danger">*</span></label>
							<div>
								<input type="email" class="form-control" name="email" id="email" required="">
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-2">
							<label for="address" class="label">Address <span class="text-danger">*</span></label>
							<div>
								<textarea style="height: 112px;" type="text" class="form-control" name="address" id="address" required=""></textarea>
							</div>
						</div>
						<div class="col-md-6">
							<label for="district" class="label">District <span class="text-danger">*</span></label>
							<div class="mb-2">
								<select class="form-control" name="district_id" id="district" required="">
									<option value="" disabled selected>--Select District--</option>
									@foreach($districts as $key => $district)
										<option value="{{ $district[0]->id }}">{{ $district[0]->name }}</option>
									@endforeach
								</select>
							</div>
							<label for="upazila" class="label">Upazila <span class="text-danger">*</span></label>
							<div class="mb-2">
								<select class="form-control" name="upazila_id" id="upazila" required="">
									<option value="" disabled selected>--Select Upazila--</option>
								</select>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-2">
							<label for="domain" class="label">Domain <span class="text-danger">*</span></label>
							<div>
								<input type="text" class="form-control" name="domain" id="domain" required="">
							</div>
						</div>
						<div class="col-md-6 mb-2">
							<label for="hosting" class="label">Hosting <span class="text-danger">*</span></label>
							<div>
								<input type="text" class="form-control" name="hosting" id="hosting" required="">
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-2">
							<label for="project_price" class="label">Project Price <span class="text-danger">*</span> <code class="badge badge-danger"><i>Note:</i> You Can't Change/Update Ever</code></label>
							<div>
								<input type="number" class="form-control" name="project_price" id="project_price" required="">
								<span class="position-absolute b-2 r-2"><strong>TK</strong></span>
							</div>
						</div>
						<div class="col-md-6 mb-2">
							<label for="renewal_price" class="label">Renewal Price <span class="text-danger">*</span> <code class="badge badge-danger"><i>Note:</i> You Can't Change/Update Ever</code></label>
							<div>
								<input type="number" class="form-control" name="renewal_price" id="renewal_price" required="">
								<span class="position-absolute b-2 r-2"><strong>TK</strong></span>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-2">
							<label for="service_charge" class="label">Service Charge <span class="text-danger">*</span> <code class="badge badge-danger"><i>Note:</i> You Can't Change/Update Ever</code></label>
							<div>
								<input type="number" class="form-control" name="service_charge" id="service_charge" required="">
								<span class="position-absolute b-2 r-2"><strong>TK</strong></span>
							</div>
						</div>
						<div class="col-md-6 mb-2">
	                        <label for="expiration_date" class="label">Expairation Date <span class="text-danger">*</span> <code class="badge badge-danger"><i>Note:</i> You Can't Change/Update Ever</code></label>
                            <div class="input-group date" id="expiration_date" data-provide="datepicker">
                                <input type="text" class="form-control" name="expiration_date" autocomplete="off" data-date-format="yyyy-mm-dd" required="">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
	                    </div>
						<div class="col-md-12 mt-2">
							<button type="submit" class="btn btn-primary float-right">{{ __('backend/default.submit') }}</button>
						</div>
					</div>

				</form>
				<div class="d-none">
					@foreach($districts as $key => $district)
						<select id="_{{ $district[0]->id }}">
							<option value="" disabled selected>--Select Upazila--</option>
							@foreach($district as $k => $upazila)
								<option value="{{ $upazila->upazila_id }}">{{ $upazila->upazila_name }}</option>
							@endforeach
						</select>
					@endforeach
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
		$("#district").on('change', function(event) {
			var district_id = $(this).val();
			$("#upazila").html($("#_"+district_id).html())
		});

		$.fn.datepicker.defaults.format = "yyyy-mm-dd";
		$('input').focus(function() {
			$(this).siblings('.input-group-addon').find('i').css({
				'background' : '#009688',
				'color' : '#fff'
			});
		});

		$('input').blur(function() {
			$(this).siblings('.input-group-addon').find('i').css({
				'background' : '#ddd',
				'color' : '#000'
			});
		});
		
		$('#expiration_date').datepicker({
			format: 'yyyy-mm-dd',
			autoclose: true,
			endDate: "today",
			maxDate: today
		});
	});
</script>
@endsection