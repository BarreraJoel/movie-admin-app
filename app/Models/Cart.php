<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $idItems = [];
    public $total = 0;

    public function __construct() {}
}
