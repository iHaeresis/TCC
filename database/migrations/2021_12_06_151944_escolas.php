<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Escolas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolas', function (Blueprint $table){
            $table->increments('id');
            $table->string('escola_nome');
            $table->string('escola_cep');
                $table->string('escola_rua');
                $table->string('escola_numero');
                $table->string('escola_bairro');
            $table->integer('escola_telefone');
            $table->string('escola_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
