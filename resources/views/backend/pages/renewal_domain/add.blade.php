<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/renewal_domain.add_renewal_domain') )

<!-- Write Styles <style>In Here</style> -->
@section('styles')
@endsection

<!-- This Section Will Shown <body>In Here</body> -->
@section('content')
<!-- Top Management Part -->
<div class="app-title">
	<div>
		<h1><i class="{{ 'fa fa-retweet' }}"></i> {{ __('backend/renewal_domain.renewal_domain_management') }}</h1>
	</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('backend/default.dashboard') }}</a></li>
		<li class="breadcrumb-item"><a href="{{ route('admin.renewal_domain.index') }}">{{ __('backend/renewal_domain.renewal_domain') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/default.add_new') }}</li>
	</ul>
</div>

<!-- Add Form Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-plus-square' }}"></i> {{ __('backend/renewal_domain.add_renewal_domain') }}</h2></div>
					{{-- <div class="col-md-6"><a href="{{ route('admin.renewal_domain.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a></div> --}}
					<div class="clearfix"></div>

				</div>
			</div>
			<div class="card-body">
				@include('backend.partials.error_message')
				<form class="form-horizontal" action="{{ route('admin.renewal_domain.store') }}" method="post" enctype="multipart/form-data">
					@csrf

	                <div class="form-row">
	                    <div class="col-md-6 mb-2">
	                        <label for="client" class="label">Client</label>
	                        <div>
	                            <select required="" class="form-control" name="client" id="client" onchange="location=this.value">
	                                <option value="" disabled selected>--Select Client--</option>
	                                @foreach($clients as $client)
	                                <option value="{{ asset('/admin/renewal_domain/add/'.$client->id) }}?name={{ urlencode($client->name) }}" {{ isset($id) ? ($client->id == $id ? "selected" : '') : '' }}>{{ $client->name }}</option>
	                                @php
	                                	if(isset($id)) {
	                                		if($client->id == $id) {
	                                			$client_input = '
	                                				<input name="client_name" type="hidden" hidden="" value="'.$client->name.'">
	                                				<input name="client_id" type="hidden" hidden="" value="'.$client->id.'">
	                                				';
	                                		}
	                                	}
	                                @endphp
	                                @endforeach
	                            </select>
	                        </div>
	                    </div>
                        @php
                        	if(isset($id)) {
                        		echo $client_input;
                        	}
                        @endphp
	                    <div class="col-md-6 mb-2">
	                        <label for="contact_person" class="label">Contact Person</label>
	                        <div>
	                            <input value="{{ isset($client_) ? $client_->contact_person : '' }}" type="text" class="form-control" name="contact_person" id="contact_person" readonly>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-row">
	                    <div class="col-md-6 mb-2">
	                        <label for="mobile" class="label">Mobile</label>
	                        <div>
	                            <input value="{{ isset($client_) ? $client_->mobile : '' }}" type="text" class="form-control" name="mobile" id="mobile" readonly>
	                        </div>
	                    </div>
	                    <div class="col-md-6 mb-2">
	                        <label for="email" class="label">Email</label>
	                        <div>
	                            <input value="{{ isset($client_) ? $client_->email : '' }}" type="text" class="form-control" name="email" id="email" readonly>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-row">
	                    <div class="col-md-6 mb-2">
	                        <label for="domain" class="label">Domain</label>
	                        <div>
	                            <input value="{{ isset($client_) ? $client_->domain : '' }}" type="text" class="form-control" name="domain" id="domain" readonly>
	                        </div>
	                    </div>
	                    <div class="col-md-6 mb-2">
	                        <label for="hostion" class="label">Hosting</label>
	                        <div>
	                            <input value="{{ isset($client_) ? $client_->hosting : '' }}" type="text" class="form-control" name="hostion" id="hostion" readonly>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-row">
	                    <div class="col-md-6 mb-2">
	                        <label for="project_price" class="label">Project Price</label>
	                        <div>
	                            <input value="{{ isset($client_) ? $client_->project_price : '' }}" type="text" class="form-control" name="project_price" id="project_price" readonly>
	                        </div>
	                    </div>
	                    <div class="col-md-6 mb-2">
	                        <label for="renewal_amount" class="label">Renewal Price</label>
                            <div>
                                <input value="{{ isset($client_) ? $client_->renewal_price : '' }}" id="renewal_amount" type="number" class="form-control" name="renewal_amount" required="">
                            </div>
	                    </div>
	                </div>
	                <div class="form-row">
	                    <div class="col-md-6 mb-2">
	                        <label for="expiration_at" class="label">Expiration Date</label>
	                        <div>
	                            <input value="{{ isset($client_) ? date('Y-m-d', strtotime($renewal_domain->expiration_at)) : '' }}" type="text" class="form-control {{ isset($client_) ? (strpos($renewal_domain->expiration_at->diffForHumans(), 'ago') !== false ? 'alert-danger':'alert-success') : '' }}" name="expiration_at" id="expiration_at" readonly>
	                        </div>
	                    </div>
	                    {{-- <div class="col-md-6 mb-2">
	                        <label for="renewal_at" class="label">Renewal To Date</label>
                            <div class="input-group date" id="renewalToDate" data-provide="datepicker">
                                <input type="text" class="form-control" name="renewal_at" autocomplete="off" data-date-format="yyyy-mm-dd">
                                <div class="input-group-addon">
                                    <span><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
	                    </div> --}}
	                    {{-- \unset($array[7]); --}}
	                    {{-- @dd(explode('/',Request::fullUrl()), explode('/',Request::fullUrl())[5], explode('/',Request::fullUrl())[6]) --}}
	                    <div class="col-md-6 mb-2">
	                        <label for="renewal_at" class="label">Renewal For</label>
		                    <select name="renewal_duration" id="renewal_duration" class="form-control" required="">
		                    	<option disabled="">-- Select Duration --</option>
		                    	<option value="0">6 Months</option>
		                    	@for($i=1; $i<=5; $i++)
		                    	<option {{ $i == 1 ? 'selected=""':'' }} value="{{ $i }}">{{ $i }} Year{{ $i > 1 ? 's':'' }}</option>
		                    	@endfor
		                    </select>
		                </div>
	                </div>

					<button type="submit" class="btn btn-primary float-right">{{ __('backend/default.submit') }}</button>
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

		$('#renewalToDate').datepicker({
			format: 'yyyy-mm-dd',
			autoclose: true,
		});

		var $renewal_amount = $('#renewal_amount').val();
		$('#renewal_amount').blur(function(event) {
			if ($('#renewal_duration').val() > 0) {
				$renewal_amount = $('#renewal_amount').val()/$('#renewal_duration').val();
			} else {
				$renewal_amount = $('#renewal_amount').val()*2;
			}
		});

		$('#renewal_duration').on('change', function(event) {
			if ($(this).val() > 0) {
				$('#renewal_amount').val($renewal_amount*$(this).val());
			} else {
				$('#renewal_amount').val($renewal_amount*(1/2));
			}
			event.preventDefault();
		});

		$('#client').select2();
	});
</script>
@endsection