<?php

use Illuminate\Support\Facades\Route;

Route::get('notion-satellite', \Spatie\Health\Http\Controllers\HealthCheckJsonResultsController::class)
    ->middleware(\SebastiaanKloos\LaravelSatellite\Middleware\CheckSecret::class);
