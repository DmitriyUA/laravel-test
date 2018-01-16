@extends('layouts.main')

@section('content')
    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h5 class="text-right text-white">@lang('content.Server time') {{date("H:i:s")}}</h5>
                </br>
                @if (!isset($input_arr) && !isset($in_str))

                    <!--Input for Array-->
                        <form method="POST" action="{{route('array_controller')}}">
                            {{csrf_field()}}
                            <div class="form-group form-group-php">
                                <label for="imass" class="text-label text-label-php">
                                    <h5 class="info-text">
                                        @lang('content.pti_1')
                                        <hr>
                                    </h5>
                                    <h4 class="info-text">
                                        @lang('content.pti_2')
                                    </h4>
                                </label>
                                <hr>
                                <input type="text" class="form-control input-field" name="imass" id="imass" required>
                            </div>
                            <button type="submit" class="btn btn-light btn-send">@lang('content.Array')</button>
                        </form>


                @endif

                <!--For Array-->
                @if (isset($input_arr))
                    <!-- Entered data -->
                        <h3 class="text-center">@lang('content.Entered data')</h3>
                        <div class="entered-data alert alert-info">
                            <span>" </span>{{$input_arr}}<span> "</span>
                        </div>

                        <!-- Convertion to an array -->
                        <h3 class="text-center">@lang('content.Convertion to an array')</h3>
                        <div class="alert alert-light">
                            <span class="sf-dump-note">{{gettype($convert_to_mass)}}:{{count($convert_to_mass)}} [</span></br>
                            @foreach($convert_to_mass as $key => $value)
                                <pre class="conv-to-mass"><span class="sf-dump-index">   {{$key}}</span> => "<span class="sf-dump-str">{{$value}}</span>"</pre>
                            @endforeach
                            <span class="sf-dump-note">]</span>
                        </div>

                        <!-- Array sorting -->
                        <h3 class="text-center">@lang('content.Array sorting')</h3>
                        <div class="alert alert-light">
                            <span class="sf-dump-note">{{gettype($array_sort)}}:{{count($array_sort)}} [</span></br>
                            @foreach($array_sort as $key => $value)
                                <pre class="conv-to-mass"><span class="sf-dump-index">   {{$key}}</span> => "<span class="sf-dump-str">{{$value}}</span>"</pre>
                            @endforeach
                            <span class="sf-dump-note">]</span>
                        </div>

                        <!-- Reverse array sorting -->
                        <h3 class="text-center">@lang('content.Reverse array sorting')</h3>
                        <div class="alert alert-light">
                            <span class="sf-dump-note">{{gettype($rev_arr_sort)}}:{{count($rev_arr_sort)}} [</span></br>
                            @foreach($rev_arr_sort as $key => $value)
                                <pre class="conv-to-mass"><span class="sf-dump-index">   {{$key}}</span> => "<span class="sf-dump-str">{{$value}}</span>"</pre>
                            @endforeach
                            <span class="sf-dump-note">]</span>
                        </div>

                        <!-- Array shuffling -->
                        <h3 class="text-center">@lang('content.Array shuffling')</h3>
                        <div class="alert alert-light">
                            <span class="sf-dump-note">{{gettype($arr_shuffle)}}:{{count($arr_shuffle)}} [</span></br>
                            @foreach($arr_shuffle as $key => $value)
                                <pre class="conv-to-mass"><span class="sf-dump-index">   {{$key}}</span> => "<span class="sf-dump-str">{{$value}}</span>"</pre>
                            @endforeach
                            <span class="sf-dump-note">]</span>
                        </div>

                        <!-- The first element of array -->
                        <h3 class="text-center">@lang('content.The first element of array')</h3>
                        <div class="alert alert-light">
                            <span class="sf-dump-note">first:</span></br>
                            <pre class="conv-to-mass">"<span class="sf-dump-str">{{$first_elem}}</span>"</pre>
                        </div>

                        <!-- The last element of array -->
                        <h3 class="text-center">@lang('content.The last element of array')</h3>
                        <div class="alert alert-light">
                            <span class="sf-dump-note">last:</span></br>
                            <pre class="conv-to-mass">"<span class="sf-dump-str">{{$last_elem}}</span>"</pre>
                        </div>

                        <!-- Swap the keys and values -->
                        <h3 class="text-center">@lang('content.Swap the keys and values')</h3>
                        <div class="alert alert-light">
                            <span class="sf-dump-note">{{gettype($arr_flip)}}:{{count($arr_flip)}} [</span></br>
                            @foreach($arr_flip as $key => $value)
                                <pre class="conv-to-mass"><span class="sf-dump-index">   {{$key}}</span> => "<span class="sf-dump-str">{{$value}}</span>"</pre>
                            @endforeach
                            <span class="sf-dump-note">]</span>
                        </div>

                        <!-- Implode mass to string -->
                        <h3 class="text-center">@lang('content.Combine array elements Array shuffling in a string')</h3>
                        <div class="alert alert-light">
                            <span class="sf-dump-note">{{gettype(implode($arr_shuffle))}}:{{count(implode($arr_shuffle))}}</span></br>
                            <pre class="conv-to-mass">"<span class="sf-dump-str">{{implode($arr_shuffle)}}</span>"</pre>
                        </div>
                @endif

                <h4 class="info-text">
                    @lang('content.pti_3')
                </h4>
                <a href="{{route('file')}}" class="btn btn-light btn-send">@lang('content.Actions with files')</a>

            </div>
        </div>
    </div>
@endsection