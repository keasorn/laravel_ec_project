<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield("title")</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/back_end/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/back_end/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">
    @include("back_end.layout.nav")
    @include("back_end.layout.main-sidebar")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
       @yield("content")
    </div>
    <!-- /.content-wrapper -->

    @include("back_end.layout.footer")
</div>
<!-- jQuery -->
<script src="/back_end/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/back_end/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/back_end/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/back_end/dist/js/demo.js"></script>
</body>
</html>
