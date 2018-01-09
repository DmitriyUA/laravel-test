@extends('layouts.main')

@section('content')
    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-md-8 eloquent-orm">
                <h3><i>@lang('content.mysql_title')</i></h3>
                <hr>

                @include('layouts.main-parts.successful_actions')

                <h5 class="info-text">
                    @lang('content.mti_1')
                </h5>

                <!--Hide button "load" if table has no less than 1 record-->
                @if(count($users) < 1)

                    <!--Form for loading test data-->
                    </br>
                    <form method="GET" action="{{route('init_data')}}">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-warning btn-lg btn-block">@lang('content.ltdata')</button>
                    </form>
                    </br>
                @endif

                <!--Create user-->
                    <button type="button" class="btn btn-primary" id="create-user">@lang('content.cr_usr')</button>

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
                <form method="POST" action="/mysql" id="new-user">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="text-label">@lang('content.name')</label>
                        <input type="text" class="form-control input-field" name="name" required>
                    </div>

                    <div class="form-group">
                        <label class="text-label">@lang('content.surname')</label>
                        <input type="text" class="form-control input-field" name="surname" required>
                    </div>

                    <div class="form-group">
                        <label class="text-label">@lang('content.age')</label>
                        <input type="text" class="form-control input-field" name="age">
                    </div>
                    <button type="submit" class="btn btn-light btn-send">@lang('content.add_usr')</button>
                </form>



                <!-- Users -->
                @if($users->count() > 0)
                    <hr>

                    <h5 class="info-text">
                        @lang('content.mti_2')
                    </h5>

                    <hr>

                    <!-- Searching users -->
                    <div class="container">
                        <div class="row">
                            <div class="col align-self-end">
                                <form class="form-inline my-2 my-lg-0 search" method="post" action="{{route('search')}}">
                                    {{csrf_field()}}
                                    <input class="form-control mr-sm-2" id="search" type="search" placeholder="Search" aria-label="Search" name="search" value="@if (isset($query)){{$query}}@endif">
                                    <button class="btn btn-success my-2 my-sm-0" type="submit">@lang('content.search')</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <form action = "{{route('delete_user')}}" method = "post">
                        {{ csrf_field() }}
                        {{method_field('DELETE')}}

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">@lang('content.name')</th>
                            <th scope="col">@lang('content.surname')</th>
                            <th scope="col">@lang('content.age')</th>
                            <th scope="col">@lang('content.doreg')</th>
                            <th scope="col" class = "actions">@lang('content.actions')</th>
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
                        <button type="button" id="select-all" class="btn btn-default">@lang('content.sel_all')</button>

                        <!--Group deletion(Button)-->
                        <button type="submit" id="delete" class="btn btn-danger">@lang('content.del_sel_gr')</button>
                    </div>

                    <div class="row justify-content-end group-actions">
                        <!--Clear table(truncate)-->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm-truncate">@lang('content.clr_tbl')</button>
                    </div>
                    <!--Pagination -->
                        {{$users->links()}}

                    </form>

                    <!--Modal window for confirmation of removal record from table -->
                    <div class="modal fade" id="confirm-deletion-record" tabindex="-1" role="dialog" aria-labelledby="confirm-deletion-record-Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h3 class="text-center">@lang('content.confirm_del')</h3>
                                </div>
                                <div class="modal-footer confirm-deletetion">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">@lang('content.close')</button>
                                    <form action = "{{route('delete_user')}}" method = "post" class = "actions-post">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}

                                        <button id="send-id" name="id" type="submit" class="btn btn-danger btn-xs">
                                            <span>
                                                <b>@lang('content.del_rec')</b>
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
    <div id="prompt-delete">Delete</div>
    <div id="prompt-edit">Edit</div>
@endsection