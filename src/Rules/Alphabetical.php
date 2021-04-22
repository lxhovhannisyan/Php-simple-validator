<?php

namespace Rules;

class Alphabetical extends Rule
{
    public function isPassed($input): bool
    {
        return ctype_alpha($input);
    }
}