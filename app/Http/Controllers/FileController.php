<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function saveFileContent()
    {
        file_put_contents('/OSPanel/domains/skills/public/files/test.txt', request()->file_content);
        return redirect()->back();
    }

    public function createFile()
    {
        file_put_contents('/OSPanel/domains/skills/public/files/'.request()->file_name.'.txt', '');
        $files = scandir('/OSPanel/domains/skills/public/files/');
        unset($files[0]);
        unset($files[1]);
        return redirect()->back();
    }

    public function deleteFile()
    {
        unlink('/OSPanel/domains/skills/public/files/'.request()->file_name);
        return redirect()->route('file');
    }
}
