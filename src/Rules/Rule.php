<?php

namespace Rules;

use Rules\Interfaces\RuleInterface;

abstract class Rule implements RuleInterface
{
    public function message(string $attribute): string
    {
        $rule = strtolower(basename(static::class));
        return sprintf('The attribute %s must be %s.', $attribute, $rule);
    }
}