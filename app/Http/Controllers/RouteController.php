<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function php()
    {
        return view('app.php');
    }

    public function php_mysql()
    {
        return view('app.php_mysql');
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
