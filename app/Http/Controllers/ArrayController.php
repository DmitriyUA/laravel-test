<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;

class ArrayController extends Controller
{
    public function index(Request $request)
    {
        $input_string = $request->imass;
        if(isset($input_string))
        {
            //Converting to array
            $convert_to_mass = preg_split("/[\s,.]+/", $input_string);
            $array_sort = $convert_to_mass;
            $arr_shuffle = $convert_to_mass;

            //Array shuffling
            shuffle($arr_shuffle);

            //Simple sorting array
            sort($array_sort);

            //Array reverse
            $rev_arr_sort = array_reverse($array_sort);

            //First element of the array
            $first_elem = $convert_to_mass[0];

            //Last element of the array
            $last_elem = $convert_to_mass[count($convert_to_mass)-1];

            //Swap the keys and values
            $arr_flip = array_flip($convert_to_mass);
        }
        return view('app.php', [
            'input_string' => $input_string,
            'convert_to_mass' => $convert_to_mass,
            'array_sort' => $array_sort,
            'rev_arr_sort' => $rev_arr_sort,
            'arr_shuffle' => $arr_shuffle,
            'first_elem' => $first_elem,
            'last_elem' => $last_elem,
            'arr_flip' => $arr_flip
        ]);
    }
}