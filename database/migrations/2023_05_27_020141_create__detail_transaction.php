<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_detail_transaction', function (Blueprint $table) {
            $table->id('idDetailTransaction');
            $table->unsignedBigInteger('idTransaction')->unique();
            $table->integer('idProduct')->unique();
            $table->string('DetailPrice')->unique();
            $table->string('Quantity');
            $table->timestamps();

            $table->foreign('idTransaction')->references('idtransaksi')->on('_transaksi');
            // $table->foreign('idDetailTransaction')->references('idProduct')->on('_product');
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_detail_transaction');
    }
};
