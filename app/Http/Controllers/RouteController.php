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
        $users = User::all();
        return view('app.php_mysql', [
            'users' => $users
        ]);
    }

    public function html_css()
    {
        return view('app.html_css');
    }

    public function javascript_ajax()
    {
        return view('app.javascript_ajax');
    }
}
