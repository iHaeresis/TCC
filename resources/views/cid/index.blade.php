@extends('layouts.app')

@section('content')

    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Classificação Internacional de Doenças
            </h1>

            <div>

            </div>

        @if (session()->has('message'))
            <div class="w-4/5" m-auto mt-10 pl-2>
                <p class="w-1/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                    {{ session()->get('message') }}
                </p>

            </div>
        @endif


        @if (Auth::check())
            <div class="pt-15 w-4/5 m-auto">
                <a href="/cid/create"
                class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">Cadastrar CID</a>
            </div>
        @endif

            <div class="text-left">
                <br><br>
                <h2 class="text-gray-700 font-bold text-3xl">
                    Transtorno Hipercinético
                </h2>
                <h2 class="text-gray-700 font-bold text-3xl pb-4 italic">
                    – F90. 0 / F90. 1
                </h2>



                <!--
                <span class="text-gray-500">
                    por <span class="font-bold italic text-gray-800">Arthure</span>, 1 dia atrás.
                </span>
                -->

                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    No CID-10 (Código Internacional de Doenças), recebe o nome de Transtorno Hipercinético – F90. 0 / F90. 1. O diagnóstico de TDAH deve ser efetuado por médico especializado, sendo fundamentalmente clínico, ou seja, não existe nenhum exame laboratorial conclusivo para se chegar a ele.
                </p>

                <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                    Ver mais
                </a>

            </div>

        </div>

    </div>

@endsection
