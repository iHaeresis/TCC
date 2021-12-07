@extends('layouts.app')

@section('content')

    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Escolas Cadastradas
            </h1>
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
                <a href="/escolas/create"
                class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">Cadastrar Escola</a>
            </div>
        @endif


        @foreach ($escolas as $escola)
                <div class="text-left">
                    <br><br>

                    <h2 class="text-gray-700 font-bold text-5xl pb-4">
                        {{ $escola->escola_nome }}
                    </h2>

                    <br>
                    <a href="/escolas/{{ $escola->id }}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-4 rounded-3xl">
                        Veja mais
                    </a>

                        <span class="float-right">
                            <a href="/escolas/{{ $escola->id }}/edit"
                                class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                                Editar
                            </a>
                        </span>

                        <span class="float-right">
                            <form
                                action="/escolas/{{ $escola->id }}"
                                method="POST">
                                @csrf
                                @method('delete')

                                <button
                                    class="text-red-500 pr-3"
                                    type="submit">
                                    Deletar
                                </button>
                            </form>
                </div>
                 <br><br><hr>
     @endforeach

    <br><br>
    </div>
@endsection
