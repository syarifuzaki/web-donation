<!DOCTYPE html>
<html lang="en" dir="ltr" data-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
  <link href="{{ url('assets/build/styles/ltr-core.css') }}" rel="stylesheet">
  <link href="{{ url('assets/build/styles/ltr-vendor.css') }}" rel="stylesheet">

  @stack('metas')
  @stack('style')
  @livewireStyles
</head>

<body class="preload-active aside-active aside-mobile-minimized aside-desktop-maximized">

  @include('layouts.admin.preload')

  <!-- BEGIN Page Holder -->
  <div class="holder">

    @include('layouts.admin.aside')

    <!-- BEGIN Page Wrapper -->
    <div class="wrapper">

      @include('layouts.admin.header')

      <!-- BEGIN Page Content -->
      @yield('content', '')
      <!-- END Page Content -->

      @include('layouts.admin.footer')

    </div>
    <!-- END Page Wrapper -->

  </div>
  <!-- END Page Holder -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script type="text/javascript" src="{{ url('assets/build/scripts/mandatory.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/build/scripts/core.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/build/scripts/vendor.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/app/utilities/sticky-header.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/app/utilities/copyright-year.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/app/utilities/theme-switcher.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/app/utilities/tooltip-popover.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/app/utilities/dropdown-scrollbar.js') }}"></script>
  <script type="text/javascript" src="{{ url('assets/app/utilities/fullscreen-trigger.js') }}"></script>


  <script>
    "use strict";
    $(function() {
      var swal = Swal.mixin({
        customClass: {
          confirmButton: "btn btn-label-success btn-wide mx-1",
          denyButton: "btn btn-label-secondary btn-wide mx-1",
          cancelButton: "btn btn-label-danger btn-wide mx-1"
        },
        buttonsStyling: false
      });


      window.addEventListener('swal:error', event => {
        swal.fire({
          title: event.detail.title,
          text: event.detail.text,
          icon: 'error',
          buttons: true,
        });
      });

      window.addEventListener('swal:success', event => {
        swal.fire({
          title: event.detail.title,
          text: event.detail.text,
          icon: 'success',
        });
      });

      // swal.fire({
      //   icon: "warning",
      //   title: "Gagal",
      //   text: "Something went wrong!",
      // })

      // $("#swal-confirm").on("click", function() {
      //   swal.fire({
      //     title: "Are you sure?",
      //     text: "You won't be able to revert this!",
      //     icon: "warning",
      //     showCancelButton: true,
      //     confirmButtonColor: "#3085d6",
      //     cancelButtonColor: "#d33",
      //     confirmButtonText: "Yes, delete it!"
      //   }).then(function(result) {
      //     if (result.isConfirmed) {
      //       swal.fire("Deleted!", "Your file has been deleted.", "success")
      //     }
      //   })
      // });

    });
  </script>

  @if (session('success'))
  <script>
    swal.fire({
      title: 'Berhasil',
      text: '{{ session("success") }}',
      icon: 'success',
    });
  </script>
  @elseif (session('error'))
  <script>
    swal.fire({
      title: 'Gagal',
      text: '{{ session("error") }}',
      icon: 'error',
    });
  </script>
  @endif

  @stack('script')
  @livewireScripts
</body>
</html>
