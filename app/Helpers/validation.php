<?php

use Illuminate\Support\Facades\Validator;

function validate(mixed $input, mixed $rules): bool
{
    if (! is_array($input)) {
        $input = [ 'default' => $input ];
    }

    if (! is_array($rules)) {
        $rules = [ 'default' => $rules ];
    }

    return Validator::make($input, $rules)->passes();
}
