<?php

namespace SebastiaanKloos\LaravelSatellite\Checks;

use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Result;

class DebugCheck extends Check
{
    public function run(): Result
    {
        return Result::make()->ok(config('app.debug') ? 'true' : 'false');
    }
}
