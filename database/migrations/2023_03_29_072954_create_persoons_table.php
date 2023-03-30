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
        Schema::create('persoons', function (Blueprint $table) {
            $table->foreignId('TypePersoonId')->constrained('type_persoons')->onDelete('cascade');
            $table->string('Voornaam');
            $table->string('Tussenvoegsel')->nullable();
            $table->string('Achternaam');
            $table->string('Roepnaam')->nullable();
            $table->boolean('IsVolwassen');
            $table->boolean('IsActief');
            $table->string('Opmerking')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persoons');
    }
};
