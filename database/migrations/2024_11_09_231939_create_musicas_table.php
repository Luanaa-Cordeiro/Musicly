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
        Schema::create('musicas', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // nome VARCHAR(45)
            $table->foreignId('id_artista')->constrained('artistas')->onDelete('cascade')->onUpdate('no action'); // chave estrangeira para artistas
            $table->foreignId('id_album')->constrained('albums')->onDelete('cascade')->onUpdate('no action'); // chave estrangeira para albums
            $table->foreignId('id_genero')->constrained('generos')->onDelete('cascade')->onUpdate('no action'); // chave estrangeira para generos
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musicas');
    }
};
