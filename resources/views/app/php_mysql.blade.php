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
                    <button type="submit" class="btn btn-light btn-send">Add user</button>
                </form>
                <hr>

                <!-- Users -->
                @if($users->count() > 0)
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">Age</th>
                            <th scope="col">Date of register</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>

                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->surname}}</td>
                                <td>{{$user->age}}</td>
                                <td>{{$user->created_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection