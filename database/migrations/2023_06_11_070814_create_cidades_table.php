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
        Schema::create('cidades', function (Blueprint $table) {

            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('estadoId');
            $table->foreign('estadoId')->references('id')->on('estados');
            $table->string('cidade', 30);
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
        Schema::dropIfExists('cidades');
    }
};