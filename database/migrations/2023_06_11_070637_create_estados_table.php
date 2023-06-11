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
        Schema::create('estados', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('estado', 30);
            $table->string('UF');
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
        Schema::dropIfExists('estados');
    }
};