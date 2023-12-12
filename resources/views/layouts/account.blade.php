
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">

 
    <link rel="stylesheet" href="{{ asset('costome/assets/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('costome/assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}" />
    <!-- Tambahkan di bagian bawah </body> -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="{{ asset('costome/assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('costome/assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('costome/assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('costome/assets/modules/cleave-js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('costome/assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('costome/assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('costome/assets/js/highcharts.js') }}"></script>
    <style>
        .fas, .far, .fab, .fal {
            font-size: 20px;
        }

        .form-group label {
            font-weight: bold;
        }
    </style>
    </head>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      @include('layouts\navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('layouts\sidebar')
        <!-- partial -->
        <div class="main-panel">

          @yield('content')

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            {{-- <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div> --}}
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js')}}"></script>


    {{-- <script src="{{ asset('costome/assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('costome/assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script> --}}
    <script src="{{ asset('costome/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('costome/assets/js/custom.js') }}"></script>

    <script src="{{ asset('costome/assets/modules/popper.js') }}"></script>
    <script src="{{ asset('costome/assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('costome/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <script src="{{asset('assets/js/todolist.js')}}"></script>
    <script src="{{asset('assets/js/misc.js')}}"></script>
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script> --}}
    <!-- End custom js for this page -->
    @stack('js')
  </body>
</html>
