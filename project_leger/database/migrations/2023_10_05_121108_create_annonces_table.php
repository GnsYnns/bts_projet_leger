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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('titre_annonce', 50);
            $table->text('description');
            $table->decimal('prix_nuit', 10, 2);
            $table->string('adresse', 100);
            $table->string('localisation', 50);
            $table->integer('nb_chambres');
            $table->integer('nb_SdB');
            $table->integer('capacite');
            $table->string('type', 50);
            $table->unsignedBigInteger('id_utilisateur');
            $table->foreign('id_utilisateur')->references('id')->on('utilisateurs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
    }
};
