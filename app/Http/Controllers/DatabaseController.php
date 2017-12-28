<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ValidateUsers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;


class DatabaseController extends Controller
{

    public function load_init_data()
    {
        Artisan::call('db:seed');
        return redirect()->back();
    }

    public function index(ValidateUsers $request)
    {
        if (request()->has(['name', 'surname', 'age'])) {
            User::create([
                'name' => request('name'),
                'surname' => request('surname'),
                'age' => request('age')
            ]);
        }

        $users = User::paginate(10);
        return view('app.php_mysql', [
            'users' => $users
        ]);
    }


    public function delete_user(Request $request)
    {
        //dd(request()->all());
        $user = User::find($request->id);
        $name = $user->name;
        $user->delete();
        \Session::flash('successful-delete', 'User ' . $name . ' has been deleted successful!');
        return redirect()->back();
    }

    public function truncate()
    {
        DB::table('users')->truncate();
        return redirect('/php_and_mysql');
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
        \Session::flash('successful-update', 'User ' . request()->name . ' has been updated successful!');
        return redirect()->back();

    }
}
