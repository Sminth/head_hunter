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
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->string("noms");
            $table->string("date_naissance")->nullable();
            $table->string("lieu_naissance")->nullable();
            $table->string("genre")->nullable();
            $table->string("sm")->default("celibataire");
            $table->string("profession")->nullable();
            $table->string("contact")->nullable();
            $table->string("email")->nullable();
            $table->string("password")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidats');
    }
};
