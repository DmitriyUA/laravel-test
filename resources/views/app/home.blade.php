@extends('layouts.main')

@section('content')
<div class="container content">
    <div class="row">
        <div class="container col-md-6 slider">
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
        <div class="container col-md-9">
            <h5 class="info-text">
                Это тренировочный проект для изучения возможностей фреймворка Laravel. Здесь реализовано взаимодействие
                с базой данных посредством ORM и ajax на простых примерах (псевдопользователи) а также работа с файлами.
                Также присутствует выбор языков (английский и русский). Код проекта находится по адресу <>
            </h5>
        </div>
    </div>
</div>
@endsection