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
            $table->string('escola_cep')->nullable();
                $table->string('escola_rua')->nullable();
                $table->string('escola_numero')->nullable();
                $table->string('escola_bairro')->nullable();
            $table->integer('escola_telefone')->nullable();
            $table->string('escola_email')->nullable();
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
