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
        Schema::create('lavages', function (Blueprint $table) {
            $table->id();
            $table->string('numero_immatriculation');
            $table->string('automobile');
            $table->string('nom_proprietaire');
            $table->integer('telephone');
            $table->date('date_depot');
            $table->time('heure');
            $table->integer('montant');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lavages');
    }
};
