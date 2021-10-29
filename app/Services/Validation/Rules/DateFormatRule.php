<?php

namespace App\Services\Validation\Rules;

use App\Services\Validation\Interfaces\RuleInterface;
use DateTime;

class DateFormatRule implements RuleInterface
{
    protected $format;

    public function __construct(string $format)
    {
        $this->format = $format;
    }

    public function passes(string $attribute, $value): bool
    {
        if (! is_string($value) && ! is_numeric($value)) {
            return false;
        }

        $date = DateTime::createFromFormat('!'.$this->format, $value);

        return $date && $date->format($this->format) == $value;
    }

    public function message(string $attribute, $value): string
    {
        return $attribute.' has invalid date format';
    }
}