@extends('layouts.main')

@section('content')
    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-md-10">

                @if(isset($file_cont))
                    <h3 class="text-center">@lang('content.filecont')</h3>
                    <div class="alert alert-light">
                        <span class="sf-dump-note">{!! $repl_cont !!}</span>
                        <span class="sf-dump-note"></span>
                    </div>
                @endif

                <h5 class="info-text">
                    @lang('content.fti_1')
                </h5>

                <button type="button" id="edcontent" class="btn btn-primary">@lang('content.edcont')</button>
                <hr>

                <form id="edit-file-content" method="POST" action="{{route('save_file_content')}}">
                    {{csrf_field()}}
                    <div class="form-group form-group-php">
                        <label for="file-content" class="text-label text-label-php">
                            <h4 class="info-text">
                                @lang('content.fti_2')
                            </h4>
                        </label>
                        <textarea rows="8" class="form-control input-field" name="file_content" id="file_content" required>{{$file_cont}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-light btn-send">@lang('content.save')</button>
                </form>
                <hr>
                <h5 class="info-text">
                    @lang('content.fti_3')
                    <a href="{{route('download', ['path'=>'test.txt'])}}">@lang('content.here')</a>
                </h5>
            </div>
        </div>
    </div>
@endsection