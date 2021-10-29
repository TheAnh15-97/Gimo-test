<?php

namespace App\Services\Validation\Rules;

use App\Services\Validation\Interfaces\RuleInterface;

class MinRule implements RuleInterface
{
    protected $min;

    public function __construct(int $min)
    {
        $this->min = $min;
    }

    public function passes(string $attribute, $value): bool
    {
        return (int) $value >= $this->min;
    }

    public function message(string $attribute, $value): string
    {
        return $attribute.' must be greater than or equal '.$this->min;
    }
}