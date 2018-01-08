<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function change_locale()
    {
        $current_locale = App::getLocale();
        if($current_locale == 'en')
        {
            Session::put('change_lang', 'ru');
        }
        else
            Session::put('change_lang', 'en');

        return redirect()->back();

    }
}
