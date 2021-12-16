@extends('layouts.app')

@section('content')

    <div class="w-4/5 m-auto text-center">
        <div class="py-15 border-b border-gray-200">
            <h1 class="text-6xl">
                Alunos Cadastrados
            </h1>
        </div>

        @if (session()->has('message'))
            <div class="w-4/5" m-auto mt-10 pl-2>
                <p class="w-1/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                    {{ session()->get('message') }}
                </p>

            </div>
        @endif



        <br><br><hr>
        @foreach ($alunos as $aluno)
                <div class="text-left">
                    <br><br>

                    {{--
                    <div class="sm:grid grid-cols-2 gap-100 w-4/5 mx-auto py-15 ">
                        <div>
                            <img src="{{ asset('images/' . $aluno->image_path) }}">
                        </div>

                    </div>
                    --}}

                    <h2 class="text-gray-700 font-bold text-5xl pb-4">
                        {{ $aluno->aluno_nome }}
                        {{ $aluno->aluno_sobrenome }}

                    </h2>

                    <span class="text-gray-500">
                        por <span class="font-bold italic text-gray-800">{{ $aluno->user->name }}</span>, criado em {{ date('jS M Y', strtotime($aluno->updated_at)) }}
                    </span>

                    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                        {{ $aluno->description }}
                    </p>

                    <a href="/alunos/{{ $aluno->id }}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-4 rounded-3xl">
                        Leia mais
                    </a>

                    {{-- Adicionando um botão para editar se o usuário é o criador do aluno --}}

                    @if (isset(Auth::user()->id) && Auth::user()->id == $aluno->user_id)
                        <span class="float-right">
                            <a href="/alunos/{{ $aluno->id }}/edit"
                                class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                                Editar
                            </a>
                        </span>

                        <span class="float-right">
                            <form
                                action="/alunos/{{ $aluno->id }}"
                                method="POST">
                                @csrf
                                @method('delete')

                                <button
                                    class="text-red-500 pr-3"
                                    type="submit">
                                    Deletar
                                </button>
                            </form>
                    @endif
                </div>
                 <br><br><hr>
        @endforeach
    <br><br>

    @if (Auth::check())
        <div class="pt-15 w-4/5 m-auto">
            <a href="/alunos/create"
            class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">Cadastrar Novo Aluno</a>
            <br>

        </div>
    @endif

    <br><br>
    </div>
@endsection
