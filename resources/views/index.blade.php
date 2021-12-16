@extends('layouts.app')


@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-black text-5xl uppercase font-bold text-shadow-md pb-14">
                    HOMEPAGE
                </h1>
                <div class="center text-gray-600">
                    <p>Bem vindo Sistema Escolar Integrado</p>
                    <p>Esta versão é um <b class="uppercase">protótipo</b> do meu trabalho de Conclusão de Curso.</p>
                </div>
            </div>
        </div>

    </div>

    <hr>

    <div class="w-4/5 mx-auto py-15 border-b border-gray-200">
        <div class="left text-gray-600">
            <p>A intenção deste sistema é integrar e pular etapas de forma  mais prática e simples do contato entre os diversos funcionários que compõem o corpo escolar. </p>
            <br>
            <p>Neste protótipo, peço para que você tente cadastrar um Aluno e veja se as informações ali apresentadas são importantes para o seu dia-a-dia.
                <br>
                Utilize os botões abaixo ou no cabeçalho.
            </p>
            <br>
            <p>Após, peço para que responda o formulário e me dê um <i>feedback</i> sobre o que achou do sistema e do que poderia melhorar nele, <b class="uppercase">obrigado!</b></p>
            <br>
            <div class="">
                <p>att, Arthur Reis.</p>
            </div>
        </div>

    </div>
    <div clas="">
        <hr>
    <div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">

        <div class="m-auto sm:m-auto text-left w-4/5 ">
            <a href="/alunos" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Cadastrar Aluno
            </a>
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 ">
            <a href="/escolas" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Cadastrar Escola
            </a>
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 ">
            <a href="/cid" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Cadastrar CID
            </a>
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <a href="/#" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Não Implementado
            </a>
        </div>

    </div>
@endsection
