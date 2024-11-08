<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; // Asegúrate de tener esto

    protected $table = 'products';

    protected $fillable = [
        'name',
        'kindOfproduct_id',
        "price",
        
    ];

     // Relación con el modelo KindOfProduct
     public function kindOfProduct()
     {
         return $this->belongsTo(KindProduct::class, 'kindOfproduct_id');
     }
}
