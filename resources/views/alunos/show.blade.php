@extends('layouts.app')

@section('content')

    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl font-bold">
                {{ $aluno->title}}
            </h1>
        </div>

    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Descrição do Aluno</h4>
            <span class="text-black-500 py-5"><br>
                {{ $aluno->description }}
            </span>
        </div>
    </div>


    <div class="m-auto pt-10">
       <span class="text-gray-500">
           Por <span class="font-bold italic text-gray-800">{{ $aluno->user->name }}</span>, criado em {{  date('Js M Y', strtotime ($aluno->updated_at)) }}
       </span>

       <p class="text-xl text-gray-700 pt-8 pb-10- leading-8 font-light">

        <br><br>
    </div>
@endsection
