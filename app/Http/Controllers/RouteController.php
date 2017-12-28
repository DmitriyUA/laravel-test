<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RouteController extends Controller
{
    public function php()
    {
        return view('app.php');
    }

    public function php_mysql()
    {
        $users = User::paginate(10);
        return view('app.php_mysql', [
            'users' => $users
        ]);
    }

    public function javascript_ajax()
    {
        return view('app.javascript_ajax');
    }
}
