<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My modest skills</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('/css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/bootstrap/css/bootstrap-grid.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">


</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark main-bg navbar-static-top">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{asset('images/brand.png')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('php')}}">PHP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('php_mysql')}}">PHP&MySQL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('html_css')}}">HTML&CSS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('javascript_ajax')}}">JavaScript(jQuery)&aJax</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container current-date">
    <div class="row">
        <div class="col-md-3 offset-md-1" id="date">
        </div>
        <div class="col-md-3 offset-md-4 d-flex flex-row-reverse" id="time">
        </div>
    </div>
    <script type="text/javascript">
        setInterval(function (){
            var current_date = new Date();
            var date = current_date.toDateString();
            var time = current_date.toTimeString();
            document.getElementById("date").innerHTML = date;
            document.getElementById("time").innerHTML = time;
        }, 1)

    </script>
</div>
<!-- Page Content -->

    @yield('content')

<!-- /.container -->
<div class="back-top" id="back-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>
<!-- Footer -->
<footer class="py-5 main-bg">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('/js/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/css/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/js/scroll-top.js')}}"></script>

</body>

</html>
