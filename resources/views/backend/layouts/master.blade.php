<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  @php
  $site_setting = \App\Models\Setting::first();
  @endphp

  <link rel="icon" href="{!!  asset($site_setting->favicon)  !!}" type="image/gif" sizes="16x16"> 

  <title>@yield('fav_title') - {{ Config::get('app.locale') == 'en' ? ucwords($site_setting->title_en) : $site_setting->title_bn }}</title>

  @include('backend.partials.styles')

  <style>
    .preloader {
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     z-index: 9999;
     background-image: "{{ asset('public/5.gif')  }}";
     background-repeat: no-repeat; 
     background-color: #FFF;
     background-position: center;
   }
   .toast-top-right {
     top: 50px !important;
     right: 31px !important;
   }
   [v-cloak] .v-cloak--block {
    display: block;
  }
  [v-cloak] .v-cloak--inline {
    display: inline;
  }
  [v-cloak] .v-cloak--inlineBlock {
    display: inline-block;
  }
  [v-cloak] .v-cloak--hidden {
    display: none;
  }
  [v-cloak] .v-cloak--invisible {
    visibility: hidden;
  }
  .v-cloak--block,
  .v-cloak--inline,
  .v-cloak--inlineBlock {
    display: none;
  }
  i.fa.fa-spinner.fa-pulse.fa-3x.fa-fw {
    margin-left: 46%;
    bottom: 50%;
    margin-top: 11%;
  }
  .loader{
    margin-left: 46%;
    bottom: 50%;
    margin-top: 11%;
  }
</style>

@section('styles')
@show

@include('backend.partials.permission')

</head>

<body class="app sidebar-mini rtl">

  <div class="preloader_ d-none">
    <img src="https://smallenvelop.com/wp-content/uploads/2014/08/Preloader_2.gif">
  </div>

  @include('backend.partials.nav')

  @include('backend.partials.sidebar')

  <div id="main-wrapper">

    @include('backend.partials.message')
    <main class="app-content" id="app">

      <div v-cloak>
        <div class="v-cloak--inline">
          {{-- <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i> --}}
          <img class="loader" src="https://smallenvelop.com/wp-content/uploads/2014/08/Preloader_2.gif" alt="">
        </div>

        <div class="v-cloak--hidden"> 
          <init 
          :auth_id="{{ Auth::guard('admin')->user()->id }}"
          domain="{{ url('/') }}"
          :default_lang="{{ json_encode(Lang::get('backend/default')) }}"
          :file_form_field="{{ json_encode(Lang::get('backend/form_field')) }}"
          :file_table="{{ json_encode(Lang::get('backend/table')) }}"
          ></init>

          @section('content')
          @show   
        </div>
      </div>
    </main>

  </div>

  @include('backend.partials.scripts')

  @section('scripts')
  @show

  
</body>
</html>