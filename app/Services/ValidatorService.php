<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;

class ValidatorService
{

    public static function validate(
        array $data,
        array $rules,
        string $routeRedirect,
    ) {
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return redirect()->route($routeRedirect)
                ->withInput()
                ->withErrors($validator);
        }
    }
}
