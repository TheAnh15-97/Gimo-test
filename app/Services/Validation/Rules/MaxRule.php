<?php

namespace App\Services\Validation\Rules;

use App\Services\Validation\Interfaces\RuleInterface;

class MaxRule implements RuleInterface
{
    protected $max;

    public function __construct(int $max)
    {
        $this->max = $max;
    }

    public function passes(string $attribute, $value): bool
    {
        return (int) $value <= $this->max;
    }

    public function message(string $attribute, $value): string
    {
        return $attribute.' must be less than or equal '.$this->max;
    }
}