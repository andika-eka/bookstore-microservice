<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Penjualan Buku</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="{{asset('template')}}/plugins/fontawesome-free/css/all.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/summernote/summernote-bs4.min.css">
   <!-- Datatable -->
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
   <link rel="stylesheet" href="{{asset('template')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <link rel="stylesheet" href="{{asset('template')}}/sweetalert2/sweetalert2.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand" style="background:rebeccapurple">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color:white"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link text-white">@yield('judul')</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <div class="sidebar-search-block mb-4">
          <!-- <form class="form-inline">
            <div class="input-group input-group-sm">
            <input name="cari" class="form-control" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search" style="color:white"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times" style="color:white"></i>
                </button>
              </div>
            </div>
          </form> -->
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-navy elevation-4" style="background:#3b2E5A">
    <!-- Brand Logo -->
    <!-- <a href="/" class="brand-link">
      <span class="brand-text font-weight-light">Tugas Statistik</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="{{asset('template')}}/dist/img/mul.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <!-- <div class="info">
          <a href="#" class="d-block">Gita Mulya</a>
        </div> -->
      </div>

       <!-- Navbar Search -->
        <div class="sidebar-search-block">
          <!-- <form class="form-inline">
            <div class="input-group input-group-sm" style="color:indigo">
            <input name="cari" class="form-control" type="search" placeholder="Search by Name" aria-label="Search">
              <div class="input-group-append">
                <button class="btn" style="background:rebeccapurple" type="submit">
                  <i class="fas fa-search" style="color:white"></i>
                </button>
                <button class="btn" style="background:rebeccapurple" type="button" data-widget="navbar-search" >
                  <i class="fas fa-times" style="color:white"> </i>
                </button>
              </div>
            </div>
          </form> -->
        </div>

      <!-- Sidebar Menu -->
      <nav class="mt-3">
        <ul class="nav nav-sidebar flex-column" style="background:rebeccapurple" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="menu-open" style="color:rebeccapurple">
            <a href="/catalog" class="nav-link active">
              <i class="nav-icon fas fa-users" style="color:white"></i>
              <p>
                Catalog
              </p>
            </a>
          </li>

          <li class="menu-open" style="color:rebeccapurple">
            <a href="/sales" class="nav-link active">
              <i class="nav-icon fas fa-users" style="color:white"></i>
              <p>
                Sales
              </p>
            </a>
          </li>

          <!-- <li class="menu-open" style="color:rebeccapurple">
            <a href="/refunds" class="nav-link active">
              <i class="nav-icon fas fa-users" style="color:white"></i>
              <p>
                Refund
              </p>
            </a>
          </li> -->
        </ul>    
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  style="background:#E0E0E0">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('judul')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">@yield('judul')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <hr>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    @yield('container')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-white" style="background:rebeccapurple">
    <!-- <strong>&copy; Gita Mulya</strong> -->
    <!-- <div class="float-right d-none d-sm-inline-block">
      <b>Tugas Statistik</b>
    </div> -->
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('template')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('template')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('template')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<!-- <script src="{{asset('template')}}/plugins/chart.js/Chart.min.js"></script> -->
<!-- Sparkline -->
<script src="{{asset('template')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('template')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<!-- <script src="{{asset('template')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<script src="{{asset('template')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('template')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('template')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('template')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('template')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('template')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('template')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('template')}}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('template')}}/dist/js/pages/dashboard.js"></script>
 <!-- DataTables -->
 <script src="{{asset('template')}}/plugins/datatables/jquery.dataTables.js"></script>
 <script src="{{asset('template')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
 <!-- AdminLTE App
 <script src="{{asset('template')}}/dist/js/adminlte.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script> -->
 <!-- Sweet Alert -->
 <script src="{{asset('template')}}/sweetalert2/sweetalert2.min.js"></script>
 <script>
        $(function () {
            $("#mahasiswatb").DataTable();
            $("#produkmomentb").DataTable();
        });
 </script>
 <script>
        var flash = $('#flash').data('flash');
        if(flash){
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3200,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
                })
                Toast.fire({
                    icon: 'success',
                    title: 'Berhasil !',
                    text :flash
                })
        }
        $(document).on('click', '#btn-hapus', function(e){
            e.preventDefault();
            var link = $(this).attr('href');
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                }
            })
        })
        $(document).on('click', '#btn-hapus1', function(e){
            e.preventDefault();
            var link = $(this).attr('/produkmoment');
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                }
            })
        })
        $(document).on('click', '#btn-export', function(e){
            e.preventDefault();
            var link = $(this).attr('href');
            Swal.fire({
                title: 'Apakah Anda yakin ?',
                text: "Data ini akan di Export!",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: ' #36006c',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Export!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                }
            })
        })
 </script>

</body>
</html>