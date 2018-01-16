<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatetrabajadoresTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50)->nullable(false);
            $table->string('apellido', 50)->nullable(false);
            $table->string('cedula', 50)->nullable(false)->unique();
            $table->string('cargo', 50)->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('activo', 2)->nullable(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('trabajadores');
    }
}
