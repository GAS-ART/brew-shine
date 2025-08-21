<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SetLangAndViewController;

class HomeController extends SetLangAndViewController
{
    public function index($locale = null)
    {   
        return $this->setLocaleAndView($locale, 'home', []);
    }
}