@extends('layouts.app')

@section('content')

{{-- tentanto ocultar/mostrar via JS--}}
<style>
    #teste {

    }
</style>

<script>
    function Mostrar() {
        var x = document.getElementById("teste");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function Mostrar2() {
        var x = document.getElementById("teste2");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
{{-- --}}


    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl font-bold">
                {{ $aluno->aluno_nome }} {{ $aluno->aluno_sobrenome }}
            </h1>
        </div>

    <button onclick="Mostrar()">
        <B>Dados do Aluno</B>
    </button>

    <div id="teste">

    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Responsáveis do Aluno</h4>
            <span class="text-black-500 py-5"><br>
               <p class="">Pai: {{ $aluno->aluno_pai }}
                <br>
               Mãe: {{ $aluno->aluno_mae }}</p>
            </span>
        </div>
    </div>

    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Genero:</h4>
            <span class="text-black-500 py-5"><br>
               <p> {{ $aluno->aluno_genero }} </p>
            </span>
        </div>
    </div>

    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Possui deficiciencia?</h4>
            <span class="text-black-500 py-5"><br>
               <p class="capitalize"> {{ $aluno->aluno_deficiencia }} </p>
            </span>
        </div>
    </div>

    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Possui restrição alimentar?</h4>
            <span class="text-black-500 py-5"><br>
               <p class="capitalize"> {{ $aluno->aluno_alimentacao }} </p>
            </span>
        </div>
    </div>

    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Data de Nascimento</h4>
            <span class="text-black-500 py-5"><br>
                {{ $aluno->aluno_nascimento }}
            </span>
        </div>
    </div>

    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Contatos do Aluno</h4>
            <span class="text-black-500 py-5"><br>
                Telefone: {{ $aluno->aluno_telefone }}
                <br>
                E-MAIL {{ $aluno->aluno_email }}
            </span>
        </div>
    </div>

</div>

<br>
<button onclick="Mostrar2()">
    <B>Pareceres do Aluno</B>
</button>

<div id="teste2">

    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Descrição pelo Professor</h4>
            <span class="text-black-500 py-5"><br>
                {{ $aluno->aluno_descricao1 }}
            </span>
        </div>
    </div>


    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Descrição pelo Monitor</h4>
            <span class="text-black-500 py-5"><br>
                {{ $aluno->aluno_descricao2 }}
            </span>
        </div>
    </div>



</button>
<B>Anamnese</B>
<div id="teste2">

    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Desenvolvimento Psicomotor</h4>
            <span class="text-black-500 py-5"><br>
                {{ $aluno->aluno_anam_psicomotor }}
            </span>
        </div>
    </div>


    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Desenvolvimento da Linguagem</h4>
            <span class="text-black-500 py-5"><br>
                {{ $aluno->aluno_anam_linguagem }}
            </span>
        </div>
    </div>

    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Comportamentos e Hábitos</h4>
            <span class="text-black-500 py-5"><br>
                {{ $aluno->aluno_anam_comportamento }}
            </span>
        </div>
    </div>

    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Família em relação ao educando</h4>
            <span class="text-black-500 py-5"><br>
                {{ $aluno->aluno_anam_familia }}
            </span>
        </div>
    </div>

    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Independência do Educando</h4>
            <span class="text-black-500 py-5"><br>
                {{ $aluno->aluno_anam_independencia }}
            </span>
        </div>
    </div>

    <div class="">
        <div class="py-15">
            <h4 class="text-4xl font-medium italic">Outras informações</h4>
            <span class="text-black-500 py-5"><br>
                {!! $aluno->aluno_anam_infos !!}
            </span>
        </div>
    </div>

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


    <div class="m-auto pt-10">
       <span class="text-gray-500">
           Por <span class="font-bold italic text-gray-800">{{ $aluno->user->name }}</span>, criado em {{  date('Js M Y', strtotime ($aluno->updated_at)) }}
       </span>

       <p class="text-xl text-gray-700 pt-8 pb-10- leading-8 font-light"></p>

        <br><br>
    </div>

</div>

@endsection
