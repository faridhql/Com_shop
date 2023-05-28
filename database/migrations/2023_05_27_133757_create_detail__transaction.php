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
        Schema::create('detail_transaction', function (Blueprint $table) {
            $table->id('idDetailTransaction');
            $table->unsignedBigInteger('idTransaksi')->unique();
            $table->integer('idProduct')->unique();
            $table->string('detailPrice');
            $table->string('quantity');

            $table->timestamps();
            $table->foreign('idTransaksi')->references('idTransaksi')->on('_transaksi');
            $table->foreign('idDetailTransaction')->references('idProduct')->on('product');

            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaction');
    }
};
