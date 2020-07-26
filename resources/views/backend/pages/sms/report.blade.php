<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', "SMS - Report" )

<!-- Write Styles <style>In Here</style> -->
@section('styles')
@endsection

<!-- This Section Will Shown <body>In Here</body> -->
@section('content')
<!-- Top Management Part -->
<div class="app-title">
	<div>
		<h1><i class="{{ 'fa fa-dashboard' }}"></i> {{ __('backend/journal.journal_management') }}</h1>
	</div>
	<ul class="app-breadcrumb breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('admin.home') }}">{{ __('backend/default.dashboard') }}</a></li>
		<li class="breadcrumb-item active">{{ __('backend/journal.journal') }}</li>
	</ul>
</div>

<!-- Table Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">

			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-table' }}"></i> Report</h2></div>
					<div class="col-md-6">
						<h2>
							<a href="#" onclick="print_method()" class="ml-3 btn btn-primary text-center float-right">
								<i class="fa fa-print"></i>
							</a>
						</h2>
						<div class="float-right">
							<strong class="text-success">Total Sent: {{ $totalSms }}</strong>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

			<div class="card-body">
			<div class="hide w-100">
				<h3 class="text-center">
					F iT Lab Client Manager
				</h3>
				<h6 class="text-center">
					SMS Report
				</h6>
			</div>

				<div class="table-responsive pt-1">
					<table id="datatable" class="table table-bordered table-hover display">

						<thead>
							<th>SL</th>
							<th width="10%">Mobile</th>
							<th width="10%">Send At</th>
							<th width="15%">Send By</th>
							<th>Size</th>
							<th>Status</th>
							<th>Message</th>
						</thead>
						<tbody>
							@foreach($allSms as $key => $value)
								<tr>
									<td>{{ $loop->index + 1 }}</td>
									<td>{{ $value->mobile }}</td>
									<td>{{ $value->sending_date }}</td>
									<td>{{ $value->send_by_user }}</td>
									<td>{{ $value->sms_count }}</td>
									<td>{{ $value->is_send == 1 ? 'Delivered' : 'Not Sent' }}</td>
									<td>{{ $value->sms }}</td>
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
@endsection