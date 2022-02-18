@extends('layouts.app')

@section('content')

    @if (session()->has('message'))
        <div class="w-4/5 m-auto mt-10 pl-2 text-center">
            <p class="w-1/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
                {{ session()->get('message') }}
            </p>

        </div>
    @endif


    <section class="antialiased text-gray-600 h-screen=150 px-4 py-15">

    <div class="w-full max-w-2xl mx-auto bg-white shadow-lg border border-gray-200 rounded-lg lg:rounded-2">
        <header class="px-5 py-4 border-b border-gray-100">
            <h2 class="uppercase text-center font-semibold text-gray-800">Alunos Cadastrados</h2>
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
                                <img class="items-center rounded-full" src="{{ asset('icons/no_photo.jpg') }}" width="40" height="40"></div>
                            @else
                                <img class="items-center rounded-full" src="{{ asset('images/' . $aluno->image_path) }}" width="40" height="40"></div>
                            @endif
                            <div class="items-center font-medium text-gray-800">
                                {{$aluno->aluno_nome .' '. $aluno->aluno_sobrenome}}
                            </div>
                        </div>
                </td>
                    <td class="p-2 whitespace-nowrap text-center">
                        <div class="inline-flex items-baseline" width="40" height="40">
                            {{-- Mostrando se o aluno possui deficiência --}}
                            @if ($aluno->aluno_deficiencia  == 'sim')
                                <img class="w-8 md:w-8 lg:w-8" src="{{ asset('icons/handicap.png') }}">
                            @endif

                            @if ($aluno->aluno_alimentacao  == 'sim')
                                <img class="w-8 md:w-8 lg:w-8" src="{{ asset('icons/food.png') }}">
                            @endif
                        </div>
                    </td>
                    <td class="p-2 whitespace-nowrap text-center w-5 md:w-8 lg:w-8 sm:w-8 ">
                        <div class="font-medium inline-flex items-center">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                <a href="/alunos/{{ $aluno->id }}">
                                    Visualizar
                                </a>
                            </button>

                            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 border border-green-700 rounded ">
                                <a href="/alunos/{{ $aluno->id }}/edit">
                                    Editar
                                </a>
                            </button>

                            <form action="/alunos/{{ $aluno->id }}"
                                method="POST">
                                @csrf
                                @method('delete')

                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded"
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

                @if (Auth::check())
                    <div class="pt-15 w-4/5 m-auto pb-6 text-center">
                        <a href="/alunos/create">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                Cadastrar Novo Aluno
                            </button>
                        </a>
                    </div>
                @endif

            </div>

        </div>

        </div>


</div>

</section>





@endsection
