<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

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

<div class="container current-date">
    <div class="row  row-date">
        <div class="col-md-3 offset-md-1 d-flex date" id="date">
            <div class="row">
                <div class="year date-box" id="year">
                </div>

                <div class="date-delimitier">
                    <span>/</span>
                </div>

                <div class="month date-box" id="month">
                </div>

                <div class="date-delimitier">
                    <span>/</span>
                </div>

                <div class="day date-box" id="day">
                </div>
            </div>
        </div>
        <div class="col-md-3 offset-md-4 d-flex flex-row-reverse time" id="time">
            <div class="row">
                <div class="hours date-box" id="hours">
                </div>

                <div class="date-delimitier">
                    <span>:</span>
                </div>

                <div class="minutes date-box" id="minutes">
                </div>

                <div class="date-delimitier">
                    <span>:</span>
                </div>

                <div class="seconds date-box" id="seconds">
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        setInterval(function (){

            var current_date = new Date();
            var year = current_date.getFullYear();
            var month = (current_date.getMonth()+1);
            var day = current_date.getDate();

            if(month < 10)
            {
                month = '0' + month;
            }

            if(day < 10)
            {
                day = '0' + day;
            }

            var hours = current_date.getHours();
            var minutes = current_date.getMinutes();
            var seconds = current_date.getSeconds();

            if(hours < 10)
            {
                hours = '0' + hours;
            }
            if(minutes < 10)
            {
                minutes = '0' + minutes;
            }

            if(seconds < 10)
            {
                seconds = '0' + seconds;
            }


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

<script src="{{asset('/js/scroll-top.js')}}"></script>
<script src="{{asset('/js/slide.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/header.js')}}"></script>

</body>

</html>
