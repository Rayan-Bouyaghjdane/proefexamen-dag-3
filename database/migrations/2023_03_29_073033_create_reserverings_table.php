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
        Schema::create('reserverings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('PersoonId')->constrained('persoons')->onDelete('cascade');
            $table->foreignId('OpeningstijdId')->constrained('openingstijds')->onDelete('cascade');
            $table->foreignId('TariefId')->constrained('tariefs')->onDelete('cascade');
            $table->foreignId('BaanId')->constrained('baans')->onDelete('cascade');
            $table->foreignId('PakketOptieId')->constrained('pakket_opties')->onDelete('cascade');
            $table->foreignId('ReserveringStatusId')->constrained('reservering_statuses')->onDelete('cascade');
            $table->integer('Reserveringsnummer');
            $table->date('Datum');
            $table->integer('AantalUren');
            $table->time('BeginTijd');
            $table->time('EindTijd');
            $table->integer('AantalVolwassenen');
            $table->integer('AantalKinderen');
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
        Schema::dropIfExists('reserverings');
    }
};
