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
        Schema::create('mecanicos', function (Blueprint $table) {
            $table->id();

            $table->string('nombre',45)->nullable(); //El campo puede ser nulo
            $table->string('apellido',45)->nullable(); //El campo puede ser nulo
            $table->integer('celular');
            $table->foreignid('Id_Cliente')->constrained('clientes');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mecanicos');
    }
};
