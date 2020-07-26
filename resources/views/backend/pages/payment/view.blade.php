<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/payment.view_payment') )

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
		<li class="breadcrumb-item active">{{ __('backend/default.view') }}</li>
	</ul>
</div>

<!-- Table Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">

			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-eye' }}"></i> {{ __('backend/payment.view_payment') }}</h2></div>
					<div class="col-md-6">
						<h2>
							<a href="#" onclick="print_method()" class="ml-3 btn btn-primary text-center float-right">
								<i class="fa fa-print"></i>
							</a>
						</h2>
						<div class="btn-group float-right text-info">
							@if(request()->name)
								<h2><i class="fa fa-user"></i> {{ request()->name }}</h2>
							@endif
							{{-- <a href="{{ route('admin.payment.index') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a><a href="{{ route('admin.payment.edit',$row->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> {{ __('backend/default.edit') }}</a> --}}
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
					@if(request()->name)
					<h6 class="text-center">
						Client Name : {{ request()->name }}
					</h6>
					@endif
				</div>
				<div class="col-sm-12 px-0">
					<div class="table-responsive">
						<table class="table table-bordered display table-striped text-center">
							<thead>
								<tr>
									<th>
										<strong>SN</strong>
									</th>
									<th>
										<strong>Project Price</strong>
									</th>
									<th>
										<strong>Date</strong>
									</th>
									<th>
										<strong>Paid</strong>
									</th>
									<th>
										<strong>Due</strong>
									</th>
								</tr>
							</thead>
							<tbody>
								@foreach($rows as $row)
								<tr>
									<td>{{ $loop->index+1 }}</td>
									@if($loop->index == 0)
										<td rowspan="{{ count($rows) }}">{{ $row->client->project_price }}</td>
									@endif
									<td>
										{{ date('Y-m-d', time($row->created_at)) }}
										<br>
										<small>{{ $row->created_at->diffForHumans() }}</small>
									</td>
									<td>{{ $row->this_payment }}</td>
									<td>{{ $row->due }}</td>
								</tr>
								@endforeach
								<tr class="h6">
									<td colspan="4" class="text-right">Comment:</td>
									<td class="h4">
										@if(count($rows) > 0)
											@if($rows->toArray()[count($rows)-1]['due'] > 0)
												<i class="fa fa-warning text-warning" title="You have Due!"></i>
											@else
												<i class="fa fa-check text-success" title="You have Paid!"></i>
											@endif
										@endif
										{{-- @dd($rows->toArray()[count($rows)-1]['due']); --}}
									</td>
								</tr>
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