@extends('layouts.app')

@section('content')

    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl">
                Editar Dados da escola
            </h1>
        </div>

@if ($errors->any())

        <div class="w-4/5 m-auto">
            <ul>
                @foreach ($errors->all as $error)
                    <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2x py-4">
                        {{ $error }}
                    </li>
                @endforeach

            </ul>

        </div>

@endif


    <div class="w4/5 m-auto pt-20">
        <form
            action="/escolas/{{ $escola->id}}"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input
                type="text"
                name="escola_nome"
                value="{{ $escola->escola_nome }}"
                class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

            <textarea
                name="escola_endereco"
                placeholder="Descrição"
                class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">
                {{ $escola->description}}
            </textarea>

            <textarea
                name="description"
                placeholder="Descrição"
                class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">
                {{ $escola->description}}
        </textarea>

            <textarea
                name="description"
                placeholder="Descrição"
                class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none">
                {{ $escola->description}}
            </textarea>

            <button
                type="submit"
                class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Salvar

            </button>
        </form>
    </div>


    <br><br>
    </div>
@endsection
