<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInFacture extends Model
{
    use HasFactory; // Asegúrate de tener esto

    protected $table = 'product_in_factures';

    protected $fillable = [
        'client_id',
        'product_id',
        "facture_id",
        'quantity',
    ];

     // Relación con el modelo Client
     public function client()
     {
         return $this->belongsTo(Client::class, 'client_id');
     }

     // Relación con el modelo Product
     public function product()
     {
         return $this->belongsTo(Product::class, 'product_id');
     }

     // Relación con el modelo Factura
     public function facture()
     {
         return $this->belongsTo(Facture::class, 'facture_id');
     }
}
