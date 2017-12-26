<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark main-bg navbar-static-top">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{asset('images/brand.png')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto main-menu">
                <li class="nav-item">
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