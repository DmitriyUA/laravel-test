<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DatabaseController extends Controller
{
    public function index(Request $request)
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
}
