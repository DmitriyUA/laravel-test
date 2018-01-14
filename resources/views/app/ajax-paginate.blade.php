    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th>@lang('content.name')</th>
            <th>@lang('content.surname')</th>
            <th>@lang('content.age')</th>
            <th>@lang('content.doreg')</th>
        </tr>
        </thead>
        <tbody class="ajax-table">
            @foreach ($users as $user)
                <tr>
                    <th scope='row'>{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->surname}}</td>
                    <td>{{$user->age}}</td>
                    <td>{{$user->created_at}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$users->links()}}


