<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KindProduct extends Model
{
    use HasFactory; // Asegúrate de tener esto

    protected $table = 'kind_of_products';

    protected $fillable = [
        'name',
    ];
}
