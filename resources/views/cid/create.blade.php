@extends('layouts.app')

@section('content')

    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl">
                Cadastrar CID
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
            action="/cid"
            method="POST"
            enctype="multipart/form-data">
            @csrf

            <input
                type="text"
                name="cid"
                placeholder="Nome do CID"
                class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">
            <br><br><br>
            <input
                type="text"
                name="cid_cod"
                placeholder="Código do CID"
                class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">
            <br><br><br>
            <div>
                <p class="text-3xl text-black font-bold">Descrição</p>
                <textarea
                    name="description"
                    placeholder="Adicione a descrição do CID"
                    class="py-20 bg-gray-200 block border-b-2 w-full h-60 text-xl outline-none text-black">
                </textarea>
            </div>


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
