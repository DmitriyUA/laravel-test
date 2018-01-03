@extends('layouts.main')

@section('content')
    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h5 class="text-right text-white">Server time {{date("H:i:s")}}</h5>
                </br>
                @if (!isset($input_arr) && !isset($in_str))

                    <!--Input for Array-->
                    <form method="POST" action="{{route('array_controller')}}">
                        {{csrf_field()}}
                        <div class="form-group form-group-php">
                            <label for="imass" class="text-label text-label-php">
                                <h5>
                                    This is a page with simple actions with different data types using <b>Php</b> functions.
                                    For example, you can enter some numbers or letters in first field and click Array.
                                    Input string will be converted to an array.
                                    <hr>
                                </h5>
                                <h4>
                                        <i>Enter a string of numbers and (or) letters through the space, comma or point and click button
                                        <b>Array</b></i>
                                </h4>
                            </label>
                            <hr>
                            <input type="text" class="form-control input-field" name="imass" id="imass" required>
                        </div>
                        <button type="submit" class="btn btn-light btn-send">Array</button>
                    </form>

                    <!--Input for String-->
                    <form method="POST" action="/php/string">
                        {{csrf_field()}}
                        <div class="form-group form-group-php">
                            <label for="string" class="text-label text-label-php">
                                <h5>
                                    <hr>
                                    In the second field you can enter a string. To this data will be applied some functions for work with strings.
                                    <hr>
                                </h5>
                                <h4><i>Enter a string</i></h4>
                            </label>
                            <hr>
                            <input type="text" class="form-control input-field" name="string" id="string" required>
                        </div>
                        <button type="submit" class="btn btn-light btn-send">String</button>
                    </form>
                @endif

                <!--For Array-->
                @if (isset($input_arr))
                    <!-- Entered data -->
                    <h3 class="text-center">Entered data</h3>
                    <div class="entered-data alert alert-info">
                        <span>" </span>{{$input_arr}}<span> "</span>
                    </div>

                    <!-- Convertion to an array -->
                    <h3 class="text-center">Convertion to an array</h3>
                    <div class="alert alert-light">
                        <span class="sf-dump-note">{{gettype($convert_to_mass)}}:{{count($convert_to_mass)}} [</span></br>
                        @foreach($convert_to_mass as $key => $value)
                            <pre class="conv-to-mass"><span class="sf-dump-index">   {{$key}}</span> => "<span class="sf-dump-str">{{$value}}</span>"</pre>
                        @endforeach
                        <span class="sf-dump-note">]</span>
                    </div>

                    <!-- Array sorting -->
                    <h3 class="text-center">Array sorting</h3>
                    <div class="alert alert-light">
                        <span class="sf-dump-note">{{gettype($array_sort)}}:{{count($array_sort)}} [</span></br>
                        @foreach($array_sort as $key => $value)
                            <pre class="conv-to-mass"><span class="sf-dump-index">   {{$key}}</span> => "<span class="sf-dump-str">{{$value}}</span>"</pre>
                        @endforeach
                        <span class="sf-dump-note">]</span>
                    </div>

                    <!-- Reverse array sorting -->
                    <h3 class="text-center">Reverse array sorting</h3>
                    <div class="alert alert-light">
                        <span class="sf-dump-note">{{gettype($rev_arr_sort)}}:{{count($rev_arr_sort)}} [</span></br>
                        @foreach($rev_arr_sort as $key => $value)
                            <pre class="conv-to-mass"><span class="sf-dump-index">   {{$key}}</span> => "<span class="sf-dump-str">{{$value}}</span>"</pre>
                        @endforeach
                        <span class="sf-dump-note">]</span>
                    </div>

                    <!-- Array shuffling -->
                    <h3 class="text-center">Array shuffling</h3>
                    <div class="alert alert-light">
                        <span class="sf-dump-note">{{gettype($arr_shuffle)}}:{{count($arr_shuffle)}} [</span></br>
                        @foreach($arr_shuffle as $key => $value)
                            <pre class="conv-to-mass"><span class="sf-dump-index">   {{$key}}</span> => "<span class="sf-dump-str">{{$value}}</span>"</pre>
                        @endforeach
                        <span class="sf-dump-note">]</span>
                    </div>

                    <!-- The first element of array -->
                    <h3 class="text-center">The first element of array</h3>
                    <div class="alert alert-light">
                        <span class="sf-dump-note">first:</span></br>
                            <pre class="conv-to-mass">"<span class="sf-dump-str">{{$first_elem}}</span>"</pre>
                    </div>

                    <!-- The last element of array -->
                    <h3 class="text-center">The last element of array</h3>
                    <div class="alert alert-light">
                        <span class="sf-dump-note">last:</span></br>
                        <pre class="conv-to-mass">"<span class="sf-dump-str">{{$last_elem}}</span>"</pre>
                    </div>

                    <!-- Swap the keys and values -->
                    <h3 class="text-center">Swap the keys and values</h3>
                    <div class="alert alert-light">
                        <span class="sf-dump-note">{{gettype($arr_flip)}}:{{count($arr_flip)}} [</span></br>
                        @foreach($arr_flip as $key => $value)
                            <pre class="conv-to-mass"><span class="sf-dump-index">   {{$key}}</span> => "<span class="sf-dump-str">{{$value}}</span>"</pre>
                        @endforeach
                        <span class="sf-dump-note">]</span>
                    </div>

                    <!-- Implode mass to string -->
                        <h3 class="text-center">Combine array elements <b><i>Array shuffling</i></b> in a string</h3>
                    <div class="alert alert-light">
                        <span class="sf-dump-note">{{gettype(implode($arr_shuffle))}}:{{count(implode($arr_shuffle))}}</span></br>
                        <pre class="conv-to-mass">"<span class="sf-dump-str">{{implode($arr_shuffle)}}</span>"</pre>
                    </div>
                @endif



                <!--For String-->
                @if(isset($in_str))
                    <!-- String without spaces -->
                    <h3 class="text-center">Enter string without spaces</h3>
                    <div class="alert alert-light">
                        <pre class="conv-to-mass">"<span class="sf-dump-index">{{$in_str}}</span>"</pre>
                    </div>

                    <!-- String reverse -->
                    <h3 class="text-center">String reverse</h3>
                    <div class="alert alert-light">
                        <pre class="conv-to-mass">"<span class="sf-dump-index">{{strrev($in_str)}}</span>"</pre>
                    </div>

                    <!-- Number of characters repeats -->
                    <h3 class="text-center">Number of characters repeats</h3>
                    <div class="alert alert-light">
                        <span class="sf-dump-note">{{gettype(count_chars($in_str, 1))}}:{{count(count_chars($in_str, 1))}} [</span></br>
                        @foreach(count_chars($in_str, 1) as $key => $value)
                            <pre class="conv-to-mass"><span class="sf-dump-index">   {{chr($key)}}</span> repeated <span class="sf-dump-str">{{$value}}</span> times</pre>
                        @endforeach
                        <span class="sf-dump-note">]</span>
                    </div>

                    <!-- Split a string into fragments -->
                    <h3 class="text-center">Split a string into fragments(3 characters on fragment)</h3>
                    <div class="alert alert-light">
                        <pre><span class="sf-dump-str">{{chunk_split($in_str, 3)}}</span></pre>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection