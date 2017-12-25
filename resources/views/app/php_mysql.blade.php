@extends('layouts.main')

@section('content')
    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-md-8 eloquent-orm">
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
                            <th scope="col" class = "actions">Actions</th>
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
                                    <form action = "{{route('delete_user', ['id' => $user->id])}}" method = "post" class = "actions-post">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}

                                        <button type="submit" class="btn btn-danger btn-xs btn-round">
                                            <i class="fa fa-times fa-lg" aria-hidden="true"></i>
                                        </button>
                                    </form>


                                    <span class="fa-stack fa-lg">
                                        <a href = "{{route('edit_user', ['id' => $user->id])}}" class="edit-user">
                                           <i class="fa fa-circle fa-stack-2x"></i>
                                           <i class="fa fa-pencil-square-o fa-stack-1x edit-link"></i>
                                        </a>
                                    </span>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="container small-resolution-actions">
                        <div class="alert alert-info">
                            <h6>At this screen resolution <i>Actions</i> field isn`t available.</h6>
                        </div>
                    </div>
                    <form action = "{{route('truncate')}}" method = "post" class = "actions-post">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}

                        <button type="submit" class="btn btn-light btn-send">Truncate table</button>
                    </form>
                @endif
            </div>
            <div class="container small-resolution">
                <div class="alert alert-warning">
                    <h6>At this screen resolution <i>Users</i> table isn`t available.</h6>
                </div>
            </div>
        </div>
    </div>
@endsection