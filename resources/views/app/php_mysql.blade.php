@extends('layouts.main')

@section('content')
    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-md-8 eloquent-orm">
                <h3><i>This is example of interaction with database via Eloquent ORM</i></h3>
                <hr>
                @if(Session::has('successful-update'))
                    <div id="successful-update" class="alert alert-success">
                        <h5 class="text-center">{{Session::get('successful-update')}}</h5>
                    </div>
                @endif

                @if(Session::has('successful-delete'))
                    <div id="successful-delete" class="alert alert-danger">
                        <h5 class="text-center">{{Session::get('successful-delete')}}</h5>
                    </div>
                @endif

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

                <script>
                    if($('div').is('#successful-update'))
                    {
                        $('#successful-update').slideUp(2000, function () {

                            }
                        );
                    }

                    if($('div').is('#successful-delete'))
                    {
                        $('#successful-delete').slideUp(2000, function () {

                        });
                    }
                </script>
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

                                    <button type="button" class="btn btn-danger btn-xs btn-round" data-toggle="modal" data-target="#confirm-deletion-record">
                                        <i class="fa fa-times fa-lg" aria-hidden="true"></i>
                                    </button>

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

                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm-truncate">Truncate table</button>

                    <!--Modal window for confirmation of truncate table -->
                    <div class="modal fade" id="confirm-truncate" tabindex="-1" role="dialog" aria-labelledby="confirm-truncate-Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h4 class="text-center">This action will delete all records from table and reset the auto-incrementing ID to zero.
                                        Do you want to continue anyway?
                                    </h4>
                                </div>
                                <div class="modal-footer confirm-deletetion">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    <form action = "{{route('truncate')}}" method = "post" class = "actions-post">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}

                                        <button type="submit" class="btn btn-light btn-outline-danger">Truncate table</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Modal window for confirmation of removal record from table -->
                    <div class="modal fade" id="confirm-deletion-record" tabindex="-1" role="dialog" aria-labelledby="confirm-deletion-record-Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h3 class="text-center">Are you sure?</h3>
                                </div>
                                <div class="modal-footer confirm-deletetion">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    <form action = "{{route('delete_user', ['id' => $user->id])}}" method = "post" class = "actions-post">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}

                                        <button type="submit" class="btn btn-danger btn-xs">
                                            <span>
                                                <b>Delete record</b>
                                            </span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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