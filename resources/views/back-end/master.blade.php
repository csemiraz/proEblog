<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('assets/back-end/') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('assets/back-end/') }}/css/sb-admin-2.min.css" rel="stylesheet">

  <!--- Data Tables --->
  <link rel="stylesheet" href="{{ asset('assets/DataTables/datatables.min.css') }}">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
   @include('back-end.includes.sideBar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('back-end.includes.topBar')
        <!-- End of Topbar -->
  
        <br/>
        <!-- Begin Page Content -->
        <div class="container-fluid">

       @yield('mainContent')

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @include('back-end.includes.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  @include('back-end.includes.logout-modal')

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('assets/back-end/') }}/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('assets/back-end/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('assets/back-end/') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('assets/back-end/') }}/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('assets/back-end/') }}/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('assets/back-end/') }}/js/demo/chart-area-demo.js"></script>
  <script src="{{ asset('assets/back-end/') }}/js/demo/chart-pie-demo.js"></script>

  <!--- Data Tables Js --->
  <script src="{{ asset('assets/DataTables/datatables.min.js') }}"></script>

  <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
    } );
  </script>

</body>

</html>
