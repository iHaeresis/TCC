<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function(Blueprint $table){
            $table->increments('id');
            //$table->string('slug');
            $table->string('aluno_nome');
            $table->string('aluno_sobrenome');
            $table->longtext('aluno_descricao1');
            $table->longtext('aluno_descricao2');
            $table->varchar('aluno_email');
            $table->varchar('aluno_pai');
            $table->varchar('aluno_mae');
            $table->varchar('aluno_genero');
            $table->date('aluno_nascimento');
            $table->string('image_path');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
