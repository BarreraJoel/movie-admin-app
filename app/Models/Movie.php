<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        "name",
        "description",
        "image_url",
        "duration",
        "price"
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
