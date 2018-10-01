<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LangController extends Controller
{
    public function index($lang){
        if (array_key_exists($lang, Config::get('lang'))) {
            Session::put('applocale', $lang);
        }
        return back();
    }
}
