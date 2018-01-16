<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark main-bg navbar-static-top">
    <div class="container">

            <a class="navbar-brand" href="/"><img src="{{asset('images/brand.png')}}"></a>
            <a href="{{route('locale', ['lang' => 'en'])}}">
                <img class="language" src="{{asset('images/en.png')}}">
            </a>
            <a href="{{route('locale', ['lang' => 'ru'])}}">
                <img class="language" src="{{asset('images/ru.png')}}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto main-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('php')}}">PHP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('php_mysql')}}">MySQL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('javascript_ajax')}}">aJax</a>
                    </li>
                </ul>
            </div>

    </div>
</nav>