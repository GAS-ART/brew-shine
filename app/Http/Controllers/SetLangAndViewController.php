<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;

class SetLangAndViewController extends Controller
{
    protected function setLocaleAndView($locale, $view, $data = [])
    {
        if ($view === 'home') {
            switch ($locale) {
                case 'ru':
                    App::setLocale('ru');
                    return view('home', $data);
                case 'ro':
                    App::setLocale('ro');
                    return redirect('/');
                case 'en':
                    App::setLocale('en');
                    return view('home', $data);
                case null:
                    App::setLocale('ro');
                    return view('home', $data);
            }
        }
        if (!in_array($locale, ['ro', 'ru', 'en'])) {
            abort(404);
        }
        App::setLocale($locale);
        return empty($data) ? view($view) : view($view, $data);
    }
}
