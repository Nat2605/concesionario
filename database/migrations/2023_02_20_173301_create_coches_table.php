<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coches', function (Blueprint $table) {
            $table->id();
            $table->string("modelo", 50);
            $table->integer('velocidad_max');
            $table->string('carburante', 50)->nullable(true);
            $table->string("descripcion", 255)->nullable(true);
            $table->foreignId('marca_id')->nullable(true)->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('coches', function (Blueprint $table) {
            $table->dropColumn('descripcion');
        });
    }
};
