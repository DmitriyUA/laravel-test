@extends('layouts.main')

@section('content')
    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-md-8 eloquent-orm">
                <h3><i>This is example of interaction with database via Eloquent ORM</i></h3>
                <hr>

                <!--Successful User update-->
                @if(Session::has('successful-update'))
                    <div id="successful-update" class="alert alert-success">
                        <h5 class="text-center">{{Session::get('successful-update')}}</h5>
                    </div>
                @endif

                <!--Successful User delete-->
                @if(Session::has('successful-delete'))
                    <div id="successful-delete" class="alert alert-danger">
                        <h5 class="text-center">{{Session::get('successful-delete')}}</h5>
                    </div>
                @endif

                <!--Successful User addition-->
                @if(Session::has('successful-addition'))
                    <div id="successful-addition" class="alert alert-success">
                        <h5 class="text-center">{{Session::get('successful-addition')}}</h5>
                    </div>
                @endif

                <!--Successful clearing a table-->
                @if(Session::has('successful-truncate'))
                    <div id="successful-truncate" class="alert alert-danger">
                        <h5 class="text-center">{{Session::get('successful-truncate')}}</h5>
                    </div>
                @endif

                <h5 class="info-text">
                    You can add records to database manually using the form below(click <b>Create user</b>) or load testing data
                    by clicking button "Loading of test data"! Test data is loaded via Seed class. The table fields such as
                    "Name", "Surname" are filled with data from the corresponding arrays in random order.
                    Field "Age" - integer random number in the range 18 and 99.
                </h5>

                <!--Hide button "load" if it`s has been pressed-->
                @if(!Session::has('loaded'))

                    <!--Form for loading test data-->
                    </br>
                    <form method="GET" action="/load_init_data">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-warning btn-lg btn-block">Loading of test data</button>
                    </form>
                    </br>
                @endif

                <!--Create user-->
                    <button type="button" class="btn btn-primary" id="create-user">Create user</button>

                <!--Errors-->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!--Form for adding new user to database-->
                <form method="POST" action="/php_and_mysql" id="new-user">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="text-label">Name</label>
                        <input type="text" class="form-control input-field" name="name" required>
                    </div>

                    <div class="form-group">
                        <label class="text-label">Surname</label>
                        <input type="text" class="form-control input-field" name="surname" required>
                    </div>

                    <div class="form-group">
                        <label class="text-label">Age</label>
                        <input type="text" class="form-control input-field" name="age">
                    </div>
                    <button type="submit" class="btn btn-light btn-send">Add User</button>
                </form>

                <!-- Users -->
                @if($users->count() > 0)
                    <hr>

                    <h5 class="info-text">
                        You can perform some simple actions on records in the database such as <b><i>delete</i></b>, <b><i>edit</i></b>
                        and <b><i>group deletation</i></b>. Also if you wish, you can clear table completely by clicking <b><i>Clear table</i></b>
                    </h5>

                    <hr>

                    <form action = "{{route('delete_user')}}" method = "post">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}

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

                                    <input type="checkbox" id="test-{{$user->id}}" name="group_delete[]" value="{{$user->id}}" class="delete-group"/>
                                    <label for="test-{{$user->id}}"></label>

                                    <button name="first_id" value="{{$user->id}}" type="button" class="btn btn-danger btn-xs btn-round delete" data-toggle="modal" data-target="#confirm-deletion-record">
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
                    <div class="row justify-content-end group-actions">
                        <!--Group deletion(Select All)-->
                        <button type="button" id="select-all" class="btn btn-default">Select All</button>

                        <!--Group deletion(Button)-->
                        <button type="submit" id="delete" class="btn btn-danger">Delete selected group</button>
                    </div>

                    <div class="row justify-content-end group-actions">
                        <!--Clear table(truncate)-->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm-truncate">Clear table</button>
                    </div>
                    <!--Pagination -->
                        {{$users->links()}}

                    </form>

                    <!--Modal window for confirmation of removal record from table -->
                    <div class="modal fade" id="confirm-deletion-record" tabindex="-1" role="dialog" aria-labelledby="confirm-deletion-record-Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h3 class="text-center">Are you sure?</h3>
                                </div>
                                <div class="modal-footer confirm-deletetion">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    <form action = "{{route('delete_user')}}" method = "post" class = "actions-post">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}

                                        <button id="send-id" name="id" type="submit" class="btn btn-danger btn-xs">
                                            <span>
                                                <b>Delete record</b>
                                            </span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="container small-resolution-actions">
                        <div class="alert alert-info">
                            <h6>At this screen resolution <i>Actions</i> field isn`t available.</h6>
                        </div>
                    </div>


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

                                        <button type="submit" class="btn btn-light btn-outline-danger">Clear table</button>
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