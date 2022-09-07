<?php

namespace SebastiaanKloos\LaravelSatellite\Checks;

use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Result;

class EnvironmentCheck extends Check
{
    public function run(): Result
    {
        return Result::make()->ok(app()->environment());
    }
}
