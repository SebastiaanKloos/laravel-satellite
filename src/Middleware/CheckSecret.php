<?php

namespace SebastiaanKloos\LaravelSatellite\Middleware;

use Closure;

class CheckSecret
{
    public function handle($request, Closure $next)
    {
        if ($request->input('secret') !== config('satellite.secret')) {
            return abort(403, 'Wrong secret');
        }

        return $next($request);
    }
}
