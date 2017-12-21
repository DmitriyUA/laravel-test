@extends('layouts.main')

@section('content')
    <div class="container content">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if (!isset($input_string))
                    <form method="POST" action="/php">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="imass" class="text-label">Введите строку чисел и(или) букв через пробел, запятую или через точку </label>
                            <input type="text" class="form-control input-field" name="imass" id="imass" required>
                        </div>
                        <button type="submit" class="btn btn-light btn-send">Submit</button>
                    </form>
                @endif
                @if (isset($input_string))
                    <!-- Entered data -->
                    <h3 class="text-center">Entered data</h3>
                    <div class="entered-data alert alert-info">
                        "{{$input_string}}"
                    </div>

                    <!-- Convertion to an array -->
                    <h3 class="text-center">Convertion to an array</h3>
                    <div class="alert alert-light">
                        <span class="sf-dump-note">array:{{count($convert_to_mass)}} [</span></br>
                        @foreach($convert_to_mass as $key => $value)
                            <pre class="conv-to-mass"><span class="sf-dump-index">   {{$key}}</span> => "<span class="sf-dump-str">{{$value}}</span>"</pre>
                        @endforeach
                        <span class="sf-dump-note">]</span>
                    </div>

                    <!-- Array sorting -->
                    <h3 class="text-center">Array sorting</h3>
                    <div class="alert alert-light">
                        <span class="sf-dump-note">array:{{count($array_sort)}} [</span></br>
                        @foreach($array_sort as $key => $value)
                            <pre class="conv-to-mass"><span class="sf-dump-index">   {{$key}}</span> => "<span class="sf-dump-str">{{$value}}</span>"</pre>
                        @endforeach
                        <span class="sf-dump-note">]</span>
                    </div>

                    <!-- Reverse array sorting -->
                    <h3 class="text-center">Reverse array sorting</h3>
                    <div class="alert alert-light">
                        <span class="sf-dump-note">array:{{count($rev_arr_sort)}} [</span></br>
                        @foreach($rev_arr_sort as $key => $value)
                            <pre class="conv-to-mass"><span class="sf-dump-index">   {{$key}}</span> => "<span class="sf-dump-str">{{$value}}</span>"</pre>
                        @endforeach
                        <span class="sf-dump-note">]</span>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection