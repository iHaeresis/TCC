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
            $table->bigIncrements('id');

            //$table->string('slug');
            $table->string('aluno_nome');
            $table->string('aluno_sobrenome');
            $table->string('aluno_pai')->nullable();
            $table->string('aluno_mae')->nullable();
            $table->string('aluno_genero')->nullable();
            $table->date('aluno_nascimento');
            $table->string('aluno_email')->nullable();
            $table->string('aluno_telefone')->nullable();
            $table->string('aluno_deficiencia')->nullable();
            $table->string('aluno_alimentacao')->nullable();
            $table->longtext('aluno_descricao1')->nullable();
            $table->longtext('aluno_descricao2')->nullable();
            //ANAMNESE{
                $table->longtext('aluno_anam_alimentacao')->nullable();
                $table->longtext('aluno_anam_independencia')->nullable();
                $table->longtext('aluno_anam_infos')->nullable();
                $table->longtext('aluno_anam_psicomotor')->nullable();
                $table->longtext('aluno_anam_linguagem')->nullable();
                $table->longtext('aluno_anam_familia')->nullable();
                $table->longtext('aluno_anam_comportamento')->nullable();
            // }
            $table->string('image_path')->nullable();
            $table->timestamps();


            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('escola_id');

            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('escola_id')->references('id')->on('escolas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
