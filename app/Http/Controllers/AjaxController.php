<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class AjaxController extends Controller
{
    public function load_data()
    {
        if (request()->ajax())
        {
            $users = User::paginate(10);
            return view('app.ajax-paginate', ['users' => $users])->render();
            //return response()->json(['users' => $users], 200);
        }
    }

    public function create_ajax()
    {
        User::create([
            'name' => request('name'),
            'surname' => request('surname'),
            'age' => request('age')
        ]);
        $users = User::paginate(10);
        return response()->json(['msg' => 'User has been created successful', 'users' => $users], 200);
    }
}
