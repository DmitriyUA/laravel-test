<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class AjaxController extends Controller
{
    public function loadData()
    {
        if (request()->ajax()) {
            $users = User::paginate(10);
            return view('app.ajax-paginate', ['users' => $users])->render();
            //return response()->json(['users' => $users], 200);
        }
    }

    public function createAjax()
    {
        User::create([
            'name' => request('name'),
            'surname' => request('surname'),
            'age' => request('age')
        ]);
        return response()->json(['msg' => __('content.User has been added successful!')], 200);
    }
}
