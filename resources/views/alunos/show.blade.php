@extends('layouts.app')

@section('content')

    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl font-bold">
                {{ $aluno->aluno_nome }} {{ $aluno->aluno_sobrenome }}
            </h1>
        </div>

    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Responsáveis do Aluno</h4>
            <span class="text-black-500 py-5"><br>
               <p class="">Pai: {{ $aluno->aluno_pai }}
                <br>
               Mãe: {{ $aluno->aluno_mae }}</p>
            </span>
        </div>
    </div>

    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Genero:</h4>
            <span class="text-black-500 py-5"><br>
               <p> {{ $aluno->aluno_genero }} </p>
            </span>
        </div>
    </div>

    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Data de Nascimento</h4>
            <span class="text-black-500 py-5"><br>
                {{ $aluno->aluno_nascimento }}
            </span>
        </div>
    </div>

    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Contatos do Aluno</h4>
            <span class="text-black-500 py-5"><br>
                Telefone: {{ $aluno->aluno_telefone }}
                <br>
                E-MAIL {{ $aluno->aluno_email }}
            </span>
        </div>
    </div>

    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Descrição pelo Professor</h4>
            <span class="text-black-500 py-5"><br>
                {{ $aluno->aluno_descricao1 }}
            </span>
        </div>
    </div>

    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Descrição pelo Monitor</h4>
            <span class="text-black-500 py-5"><br>
                {{ $aluno->aluno_descricao2 }}
            </span>
        </div>
    </div>


    <div class="m-auto pt-10">
       <span class="text-gray-500">
           Por <span class="font-bold italic text-gray-800">{{ $aluno->user->name }}</span>, criado em {{  date('Js M Y', strtotime ($aluno->updated_at)) }}
       </span>

       <p class="text-xl text-gray-700 pt-8 pb-10- leading-8 font-light"></p>

        <br><br>
    </div>

@endsection
