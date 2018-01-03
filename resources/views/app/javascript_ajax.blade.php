@extends('layouts.main')

@section('content')
    <div id="preload" class="preload">
        <img src='/images/load.gif'>
    </div>
    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-md-10 ajax-container">
                <h3 class="text-center"><i>Get data from database via ajax</i></h3>
                <h5>Clicking by button <i><b>Get data</b></i> will be sent ajax query to database for retrieving all records</h5>
                <hr>
                <div id="ajax-data" class="col-md-10">
                </div>
                <button id="get-data" class="btn btn-primary">Get data</button>

                <h3 class="text-center"><i>Data storage to database via ajax</i></h3>
                <h5>On the form below(click <i><b>Create user</b></i>) you can add users to database via ajax</h5>
                <hr>
                <button type="button" class="btn btn-primary" id="create-user-ajax">Create user</button>
                <div id="ajax-data" class="col-md-10">
                    <!--Create user-->

                    <form id="new-user-ajax">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="imass" class="text-label">Name</label>
                            <input type="text" class="form-control input-field" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="imass" class="text-label">Surname</label>
                            <input type="text" class="form-control input-field" name="surname" required>
                        </div>

                        <div class="form-group">
                            <label for="imass" class="text-label">Age</label>
                            <input type="text" class="form-control input-field" name="age">
                        </div>
                        <button id="add-user" class="btn btn-light btn-send">Add user</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection