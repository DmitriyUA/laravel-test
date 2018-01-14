<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;

class PhpController extends Controller
{
    public function arr(Request $request)
    {
        $input_arr = $request->imass;
        if(isset($input_arr))
        {
            //Converting to array
            $convert_to_mass = preg_split("/[\s,.]+/", $input_arr);
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
            'input_arr' => $input_arr,
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