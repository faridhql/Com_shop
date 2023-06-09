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
        Schema::create('products', function (Blueprint $table) {
            $table->id('idProduct');
            $table->string('category');
            $table->string('name');
            $table->string('price');
            $table->string('stock');
            $table->string('image');
            $table->timestamps();
            $table->softDeletes();
            
            // $table->foreign('idProduct')->references('idDetailTransaction')->on('detail__transaksi');
            // $table->foreign('idProduct')->references('idDetailTransaction')->on('detail_transaction');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
