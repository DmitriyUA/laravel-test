<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\ValidateUsers;
use Illuminate\Http\Request;
use App\User;


class DatabaseController extends Controller
{
    public function index(ValidateUsers $request)
    {
        User::create([
            'name' => request('name'),
            'surname' => request('surname'),
            'age' => request('age')
        ]);

        $users = User::all();

        return view('app.php_mysql', [
            'users' => $users
        ]);
    }
    public function delete_user(Request $request)
    {
        User::find($request->id)->delete();
        return redirect()->back();
    }

    public function truncate()
    {
        DB::table('users')->truncate();
        return redirect()->back();
    }
}
