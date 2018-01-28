<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect;
use Session;
use Config;
use App;

class LanguageController extends Controller
{
    public function set_lang (Request $request, $lang) {
        switch($lang){
            case 'en':
                App::setLocale('en');
                Session::put('locale', App::getLocale());
                break;
            case 'tw':
                App::setLocale('tw');
                Session::put('locale', App::getLocale());
                break;
            default:
                App::setLocale(config('app.fallback_locale'));
                Session::put('locale', App::getLocale());
                break;
        }
                return Redirect::back();
        }
}
