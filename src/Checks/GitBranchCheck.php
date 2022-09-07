<?php

namespace SebastiaanKloos\LaravelSatellite\Checks;

use Spatie\Health\Checks\Check;
use Spatie\Health\Checks\Result;

class GitBranchCheck extends Check
{
    protected ?string $label = 'Git branch';

    public function run(): Result
    {
        $result = Result::make();

        $result->ok(trim(shell_exec('git rev-parse --abbrev-ref HEAD')));

        return $result;
    }
}
