@extends('layouts.app')

@section('content')

    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl">
                Editar Dados do Aluno
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
        action="/alunos/{{ $aluno->id }}"
        method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Nome:</label><br>
        <input
            type="text"
            name="aluno_nome"
            value="{{ $aluno->aluno_nome }}">
        <br>

        <label>Sobrenome:</label><br>
        <input
            type="text"
            name="aluno_sobrenome" value="{{ $aluno->aluno_sobrenome }}">
        <br><br>


        <label>Data de Nascimento:</label><br>
        <input type="date" name="aluno_nascimento" placeholder="{{ $aluno->aluno_nascimento }}"><br><BR>


        <label>Selecione o gênero do Aluno</label><br>
        <select name="aluno_genero">
            <option value = "Masculino">Masculino</option>
            <option value = "Sem genero">Sem genero</option>
            <option value = "Feminino">Feminino</option>
        </select>

        <br><br><BR>


        {{--    TERMINAR IMPLEMENTAÇÃO

        <label>Selecione a Escola do aluno</label><br>
            <select name = "aluno_genero">
            @foreach ($alunos as $aluno)
                <option value = "Masculino">{{ $aluno->user->name}}</option>
                <option value = "Sem genero">Sem genero</option>
                <option value = "Feminino">Feminino</option>
            @endforeach
            </select>

        <br><br><BR>

        <label>Selecione o CID do aluno</label><br>
            <select name = "aluno_genero">
                <option value = "Masculino">{{ $aluno->user->name}}</option>
                <option value = "Sem genero">Sem genero</option>
                <option value = "Feminino">Feminino</option>
            </select>

        <br><br><BR>
        <hr>
        <br><br>

        --}}

        <label>Nome da Mãe:</label><br>
        <input type="text" name="aluno_mae" value="{{ $aluno->aluno_mae}}"><br><br>

        <label>Nome do Pai:</label><br>
        <input type="text" name="aluno_pai" value="{{ $aluno->aluno_pai}}"><br><br>

        <hr>
        <br><br>

        <label>O aluno possui algum tipo de deficiência?</label>
        <select name = "aluno_deficiencia">
            <option value = "sim" selected>Sim</option>
            <option value = "nao">Não</option>
        </select>

        <br><br>

        <label>O aluno possui algum tipo de restrição alimentar?</label>
        <select name = "aluno_alimentacao">
            <option value = "sim">Sim</option>
            <option value = "nao">Não</option>
        </select>
        <br><br>
        <label>Restrição Alimentar</label><br>
        <textarea
            name="aluno_anam_alimentacao"
            placeholder="Digite aqui as informações referentes a alimentação do aluno"
            class="ck_editor_txt py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none"
            id="ckeditor0">
                {{ $aluno->aluno_anam_alimentacao }}
        </textarea><br>

        <hr>
        <br><br>

        <label>Telefone:</label><br>
        <input type="number" name="aluno_telefone" value="{{ $aluno->aluno_telefone }}"><br><br>

        <label>E-MAIL:</label><br>
        <input type="text" name="aluno_email" value="{{ $aluno->aluno_email }}"><br><br>

        <br><br>
        <hr>
        <br><br>

        <label>Parecer do Aluno pelo Professor</label><br>
        <textarea
            name="aluno_descricao1"
            placeholder="Insira seus pareceres sobre o aluno"
            class="ck_editor_txt py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none"
            id="ckeditor1">
                {{ $aluno->aluno_descricao1 }}
        </textarea><br>

        <br>

        <label>Parecer do Aluno pelo Monitor</label><br>
        <textarea
            name="aluno_descricao2"
            placeholder="Insira seus pareceres sobre o aluno"
            class="ck_editor_txt py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none"
            id="ckeditor2">
                {{ $aluno->aluno_descricao2 }}
        </textarea>

        <br>
        <br>
        <hr>
        <br>
        <B>Anamnese</B>
        <br><br>
        <label>Desenvolvimento Psicomotor</label><br>
        <textarea
            name="aluno_anam_psicomotor"
            placeholder="Insira as informações psicomotoras do aluno"
            class="ck_editor_txt py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none"
            id="ckeditor3">
                {{ $aluno->aluno_anam_psicomotor }}
        </textarea><br>

        <label>Desenvolvimento Linguagem</label><br>
        <textarea
            name="aluno_anam_linguagem"
            placeholder="Insira as informações sobre a linguagem"
            class="ck_editor_txt py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none"
            id="ckeditor4">
                {{ $aluno->aluno_anam_linguagem }}
        </textarea><br>

        <label>Desenvolvimento Comportamental e Hábitos</label><br>
        <textarea
            name="aluno_anam_comportamento"
            placeholder="Insira as informações referentes aos comportamentos e hábitos do aluno"
            class="ck_editor_txt py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none"
            id="ckeditor5">
            {{ $aluno->aluno_anam_comportamento }}
        </textarea><br>

        <label>Desenvolvimento Família em relação ao Aluno</label><br>
        <textarea
            name="aluno_anam_familia"
            placeholder="Insira informações referentes família e aluno"
            class="ck_editor_txt py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none"
            id="ckeditor6">
                {{ $aluno->aluno_anam_familia }}
        </textarea><br>

        <label>Independência do Aluno</label><br>
        <textarea
            name="aluno_anam_independencia"
            placeholder="Insira informações referentes família e aluno"
            class="ck_editor_txt py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none"
            id="ckeditor7">
                {{ $aluno->aluno_anam_independencia }}
        </textarea><br>

        <label>Outras informações</label><br>
        <textarea
            name="aluno_anam_infos"
            placeholder="Insira outras informações pertinenentes ao aluno"
            class="ck_editor_txt py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none"
            id="ckeditor8">
                {{ $aluno->aluno_anam_infos }}
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

    {{--
    Adcionando o CKEDITOR aos multiplos 'textarea'
    --}}
    <script>
        var allEditors = document.querySelectorAll('.ck_editor_txt');
        for (var i = 0; i < allEditors.length; ++i) {
          ClassicEditor.create(allEditors[i]);
        }
    </script>

@endsection
