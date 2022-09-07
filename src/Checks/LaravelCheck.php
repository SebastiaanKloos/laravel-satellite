<?php

namespace SebastiaanKloos\LaravelSatellite\Checks;

use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Result;

class LaravelCheck extends Check
{
    protected ?string $label = 'Laravel version';

    public function run(): Result
    {
        $result = Result::make();

        $result->ok(app()->version());

        return $result;
    }
}
