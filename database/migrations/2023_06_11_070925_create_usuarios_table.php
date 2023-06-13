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
        Schema::create('usuarios', function (Blueprint $table) {

            $table->bigIncrements('id')->unsigned();
            $table->string('nome', 50);
            $table->string('email')->unique();
            $table->unsignedBigInteger('cidadeId', );
            $table->foreign('cidadeId')->references('id')->on('cidades');
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
        Schema::dropIfExists('usuarios');
    }
};