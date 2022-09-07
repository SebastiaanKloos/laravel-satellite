<?php

namespace SebastiaanKloos\LaravelSatellite\Checks;

use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Result;

class PhpCheck extends Check
{
    protected ?string $label = 'PHP version';

    public function run(): Result
    {
        $result = Result::make();

        $result->ok(phpversion());

        return $result;
    }
}
