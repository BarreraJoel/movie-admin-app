<?php

namespace App\Services;

use Illuminate\Support\Facades\Request;

class FileService
{
    public static function upload(
        $request,
        string $image_name,
        string $name,
        string $path,
    ) {
        return $request
            ->file($image_name)
            ->storeAs($path, $name, 'public');
    }
}
