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

    //Create new User
    public function index(ValidateUsers $request)
    {
        if (request()->has(['name', 'surname', 'age'])) {
            User::create([
                'name' => request('name'),
                'surname' => request('surname'),
                'age' => request('age')
            ]);
            \Session::flash('successful-addition', 'User "' . request('name') . '" has been added successful!');
        }

        $users = User::paginate(10);
        return view('app.php_mysql', [
            'users' => $users
        ]);
    }

    //Loading init Data
    public function load_init_data()
    {
        Artisan::call('db:seed');
        \Session::put('loaded', 1);
        return redirect()->back();
    }

    //Remove user(s)
    public function delete_user(Request $request)
    {
        if (isset(request()->group_delete))
        {
         User::destroy(request()->group_delete);
         \Session::flash('successful-delete-group', 'Users group has been deleted successful!');
         return redirect('/php_and_mysql');
        }
        else
        {
            if (isset(request()->id))
            {
                $id = $request->id;
                $user = User::find($id);
                $name = $user->name;
                $user->delete();
                \Session::flash('successful-delete', 'User "' . $name . '" has been deleted successful!');
                return redirect('/php_and_mysql');
            }
        }
    }

    //Clearing the table
    public function truncate()
    {
        DB::table('users')->truncate();
        \Session::forget('loaded');
        \Session::flash('successful-truncate', 'All records have been successfully deleted!');
        return redirect('/php_and_mysql');
    }

    //Edit user
    public function edit_user()
    {
        $user = User::find(request()->id);
        return view('app.edit_user', [
            'user' => $user
        ]);
    }


    public function update_user()
    {
        $id = request()->id;
        User::find($id)->update(
            [
                'name' => request('name'),
                'surname' => request('surname'),
                'age' => request('age')
            ]
        );
        \Session::flash('successful-update', 'User "' . request()->name . '" has been updated successful!');
        return redirect('/php_and_mysql');

    }

    public function search()
    {
        $users = User::where('name', 'like', '%' . request()->search . '%')
            ->orWhere('surname', 'like', '%' . request()->search . '%')
            ->orWhere('age', 'like', '%' . request()->search . '%')
            ->paginate(10);
        return view('app.php_mysql', [
            'users' => $users,
            'query' => request()->search
        ]);
    }
}
