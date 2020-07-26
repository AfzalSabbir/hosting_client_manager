@extends('backend.layouts.master')

@section('fav_title', __('backend/default.dashboard') )

@section('content')

<div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i> {{ __('backend/default.dashboard') }}</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i> {{ __('backend/default.dashboard') }}</li>
  </ul>
</div>


<div class="form-row position-relative">
  <hr class="border-info w-100 mx-1 mb-5">
  <span class="position-absolute d-block h3 br-4 bg-info px-2 py-1 text-white" style="left: 4px;">Today</span>
  <div class="col-md-6 col-lg-3">
    <div class="widget-small primary coloured-icon"><i class="icon fa fa-id-card fa-3x"></i>
      <div class="info">
        <h4>Clients</h4>
        <p><b>{{ count($clients_today) }}</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3">
    <div class="widget-small info coloured-icon"><i class="icon fa fa-money fa-3x"></i>
      <div class="info">
        <h4>Payments</h4>
        <p><b>{{ $payments_today->sum('this_payment') }}&nbsp;TK</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3">
    <div class="widget-small warning coloured-icon"><i class="icon fa fa-money fa-3x"></i>
      <div class="info">
        <h4>Due</h4>
        <p><b>{{ $dues_today->sum('due') }}&nbsp;TK</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3">
    <div class="widget-small primary coloured-icon"><i class="icon  fa fa-credit-card fa-3x"></i>
      <div class="info">
        <h4>General Incomes</h4>
        <p><b>{{ $general_incomes_today->sum('amount') }}&nbsp;TK</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3">
    <div class="widget-small danger coloured-icon"><i class="icon fa fa-credit-card-alt fa-3x"></i>
      <div class="info">
        <h4>Costs</h4>
        <p><b>{{ $costs_today->sum('amount') }}&nbsp;TK</b></p>
      </div>
    </div>
  </div>
</div>

<div class="form-row position-relative">
  <hr class="border-success w-100 mx-1 mb-5">
  <span class="position-absolute d-block h3 br-4 bg-success px-2 py-1 text-white" style="left: 4px;">Overall</span>
  <div class="col-md-6 col-lg-3">
    <div class="widget-small primary coloured-icon"><i class="icon fa fa-id-card fa-3x"></i>
      <div class="info">
        <h4>Clients</h4>
        <p><b>{{ count($clients) }}</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3">
    <div class="widget-small info coloured-icon"><i class="icon fa fa-money fa-3x"></i>
      <div class="info">
        <h4>Payments</h4>
        <p><b>{{ $payments->sum('payment') }}&nbsp;TK</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3">
    <div class="widget-small warning coloured-icon"><i class="icon fa fa-money fa-3x"></i>
      <div class="info">
        <h4>Due</h4>
        <p><b>{{ $payments->sum('due') }}&nbsp;TK</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3">
    <div class="widget-small primary coloured-icon"><i class="icon  fa fa-credit-card fa-3x"></i>
      <div class="info">
        <h4>General Incomes</h4>
        <p><b>{{ $general_incomes->sum('amount') }}&nbsp;TK</b></p>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-lg-3">
    <div class="widget-small danger coloured-icon"><i class="icon fa fa-credit-card-alt fa-3x"></i>
      <div class="info">
        <h4>Costs</h4>
        <p><b>{{ $costs->sum('amount') }}&nbsp;TK</b></p>
      </div>
    </div>
  </div>
</div>

@endsection