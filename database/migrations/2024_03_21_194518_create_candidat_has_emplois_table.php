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
        Schema::create('candidat_has_emplois', function (Blueprint $table) {
            $table->id();
            $table->integer("idcandidat")->nullable();
            $table->integer("idoffre")->nullable();
            $table->string("status")->default("analyse");
            $table->string("score")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidat_has_emplois');
    }
};
