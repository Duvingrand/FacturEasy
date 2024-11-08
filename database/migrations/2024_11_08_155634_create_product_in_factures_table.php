<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_in_factures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');   // Debe ser unsignedBigInteger
            $table->unsignedBigInteger('product_id');  // Debe ser unsignedBigInteger
            $table->unsignedBigInteger('facture_id');  // Debe ser unsignedBigInteger
            $table->integer('quantity');  // Está bien usar integer aquí
            $table->timestamps();

            // Definir las claves foráneas
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('facture_id')->references('id')->on('factures')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_in_factures');
    }
};