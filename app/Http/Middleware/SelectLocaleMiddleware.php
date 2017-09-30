<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Lang;

/**
 * Class SelectLocaleMiddleware
 * @package App\Http\Middleware
 *
 * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
 */
class SelectLocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = $request->cookie('lang', substr($request->server('HTTP_ACCEPT_LANGUAGE', 'en'), 0, 2));
        $locale = strtolower($locale);
        ;
        if ($locale == 'ua' || $locale == 'by') {
            $locale = 'ru';
        }
        if (array_search($locale, config('app.locales')) === false) {
            $locale = 'en';
        }
        Lang::setLocale($locale);
        return $next($request);
    }
}
