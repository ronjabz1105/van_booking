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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tripId');
            $table->unsignedBigInteger('userId');
            $table->integer('numberOfPassenger')->default(1);
            $table->string('passengerName')->nullable();
            $table->string('passengerEmail')->nullable();
            $table->string('passengerPhoneNumber')->nullable();
            $table->timestamps();
            $table->string('status')->default(1)->comment('1 active, 0 cancelled');
            $table->string('paymentStatus')->default(0)->comment('1 paid, 0 unpaid');
            $table->foreign('tripId')->references('id')->on('trips')->onDelete('cascade');
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
