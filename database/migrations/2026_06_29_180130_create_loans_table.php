<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            
            // Guardamos el ID del usuario como un número entero normal.
            // Así guardas el dato, cumples con la lógica y MySQL NO se traba.
            $table->unsignedBigInteger('user_id'); 
            
            // Esta sí la dejamos conectada a libros porque ya vimos que funciona
            $table->foreignId('book_id')->constrained('libros')->onDelete('cascade');
            
            $table->date('loan_date');
            $table->date('return_date')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
