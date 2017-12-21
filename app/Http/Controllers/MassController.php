<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;

class MassController extends Controller
{
    public function index(Request $request)
    {
        $input_string = $request->imass;
        if(isset($input_string))
        {
            $convert_to_mass = preg_split("/[\s,.]+/", $input_string);
            $array_sort = $convert_to_mass;
            sort($array_sort);
            $rev_arr_sort = array_reverse($array_sort);
        }
        return view('app.php', [
            'input_string' => $input_string,
            'convert_to_mass' => $convert_to_mass,
            'array_sort' => $array_sort,
            'rev_arr_sort' => $rev_arr_sort
        ]);
    }
}