<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Anamnese extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anamnese', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->longText('anam_alimentaacao')->nullable();
            $table->longText('anam_psicomotor')->nullable(); //desenvolvimento psicomotor
            $table->longText('anam_comportamento')->nullable(); //comportamento e hábitos
            $table->longText('anam_independencia')->nullable();
            $table->longText('anam_infos')->nullable(); //outras informações
            $table->timestamps();
            $table->date('anam_data')->nullable();
            $table->unsignedBigInteger('aluno_id');
            $table->foreign('aluno_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anamnese');
    }
}
