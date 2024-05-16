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
        Schema::create('table_accepted_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('shopid');
            $table->string('booking_id')->nullable();
            $table->string('firstname')->nullable();   
            $table->string('lastname')->nullable();   
            $table->string('contact')->nullable();   
            $table->string('address')->nullable();   
            $table->string('cartype')->nullable();   
            $table->string('model')->nullable();   
            $table->string('carissues')->nullable();   
            $table->string('longitude')->nullable();   
            $table->string('latitude')->nullable();   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_accepted_orders');
    }
};
