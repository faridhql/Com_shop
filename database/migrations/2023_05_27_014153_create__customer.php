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
        Schema::create('_customer', function (Blueprint $table) {
            $table->id('idCustomer');
            $table->string('name');
            $table->integer('phone')->unique();
            $table->string('email')->unique();
            $table->timestamps();
            $table->softDeletes();

          
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_customer');
    }
};
