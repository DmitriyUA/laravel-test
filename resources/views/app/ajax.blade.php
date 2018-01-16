@extends('layouts.main')

@section('content')
    <div id="preload" class="preload">
        <img src='/images/load.gif'>
    </div>
    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-md-10 ajax-container">
                <h3 class="text-center"><i>@lang('content.Get data from database via ajax query')</i></h3>
                <h5 class="info-text">
                    @lang('content.Clicking by button Get data will be sent ajax query to database for retrieving all records.')
                </h5>

                <!--Response data-->
                <div id="ajax-data" class="col-md-10">
                </div>

                <button id="get-data" class="btn btn-primary">
                    @lang('content.Get data')
                </button>
                <hr>

                <h3 class="text-center">
                    <i>
                        @lang('content.Data storage to database via ajax')
                    </i>
                </h3>
                <h5 class="info-text">
                    @lang('content.On the form below(click Create user) you can add users to database via ajax')
                </h5>

                <button type="button" class="btn btn-primary" id="create-user-ajax">@lang('content.Create user')</button>

                <div id="ajax-data" class="col-md-10">

                    <!--Create user-->

                    <form id="new-user-ajax">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="imass" class="text-label">@lang('content.Name')</label>
                            <input type="text" class="form-control input-field" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="imass" class="text-label">@lang('content.Surname')</label>
                            <input type="text" class="form-control input-field" name="surname" required>
                        </div>

                        <div class="form-group">
                            <label for="imass" class="text-label">@lang('content.Age')</label>
                            <input type="text" class="form-control input-field" name="age">
                        </div>
                        <button id="add-user" class="btn btn-light btn-send">@lang('content.Add User')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection