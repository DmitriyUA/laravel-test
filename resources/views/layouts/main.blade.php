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
    <!-- Custom styles for this template -->
    <link href="{{asset('/css/3-col-portfolio.css')}}" rel="stylesheet">

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
                    <a class="nav-link" href="#">PHP&MySQL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">HTML&CSS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">JavaScript(jQuery)&aJax</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->

    @yield('content')

<!-- /.container -->

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

</body>

</html>
