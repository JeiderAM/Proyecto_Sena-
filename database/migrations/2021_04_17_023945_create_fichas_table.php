<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha'); 
            $table->string('nombre_elemento');
            $table->integer('codigo');
            $table->integer('valor_estimado');
            $table->string('condiciones')->nullable;
            $table->string('accesorios')->nullable;
            $table->enum('estado', [1, 2])->default(1);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('centro_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('centro_id')->references('id')->on('centros');
           

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
        Schema::dropIfExists('fichas');
    }
}
