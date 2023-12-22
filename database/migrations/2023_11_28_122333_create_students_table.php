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
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->string('dni')->unique();
            $table->string('locate_expe_dni');
            $table->string('email')->unique();
            
            $table->integer('type_dni');
            // Donde:
            // 1: Cedula de ciudadania
            // 2: Targeta de identidad
            // 3: Pasaporte
            // 4: Cedula extrangera

            $table->string('name');
            $table->string('phone');
            $table->string('address');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
