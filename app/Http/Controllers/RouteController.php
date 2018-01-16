<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect;

class RouteController extends Controller
{
    public function php()
    {
        return view('app.php');
    }

    public function mysql()
    {
        $users = User::paginate(10);

        return view('app.mysql', [
            'users' => $users
        ]);
    }

    public function ajax()
    {
        return view('app.ajax');
    }

    public function file()
    {
        $file_content = file('/OSPanel/domains/skills/public/files/test.txt');
        $repl_cont = '';
        $cont = '';
        $i = 0;
        foreach($file_content as $str) {
            $i++;
            $cont .= $str;
            $repl_cont .= '>> '. str_replace("\r\n", "<br>", $str);
        }
        $files = scandir('/OSPanel/domains/skills/public/files/');
        unset($files[0]);
        unset($files[1]);

        return view('app.file', ['file_cont' => $cont, 'repl_cont' => $repl_cont, 'files' => $files]);
    }
}
