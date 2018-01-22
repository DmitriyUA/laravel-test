<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function saveFileContent()
    {
        file_put_contents($_SERVER['DOCUMENT_ROOT'].'/public/files/test.txt', request()->file_content);
        return redirect()->back();
    }

    public function createFile()
    {
        if(isset(request()->file_name)){
            file_put_contents($_SERVER['DOCUMENT_ROOT'].'/public/files/' . request()->file_name . '.txt', '');
            $files = scandir($_SERVER['DOCUMENT_ROOT'].'/public/files/');
            unset($files[0]);
            unset($files[1]);
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function deleteFile()
    {
        unlink($_SERVER['DOCUMENT_ROOT'].'/public/files/'.request()->file_name);
        return redirect()->route('file');
    }
}
