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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('vanId');
            $table->unsignedBigInteger('driverId');
            $table->string('departureTime');
            $table->string('arrivalTime');
            $table->string('destination');
            $table->string('placeOfOrigin');
            $table->decimal('price:0,2');
            $table->string('status')->default(1)->comment('2 delayed,1 ontime, 0 cancelled');
            $table->timestamps();

            $table->foreign('vanId')->references('id')->on('vans')->onDelete('cascade');
            $table->foreign('driverId')->references('id')->on('drivers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
