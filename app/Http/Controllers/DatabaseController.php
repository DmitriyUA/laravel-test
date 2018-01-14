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
            \Session::flash(
                'successful-addition',
                __('content.User')
                . ' "'
                . request('name')
                . '" '
                .__('content.has been added successful!')
            );
        }

        $users = User::paginate(10);
        return view('app.mysql', [
            'users' => $users
        ]);
    }

    //Remove user(s)
    public function deleteUser(Request $request)
    {
        if (isset(request()->group_delete))
        {
         User::destroy(request()->group_delete);
         \Session::flash(
             'successful-delete-group',
             __('content.Users group has been deleted successful!')
         );
         return redirect()->route('php_mysql');
        }
        else
        {
            if (isset(request()->id))
            {
                $id = $request->id;
                $user = User::find($id);
                $name = $user->name;
                $user->delete();
                \Session::flash(
                    'successful-delete',
                    __('content.User')
                    . ' "'
                    . $name
                    . '" '
                    . __('content.has been deleted successful!')
                );
                return redirect()->route('php_mysql');
            }
        }
    }

    //Clearing the table
    public function truncate()
    {
        DB::table('users')->truncate();
        \Session::forget('loaded');
        \Session::flash(
            'successful-truncate',
            __('content.All records have been successfully deleted!')
        );
        return redirect()->route('php_mysql');
    }

    //Edit user
    public function editUser()
    {
        $user = User::find(request()->id);
        return view('app.edit_user', [
            'user' => $user
        ]);
    }


    public function updateUser()
    {
        $id = request()->id;
        User::find($id)->update(
            [
                'name' => request('name'),
                'surname' => request('surname'),
                'age' => request('age')
            ]
        );
        \Session::flash(
            'successful-update',
            __('content.User')
            . ' "'
            . request()->name
            . '" '
            . __('content.has been updated successful!')
        );
        return redirect()->route('php_mysql');

    }

    public function search()
    {
		if(isset(request()->search))
		{
			$users = User::where('name', 'like', '%' . request()->search . '%')
				->orWhere('surname', 'like', '%' . request()->search . '%')
				->orWhere('age', 'like', '%' . request()->search . '%')
				->paginate(10);
			$users->appends(['search' => request()->search])->links();
			\Session::flash(
			    'found',
                '1'
            );
			return view('app.mysql', [
				'users' => $users,
				'query' => request()->search
        ]);	
		}
		else
			return redirect()->back();
    }

    //Loading test Data
    public function loadInitData()
    {
        Artisan::call('db:seed');
        \Session::flash(
            'successful-load',
            __('content.test data was loaded successfully!!!')
        );
        return redirect()->back();
    }

}
