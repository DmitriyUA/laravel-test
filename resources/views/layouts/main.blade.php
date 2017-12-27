<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{csrf_token()}}">


    <title>My modest skills</title>

    <!-- Custom styles for this template -->
    <link href="{{asset('/css/main.css')}}" rel="stylesheet">

    <link href="{{asset('/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/bootstrap-grid.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/main-media.css')}}" rel="stylesheet">
    <script src="{{asset('/js/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>


</head>

<body>

@include('layouts.main-parts.nav')

@include('layouts.main-parts.clock')

<!-- Page Content -->

    @yield('content')

<!-- /.container -->
<div class="back-top" id="back-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>
<!-- Footer -->
<footer class="py-5 main-bg">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; {{date('Y')}}</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->

<script src="{{asset('/js/scroll-top.js')}}"></script>
<script src="{{asset('/js/slide.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/header.js')}}"></script>
<script src="{{asset('js/clock.js')}}"></script>
<script src="{{asset('js/ajax/load_data.js')}}"></script>
<script src="{{asset('js/ajax/data_storage.js')}}"></script>


</body>

</html>
