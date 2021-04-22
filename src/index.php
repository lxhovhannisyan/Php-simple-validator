<?php

use Rules\Alphabetical;
use Rules\Numeric;
use Rules\Required;

require_once '../vendor/autoload.php';

$attributes = ['name' => '', 'age' => 'gf'];

$rules = [
    'name' => [new Required, new Alphabetical],
    'age' => [new Required, new Numeric],
];

$validator = Validator::make($rules, $attributes);

print_r($validator->getErrors());