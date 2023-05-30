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
        Schema::create('_transaksi', function (Blueprint $table) {
            $table->id('idTransaksi');
            $table->foreignId('idCustomer')->unique();
            $table->foreignId('idPayment')->unique();
            $table->foreignId('idEmployee')->unique();
            $table->date('date');
            $table->string('subtotal');
            $table->timestamps();

            $table->foreign('idEmployee')->references('idEmployee')->on('_employee');
            $table->foreign('idCustomer')->references('idCustomer')->on('_customer');
            $table->foreign('idPayment')->references('idPayment')->on('_payment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_transaksi');
    }
};
