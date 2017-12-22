@extends('layouts.main')

@section('content')
<div class="container content">
    <div class="row">
        <div class="container col-md-6">
            <ul id="slides">
                <li class="slide show"><img src = "{{asset("images/1.png")}}" class="slide-img"></li>
                <li class="slide"><img src = "{{asset("images/2.png")}}" class="slide-img"></li>
                <li class="slide"><img src = "{{asset("images/3.png")}}" class="slide-img"></li>
                <li class="slide"><img src = "{{asset("images/4.png")}}" class="slide-img"></li>
                <li class="slide"><img src = "{{asset("images/5.png")}}" class="slide-img"></li>
                <li class="slide"><img src = "{{asset("images/6.png")}}" class="slide-img"></li>
                <li class="slide"><img src = "{{asset("images/7.png")}}" class="slide-img"></li>
            </ul>
        </div>
    </div>
</div>
@endsection