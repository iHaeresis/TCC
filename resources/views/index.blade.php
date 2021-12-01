@extends('layouts.app')


@section('content')
<div class="background-image grid grid-cols-1 m-auto">
    <div class="flex text-gray-100 pt-10">
        <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-black text-5xl uppercase font-bold text-shadow-md pb-14">
                HOMEPAGE
            </h1>
            <a
                href="/alunos"
                class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                veja mais
            </a>
        </div>
    </div>
</div>

<hr>

{{ $a }}


    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2016/03/26/13/09/workspace-1280538_960_720.jpg" width="700">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-gray-600">
                    Teste 03
            </h2>

            <p class="py-8 text-gray-500 text-l">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti reprehenderit deserunt consequuntur esse, nobis nulla, tempore dolore
            </p>

            <p class="font-extrabold text-gray-600 text-l pb-9">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt, laboriosam porro! Praesentium delectus, culpa ad nisi accusamus sint ut voluptates cumque libero ullam dolorum necessitatibus nobis consequatur ratione, qui possimus.
            </p>

            <a href="/alunos" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                leia mais
            </a>
        </div>
    <!--
        <div class="text-center p-15 bg-black text-white">
            <h2 class="text-2xl pb-5 text-l">
                I'm an expert in...
            </h2>

            <span class="font-extrabold block text-4xl py-1">
                Ux Design
            </span>
            <span class="font-extrabold block text-4xl py-1">
                Project Management
            </span>
            <span class="font-extrabold block text-4xl py-1">
                Digital Strategy
            </span>
            <span class="font-extrabold block text-4xl py-1">
                Backend Development
            </span>
        </div>
    -->
    </div>
@endsection
