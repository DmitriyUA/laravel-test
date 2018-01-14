<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function saveFileContent()
    {
        file_put_contents('/OSPanel/domains/skills/public/test.txt', request()->file_content);
        return redirect()->back();
    }
}
