@if (Session::has('add_message'))
  <script>
    toastr.success("{{ __('backend/flash.add_message') }}");
  </script>
@endif

@if (Session::has('update_message'))
  <script>
    toastr.success("{{ __('backend/flash.update_message') }}");
  </script>
@endif

@if (Session::has('warning'))
  <script>
    toastr.warning("{{ Session::get('warning') }}");
  </script>
@endif

@if (Session::has('delete_message'))
  <script>
    toastr.warning("{{ __('backend/flash.delete_message') }}");
  </script>
@endif

@if (Session::has('exist_message'))
  <script>
    toastr.error("{{ __('backend/flash.exist_message') }}");
  </script>
@endif

@if (Session::has('deactive_message'))
  <script>
    toastr.error("{{ __('backend/flash.deactive_message') }}");
  </script>
@endif

@if (Session::has('sending_success'))
  <script>
    toastr.success("Successfully Send!");
  </script>
@endif

@if (Session::has('sending_failed'))
  <script>
    toastr.error("SMS Send Error!");
  </script>
@endif