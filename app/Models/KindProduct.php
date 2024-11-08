<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KindProduct extends Model
{
    protected $table = 'kind_of_products';

    protected $fillable = [
        'name',
    ];
}
