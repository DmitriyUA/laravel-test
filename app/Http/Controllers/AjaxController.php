<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class AjaxController extends Controller
{
    public function load_data()
    {
        if (isset(request()->query_to_db))
        {
            $users = DB::select(request()->query_to_db);
        }
        return response()->json(['users' => $users], 200);
    }

    public function create_ajax()
    {
        return response()->json(['msg' => 'test'], 200);
    }
}
