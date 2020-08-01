<?php

namespace App\Http\Middleware;

use App;
use App\Enums\Locale;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Session;

class SetLocaleMiddleware
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
        $locale = $request->get('lang') ?: Session::get('lang') ?: $this->getPreferredLocale($request) ?: Locale::app();

        if (!$this->isAllowed($locale)) {
            return $next($request);
        }

        if ($locale) {
            App::setLocale($locale);
            Carbon::setLocale($locale);
            Session::put('lang', $locale);
        }

        return $next($request);
    }

    private function getPreferredLocale(Request $request)
    {
        return $request->getPreferredLanguage(Locale::allowed());
    }

    private function isAllowed($locale)
    {
        return in_array($locale, Locale::allowed());
    }
}
