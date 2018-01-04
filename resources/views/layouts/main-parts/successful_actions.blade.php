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

<!--Successful clearing a table-->
@if(Session::has('successful-load'))
    <div id="successful-load" class="alert alert-success">
        <h5 class="text-center">{{Session::get('successful-load')}}</h5>
    </div>
@endif