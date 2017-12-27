@extends('layouts.main')

@section('content')
    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-md-10 ajax-container">
                <h3 class="text-center"><i>Get data from database via ajax query</i></h3>
                <hr>
                <div id="ajax-data" class="col-md-10">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Age</th>
                            <th>Date of register</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <button id="load-data" class="btn btn-primary">Get data</button>

                <h3 class="text-center"><i>Send data to database via ajax query</i></h3>
                <hr>
                <div id="ajax-data" class="col-md-10">
                    <form>
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