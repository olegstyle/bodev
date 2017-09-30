<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Lang;

/**
 * Class LanguageSet
 * @package App\Http\Middleware
 *
 * @author Oleh Borysenko <oleg.borisenko@morefromit.com>
 */
class LanguageSet
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
        $locale = strtolower(!empty($_COOKIE['lang']) ? $_COOKIE['lang'] : '');
        if ($locale != 'ru' && $locale != 'en') {
            if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
                $locale = (substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
                if ($locale == 'ua' || $locale == 'ru') {
                    $locale = 'ru';
                } else {
                    $locale = 'en';
                }
            } else {
                $locale = 'en';
            }
        }
        Lang::setLocale($locale);
        return $next($request);
    }
}
