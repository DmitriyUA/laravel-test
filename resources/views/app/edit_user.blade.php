@extends('layouts.main')

@section('content')
    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{route('update_user', ['id' => $user->id])}}">
                    {{csrf_field()}}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="imass" class="text-label">Name</label>
                        <input type="text" class="form-control input-field" name="name" value="{{$user->name}}" required>
                    </div>

                    <div class="form-group">
                        <label for="imass" class="text-label">Surname</label>
                        <input type="text" class="form-control input-field" name="surname" value="{{$user->surname}}" required>
                    </div>

                    <div class="form-group">
                        <label for="imass" class="text-label">Age</label>
                        <input type="text" class="form-control input-field" name="age" value="{{$user->age}}">
                    </div>
                    <button type="submit" class="btn btn-light btn-send">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection