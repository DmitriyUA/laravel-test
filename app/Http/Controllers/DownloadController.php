<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        return response()->download($_SERVER['DOCUMENT_ROOT'].'/files/'.request()->path, request()->path);
    }
}
