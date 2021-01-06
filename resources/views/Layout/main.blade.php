<!doctype html>
<html lang="en">

<head>
  <title>RENTAL.IN MOBIL</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
  <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
  <!-- GOOGLE FONTS -->

  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/logo.png')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/logo.png')}}">
</head>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <!-- NAVBAR -->
    @include('Layout.includes._navbar')
    <!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
    @include('Layout.includes._sidebar')
    <!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    @yield('content')
    <!-- END MAIN -->
    <div class="clearfix"></div>
    <footer>
      <div class="container-fluid">
        <p class="copyright">Created by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">Kelompok12 PBF B</a>
</p>
      </div>
    </footer>
  </div>
  <!-- END WRAPPER -->
  <!-- Javascript -->
  <script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>


</body>

</html>
