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
        Schema::create('_product', function (Blueprint $table) {
            $table->id('idProduct');
            $table->string('Category');
            $table->string('name');
            $table->string('Price');
            $table->string('Stock');
            $table->string('Image',255);
            $table->timestamps();
            $table->foreign('idProduct')->references('idDetailTransaction')->on('_detail_transaction');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_product');
    }
};
