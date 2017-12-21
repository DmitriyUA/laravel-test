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
    <div class="row  row-date">
        <div class="col-md-3 offset-md-1" id="date">
            <div class="row">
                <div class="year date-box" id="year">
                </div>
                /
                <div class="month date-box" id="month">
                </div>
                /
                <div class="day date-box" id="day">
                </div>
            </div>
        </div>
        <div class="col-md-3 offset-md-4" id="time">
            <div class="row">
                <div class="hours date-box" id="hours">
                </div>
                :
                <div class="minutes date-box" id="minutes">
                </div>
                :
                <div class="seconds date-box" id="seconds">
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        setInterval(function (){
            var current_date = new Date();
            var year = current_date.getFullYear();
            var month = current_date.getMonth();
            var day = current_date.getDay();

            var hours = current_date.getHours();
            var minutes = current_date.getMinutes();
            var seconds = current_date.getSeconds();


            document.getElementById("year").innerHTML = year;
            document.getElementById("month").innerHTML = month;
            document.getElementById("day").innerHTML = day;

            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;
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
