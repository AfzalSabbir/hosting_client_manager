<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/payment.add_payment') )

<!-- Write Styles <style>In Here</style> -->
@section('styles')
@endsection

<!-- This Section Will Shown <body>In Here</body> -->
@section('content')
<!-- Top Management Part -->
<div class="app-title">
	<div>
		<h1><i class="{{ 'fa fa-money' }}"></i> {{ __('backend/payment.payment_management') }}</h1>
	</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('backend/default.dashboard') }}</a></li>
		<li class="breadcrumb-item"><a href="{{ route('admin.payment.index') }}">{{ __('backend/payment.payment') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/default.add_new') }}</li>
	</ul>
</div>

<!-- Add Form Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-plus-square' }}"></i> {{ __('backend/payment.add_payment') }}</h2></div>
					{{-- <div class="col-md-6"><a href="{{ route('admin.payment.index') }}" class="float-right btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a></div> --}}
					<div class="clearfix"></div>

				</div>
			</div>
			<div class="card-body">
				@include('backend.partials.error_message')
				<!-- <form class="form-horizontal" action="{{-- route('admin.payment.store') --}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-row">
						<div class="col-md-1">
							<label for="from_date" class="label d-block text-right">From</label>
						</div>
						<div class="col-md-3">
							<input type="date" class="form-control" name="from_date" id="from_date">
						</div>
						<div class="col-md-1">
							<label for="to_date" class="label d-block text-right">To</label>
						</div>
						<div class="col-md-3">
							<input type="date" class="form-control" name="to_date" id="to_date">
						</div>
						<div class="col-md-1">
							<input type="submit" name="find" id="" class="btn btn-primary" value="Search">
						</div>
					</div>
				</form> -->
                @php
                	$paid = 0;
                	if(isset($client_)) {
                		$paid = $client_->advance;
                		if(isset($payment)) {
                			$paid = $paid + $payment->payment;
                		}
					}
                @endphp

				<form class="form-horizontal" action="{{ route('admin.payment.store') }}" method="post" enctype="multipart/form-data">
					@csrf
	                <input value="{{ isset($client_) ? $client_->id : '' }}" type="hidden" class="form-control" name="client_id" id="client_id" readonly>
	                <div class="form-row">
	                    <div class="col-md-6 mb-2">
	                        <label for="client" class="label">Client</label>
	                        <div>
	                            <select required="" class="form-control" name="client" id="client" onchange="location=this.value">
	                                <option value="" disabled selected>--Select Client--</option>
	                                @foreach($clients as $client)
	                                <option value="{{ asset('/admin/payment/add/'.$client->id) }}?name={{ urlencode($client->name) }}" {{ isset($id) ? ($client->id == $id ? "selected" : '') : '' }}>{{ $client->name }}</option>
	                                @php
	                                	if(isset($id)) {
	                                		if($client->id == $id) {
	                                			$client_input = '<input name="client_name" type="hidden" hidden="" value="'.$client->name.'">';
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
	                        <label for="payment_at" class="label">Payment Date</label>
	                        {{-- <div>
	                            <input value="{{ isset($client_) ? $client_->payment_at : '' }}" type="text" class="form-control" name="payment_at" id="payment_at">
	                        </div> --}}
                            <div class="input-group date" id="payment_at" data-provide="datepicker">
                            	{{-- @dd($app->request->input()) --}}
                                <input type="text" class="form-control" name="payment_at" value="{{ isset($payment) ? date('Y-m-d', strtotime($payment->payment_at)) : '' }}" autocomplete="off" {{ isset($client_) ? ($paid == $client_->project_price ? 'readonly disabled' : '') : '' }}>
                                <div class="input-group-addon">
                                    <span><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
	                    </div>
	                </div>
	                <div class="form-row">
	                    <div class="col-md-6">
	                        <label for="contact_person" class="label">Contact Person</label>
	                        <div>
	                            <input value="{{ isset($client_) ? $client_->contact_person : '' }}" type="text" class="form-control mb-2" name="contact_person" id="contact_person" readonly>
	                        </div>
	                        <label for="mobile" class="label">Mobile</label>
	                        <div>
	                            <input value="{{ isset($client_) ? $client_->mobile : '' }}" type="text" class="form-control mb-2" name="mobile" id="mobile" readonly>
	                        </div>
	                    </div>
	                    <div class="col-md-6 mb-2">
	                        <label for="address" class="label">Address</label>
	                        <div>
	                            <textarea style="height: 111px;" class="form-control" name="address" id="address" readonly>{!! isset($client_) ? $client_->district->name.', '.$client_->upazila->name.', '.$client_->address : '' !!}</textarea>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-row">
	                    <div class="col-md-6 mb-2">
	                        <label for="amount" class="label">Amount</label>
	                        <div>
	                            <input value="{{ isset($client_) ? $client_->project_price : '' }}" type="number" class="form-control" name="amount" id="amount" readonly>
	                        </div>
	                    </div>
	                    <div class="col-md-6 mb-2">
	                        <label for="paid" class="label">Paid</label>
	                        <div>
	                            <input value="{{ $paid }}" type="text" class="form-control" name="paid" id="paid" readonly>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-row">
	                    <div class="col-md-6 mb-2">
	                        <label for="payment" class="label">Payment</label>
	                        <div>
	                            <input required="" type="number" class="form-control" name="payment" id="payment" {{ isset($client_) ? ($paid == $client_->project_price ? 'readonly  value=0' : '') : '' }}>
	                        </div>
	                    </div>
	                    <div class="col-md-6 mb-2">
	                        <label for="due" class="label">Due</label>
	                        <div>
	                            <input value="" type="text" class="form-control text-danger" name="due" id="due" readonly>
	                        </div>
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
	@if(isset($client_))
		var $due = $("#amount").val()-$("#paid").val()-$("#payment").val();
		$("#due").val($due);
	@endif

	$(document).ready(function() {
		$("#client").select2();
		$("#payment_at").datepicker({
			format: 'yyyy-mm-dd',
			autoclose: true,
		});
		$("#payment").keyup(function(event) {
			if ($("#amount").val()-$("#paid").val()-$("#payment").val() < 0) {
				$(this).val($("#amount").val()-$("#paid").val());
				$("#due").val(0);
			} else {
				$due = $("#amount").val()-$("#paid").val()-$("#payment").val();
				$("#due").val($due);
			}
		});
	});
</script>
@endsection