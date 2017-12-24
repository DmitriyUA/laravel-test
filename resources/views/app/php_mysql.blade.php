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
                        <input type="text" class="form-control input-field" name="age">
                    </div>
                    <button type="submit" class="btn btn-light btn-send">Add user</button>
                </form>
                </br>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Users -->
                @if($users->count() > 0)
                    <hr>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">Age</th>
                            <th scope="col">Date of register</th>
                            <th scope="col">Actions</th>
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
                                <td class="actions">
                                    <form action = "{{route('php_mysql_delete', ['id' => $user->id])}}" method = "post" class = "actions-post">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}

                                        <button type="submit" class="btn btn-danger btn-xs btn-round">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <form action = "{{route('truncate')}}" method = "post" class = "actions-post">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}

                        <button type="submit" class="btn btn-light btn-send">Truncate table</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection