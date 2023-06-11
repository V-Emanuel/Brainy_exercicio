<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('usuarioHobbies', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('usuarioId');
            $table->foreign('usuarioId')->references('id')->on('usuarios');
            $table->unsignedBigInteger('hobbieId');
            $table->foreign('hobbieId')->references('id')->on('hobbies');
            $table->timestamps();
        });
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarioHobbies');
    }
};