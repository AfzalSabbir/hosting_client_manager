<!-- Full Structure -->
@extends('backend.layouts.master')

@section('fav_title', __('backend/renewal_domain.view_renewal_domain') )

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
		<li class="breadcrumb-item active">{{ __('backend/default.view') }}</li>
	</ul>
</div>

<!-- Table Part -->
<div class="row">
	<div class="col-md-12">
		<div class="card">

			<div class="card-header">
				<div class="row">
					<div class="col-md-6"><h2><i class="{{ 'fa fa-eye' }}"></i> {{ __('backend/renewal_domain.view_renewal_domain') }}</h2></div>

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
							{{-- <a href="{{ route('admin.renewal_domain.index') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> {{ __('backend/default.list') }}</a><a href="{{ route('admin.renewal_domain.edit',$row->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> {{ __('backend/default.edit') }}</a> --}}
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

				<div class="col-sm-12">
					<div class="table-responsive">
						<table class="table table-bordered display table-striped text-center">
							<thead>
								<tr>
									<th>
										<strong>SN</strong>
									</th>
									<th>
										<strong>Renewal Date</strong>
									</th>
									<th>
										<strong>Expire</strong>
									</th>
									<th>
										<strong>Renewal For</strong>
									</th>
									<th>
										<strong>Renewal Amount</strong>
									</th>
								</tr>
							</thead>
							<thead>
								@foreach($rows as $row)
								<tr class="{{ strpos($row->expiration_at->diffForHumans(), 'ago') !== false ? 'deactive_':'' }}">
									<td>{{ $loop->index+1 }}</td>
									<td>
										{{ date('Y-m-d', strtotime($row->created_at)) }}
										<br>
										<small>{{ $row->created_at->diffForHumans() }}</small>
									</td>
									<td>
										{{ date('Y-m-d', strtotime($row->expiration_at)) }}
										<br>
										<small>{{ $row->expiration_at->diffForHumans() }}</small>
									</td>
									<td>{{ $row->renewal }} Months</td>
									<td>{{ $row->renewal_amount }}</td>
								</tr>
								@endforeach
								@if(count($rows) <= 0)
								<tr class="text-danger">
									<td colspan="4" class="text-center">No History Availabe</td>
								</tr>
								@endif
							</thead>
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