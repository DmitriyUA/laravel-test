@extends('layouts.main')

@section('content')
    <div id="preload" class="preload">
        <img src='/images/load.gif'>
    </div>
    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-md-10 ajax-container">
                <h3 class="text-center"><i>@lang('content.a_gdat')</i></h3>
                <h5 class="info-text">
                    @lang('content.ait_1')
                </h5>

                <!--Response data-->
                <div id="ajax-data" class="col-md-10">
                </div>

                <button id="get-data" class="btn btn-primary">
                    @lang('content.get_data')
                </button>
                <hr>

                <h3 class="text-center">
                    <i>
                        @lang('content.data_strg')
                    </i>
                </h3>
                <h5 class="info-text">
                    @lang('content.ati_2')
                </h5>

                <button type="button" class="btn btn-primary" id="create-user-ajax">@lang('content.cr_usr')</button>

                <div id="ajax-data" class="col-md-10">

                    <!--Create user-->

                    <form id="new-user-ajax">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="imass" class="text-label">@lang('content.name')</label>
                            <input type="text" class="form-control input-field" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="imass" class="text-label">@lang('content.surname')</label>
                            <input type="text" class="form-control input-field" name="surname" required>
                        </div>

                        <div class="form-group">
                            <label for="imass" class="text-label">@lang('content.age')</label>
                            <input type="text" class="form-control input-field" name="age">
                        </div>
                        <button id="add-user" class="btn btn-light btn-send">@lang('content.add_usr')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection