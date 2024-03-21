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
        Schema::create('off78', function (Blueprint $table) {
            $table->id();
            $table->string("libelle");
            $table->text("description");
            $table->string("salaire")->nullable();
            $table->string("adresse")->nullable()->default("Abidjan");
            $table->integer("idsecteur")->nullable();
            $table->integer("identreprise")->nullable();
            $table->string("type")->default("cdd");
            $table->datetime("date_cloture")->default(now())->nullable();
            $table->string("image")->nullable();
            $table->string("status")->default("publier");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres');
    }
};
