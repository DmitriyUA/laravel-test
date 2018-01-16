@extends('layouts.main')

@section('content')
    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-md-10">

                @if(isset($file_cont))
                    <h3 class="text-center">@lang('content.Content of testing file')</h3>
                    <div class="alert alert-light">
                        <span class="sf-dump-note">{!! $repl_cont !!}</span>
                        <span class="sf-dump-note"></span>
                    </div>
                @endif

                <h5 class="info-text">
                    @lang('content.You can edit content of test file at field below (click Edit content)')
                </h5>

                <button type="button" id="edcontent" class="btn btn-primary">@lang('content.Edit content')</button>
                <hr>

                <form id="edit-file-content" method="POST" action="{{route('save_file_content')}}">
                    {{csrf_field()}}
                    <div class="form-group form-group-php">
                        <label for="file-content" class="text-label text-label-php">
                            <h4 class="info-text">
                                @lang('content.At this field you can edit content of testing file')
                            </h4>
                        </label>
                        <textarea rows="8" class="form-control input-field" name="file_content" id="file_content" required>@if(isset($file_cont)){{$file_cont}} @endif</textarea>
                    </div>
                    <button type="submit" class="btn btn-light btn-send">@lang('content.Save changes')</button>
                </form>
                <hr>
                <h5 class="info-text">
                    @lang('content.To check the result you can download the test file before editing, and then after that, and compare them. Download')
                    <a href="{{route('download', ['path'=>'test.txt'])}}">@lang('content.here')</a>
                </h5>
                <hr>
                <h5 class="info-text">
                    @lang('content.Also you can create text file with random name specifying its at field below (without extension).')
                    <hr>
                    <form id="create-file" method="POST" action="{{route('create_file')}}">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="file-content" class="col-sm-2 col-form-label">
                                    @lang('content.File name')
                            </label>
                            <div class="col-sm-4">
                                <input type="text" name="file_name" class="form-control" placeholder="@lang('content.File name')">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-send">@lang('content.Create file')</button>
                    </form>
                </h5>
@if(isset($files))
                        <table class="table files">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">File</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($files as $file)
                                @if($file == 'test.txt')
                                    @continue
                                @endif
                                <tr>
                                    <th>{{$file}}</th>
                                    <td>
                                        <form action = "{{route('delete_file')}}" method = "post" class = "actions-post">
                                            {{ csrf_field() }}
                                            {{method_field('DELETE')}}
                                            <button type="submit" name="file_name" value="{{$file}}" class="btn btn-danger btn-xs btn-round delete">
                                                <i class="fa fa-times fa-lg" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
    @endif
            </div>
        </div>
    </div>
@endsection