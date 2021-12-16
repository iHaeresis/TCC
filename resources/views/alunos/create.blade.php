@extends('layouts.app')

@section('content')

    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl">
                Cadastrar Aluno
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
            action="/alunos"
            method="POST"
            enctype="multipart/form-data">
            @csrf

            <label>Nome:</label><br>
            <input type="text" name="aluno_nome" placeholder="Insira o nome"><br>

            <label>Sobrenome:</label><br>
            <input type="text" name="aluno_sobrenome" placeholder="Insira o sobrenome"><br><br>


            <label>Data de Nascimento:</label><br>
            <input type="date" name="aluno_nascimento"><br><BR>

            <label>Selecione o gênero do Aluno</label><br>
            <select name = "aluno_genero">
                <option value = "Masculino" selected>Masculino</option>
                <option value = "Sem genero">Sem genero</option>
                <option value = "Feminino">Feminino</option>
            </select>

            <br><br><BR>
            <hr>
            <br><br>

            <label>Nome da Mãe:</label><br>
            <input type="text" name="aluno_mae" placeholder="Insira o nome e sobrenome da Mãe"><br><br>

            <label>Nome do Pai:</label><br>
            <input type="text" name="aluno_pai" placeholder="Insira o nome e sobrenome do Pai"><br><br>

            <br><br>
            <hr>
            <br><br>

            <label>Telefone:</label><br>
            <input type="number" name="aluno_telefone" placeholder="513451010"><br><br>

            <label>E-MAIL:</label><br>
            <input type="text" name="aluno_email" placeholder="Insira o E-MAIL"><br><br>

            <br><br>
            <hr>
            <br><br>

            <label>Parecer do Aluno pelo Professor</label><br>
            <textarea
                name="aluno_descricao1"
                placeholder="Insira seus pareceres sobre o aluno"
                class="py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none">
            </textarea><br>

            <br>

            <label>Parecer do Aluno pelo Monitor</label><br>
            <textarea
                name="aluno_descricao2"
                placeholder="Insira seus pareceres sobre o aluno"
                class="py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none">
            </textarea><br>

            <div class="bg-grey-lighter pt-15">
                <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wider uppercase border border-blue coursos-pointer">
                    <span class="mt-2 text-base leading-normal">
                        Selecionar um arquivo
                    </span>
                    <input
                        type="file"
                        name="image"
                        class="hidden">
                </label>
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
