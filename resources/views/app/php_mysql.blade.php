@extends('layouts.main')

@section('content')
    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="/php_and_mysql">
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
                        <input type="text" class="form-control input-field" name="age" required>
                    </div>
                    <button type="submit" class="btn btn-light btn-send">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection