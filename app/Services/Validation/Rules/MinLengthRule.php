<?php

namespace App\Services\Validation\Rules;

use App\Services\Validation\Interfaces\RuleInterface;

class MinLengthRule implements RuleInterface
{
    protected $minLength;

    public function __construct(int $minLength)
    {
        $this->minLength = $minLength;
    }

    public function passes(string $attribute, $value): bool
    {
        if (is_string($value)) {
            return strlen($value) >= $this->minLength;
        }

        if (is_array($value)) {
            return count($value) >= $this->minLength;
        }

        return false;
    }

    public function message(string $attribute, $value): string
    {
        return is_array($value)
            ? $attribute.' must has at least '.$this->minLength.' items'
            : $attribute.' must contains at least '.$this->minLength. ' characters';
    }
}