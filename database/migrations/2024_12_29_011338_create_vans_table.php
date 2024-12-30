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
        Schema::create('vans', function (Blueprint $table) {
        
            $table->id();
            $table->string('type');
            $table->string('model')->nullable();
            $table->string('color')->nullable();
            $table->string('capacity')->nullable();
            $table->string('plateNumber');
            $table->string('status')->default(1)->comment('1 active, 0 inactive');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vans');
    }
};
