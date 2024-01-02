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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('larga');
            $table->string('departamento',30);
            $table->string('provincia',30);
            $table->string('distrito',30);
            $table->double('latitud',7);
            $table->double('longitud',7);
            $table->unsignedBigInteger('equation_id')->unique();
            $table->foreign('equation_id')->references('id')->on('equations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
