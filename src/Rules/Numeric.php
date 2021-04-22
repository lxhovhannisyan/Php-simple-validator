<?php

namespace Rules;

class Numeric extends Rule
{
    public function isPassed($input): bool
    {
        return is_numeric($input);
    }
}