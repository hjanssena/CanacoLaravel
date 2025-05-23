<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comercios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_comercio');
            $table->string('nombre_contacto');
            $table->string('telefono');
            $table->string('rfc_comercio');
            $table->string('direccion');
            $table->string('eMail');
            $table->boolean('aceptado');
            $table->boolean('rechazado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comercios');
    }
};
