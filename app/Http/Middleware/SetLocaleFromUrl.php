<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;

class SetLocaleFromUrl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1);

        // Список доступных языков
        $availableLocales = ['ru', 'ro', 'en'];

        if (in_array($locale, $availableLocales)) {
            App::setLocale($locale);
        } else {
            // Если сегмента нет, ставим язык по умолчанию
            App::setLocale(config('app.locale'));
        }

        return $next($request);
    }
}
