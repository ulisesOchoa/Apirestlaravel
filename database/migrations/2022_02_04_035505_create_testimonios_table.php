<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonios', function (Blueprint $table) {
            $table->increments('tetimonials_id')->nullable();
            $table->longText('txTituloTestimonials')->nullable()->comment('titulo del testimonio');
            $table->longText('txContenidoTestimonials')->nullable()->comment('contenido del testimonio');
            $table->string('txColorTestimonials')->nullable()->comment('color del testimonio');
            $table->boolean('txBanerTestimonials')->nullable()->comment('baner del testimonio');
            $table->unsignedInteger('idUsuario_usuario_id')->nullable()->comment('id usuario');

            $table->foreign('idUsuario_usuario_id')->references('usuario_id')->on('usuarios')->onDelete('cascade');

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
        Schema::dropIfExists('testimonios');
    }
}
