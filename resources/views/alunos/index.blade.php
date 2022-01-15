@extends('layouts.app')

@section('content')

    @if (session()->has('message'))
        <div class="w-4/5" m-auto mt-10 pl-2>
            <p class="w-1/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                {{ session()->get('message') }}
            </p>

        </div>
    @endif

    <br><br>

    <div class="text-left">

    <br><br>

    <section class="antialiased text-gray-600 h-screen=150 px-4">
    <br><br>

    <div class="w-full max-w-2xl mx-auto bg-white shadow-lg border border-gray-200 rounded-lg lg:rounded-2">
        <header class="px-5 py-4 border-b border-gray-100">
            <h2 class="font-semibold text-gray-800">Alunos Cadastrados</h2>
        </header>
    <div class="p-3">
        <div class="overflow-x-auto">
            <table class="table-auto w-full">
                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                    <tr>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Nome</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Alertas</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-center">Ação</div>
                        </th>
                    </tr>
                </thead>
                <tbody class="text-sm divide-y divide-gray-100">

            @foreach ($alunos as $aluno)
            <tr>
                <td class="p-2 whitespace-nowrap">
                    <div class="flex flex-col justify-center items-center">
                        <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3">
                            @if (is_null($aluno->image_path ))
                                <img class="rounded-full" src="{{ asset('icons/no_photo.jpg') }}" width="40" height="40"></div>
                            @else
                                <img class="rounded-full" src="{{ asset('images/' . $aluno->image_path) }}" width="40" height="40"></div>
                            @endif
                            <div class="font-medium text-gray-800">
                                <a href="#">{{$aluno->aluno_nome .' '. $aluno->aluno_sobrenome}}</a>
                            </div>
                        </div>
                </td>
                    <td class="p-2 whitespace-nowrap">
                        <div class=" inline-flex items-baseline" width="40" height="40">
                            {{-- Mostrando se o aluno possui deficiência --}}
                            @if ($aluno->aluno_deficiencia  == 'sim')
                                <img class="w-8 md:w-8 lg:w-8" src="{{ asset('icons/handicap.png') }}">
                            @endif

                            @if ($aluno->aluno_alimentacao  == 'sim')
                                <img class="w-8 md:w-8 lg:w-8" src="{{ asset('icons/food.png') }}">
                            @endif
                        </div>
                    </td>
                    <td class="p-2 whitespace-nowrap">
                        <div class="content-center text-center font-medium text-green-500 inline-flex items-baseline">
                            <button class="bg-green-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                                <a href="/alunos/{{ $aluno->id }}">
                                    Ver dados
                                </a>
                            <button class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                                <a href="/alunos/{{ $aluno->id }}/edit">
                                    Editar
                                </a>
                            </button>

                            <form action="/alunos/{{ $aluno->id }}"
                                method="POST">
                                @csrf
                                @method('delete')

                                <button class="bg-red-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl"
                                    type="submit">
                                        Deletar
                                </button>
                            </form>
                        </div>
                    </td>
           </tr>
            @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    @if (Auth::check())
        <div class="pt-15 w-4/5 m-auto pb-6">
            <a href="/alunos/create"
                class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">Cadastrar Novo Aluno</a>
                    <br>
        </div>
    @endif
</section>



@endsection
