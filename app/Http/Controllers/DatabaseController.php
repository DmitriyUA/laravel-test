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

    public function edit_user()
    {
        $user = User::find(request()->id);
        return view('app.edit_user', [
            'user' => $user
        ]);
    }

    public function update_user()
    {
        User::find(request()->id)->update(
            [
                'name' => request('name'),
                'surname' => request('surname'),
                'age' => request('age')
            ]
        );
        return redirect()->route('php_mysql');
    }
}
