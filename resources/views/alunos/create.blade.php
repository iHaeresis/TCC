@extends('layouts.app')

@section('content')

<div class="h-screen-150 bg-gradient-to-br from-pink-50 to-indigo-100 grid place-items-center rounded-2 pt-13 pb-13">
    <div class="w-6/12 mx-auto rounded-2">
        <div class="bg-white p-10 shadow-sm">

            <div class="w-4/5 m-auto text-left">
                <div class="pt-6">
                    <h1 class="text-center uppercase text-3xl font-bold">
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


            <div class="w4/5 m-auto pt-10">
                <form
                    action="/alunos"
                    method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="pb-10">
                        <div class="pb-5">
                            <label class="font-semibold">Nome:</label>
                            <input type="text" name="aluno_nome" placeholder="Insira o nome" required
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="pb-5">
                            <label class="font-semibold">Sobrenome:</label>
                            <input type="text" name="aluno_sobrenome" placeholder="Insira o sobrenome" required
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="pb-5">
                            <label class="font-semibold">Data de Nascimento:</label>
                            <input type="date" name="aluno_nascimento" required
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="pb-5">
                            <label class="font-semibold">Selecione o gênero do Aluno</label>
                            <select name="aluno_genero" required
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                <option value = "Masculino" selected>Masculino</option>
                                <option value = "Sem genero">Sem genero</option>
                                <option value = "Feminino">Feminino</option>
                            </select>
                        </div>

                        <div class="pb-5">
                        <label class="font-semibold">O aluno possui algum tipo de deficiência?</label>
                            <select name = "aluno_deficiencia" required
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                <option value = "sim" selected>Sim</option>
                                <option value = "nao">Não</option>
                            </select>
                        </div>

                        <div class="pb-5">
                            <label class="font-semibold">O aluno possui algum tipo de restrição alimentar?</label>
                            <select name = "aluno_alimentacao" required
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                                <option value = "sim" selected>Sim</option>
                                <option value = "nao">Não</option>
                            </select>
                        </div>

                        <div class="pb-5">
                            <label class="font-semibold">Alimentação</label>
                                <textarea
                                    name="aluno_anam_alimentacao"
                                    placeholder="Digite aqui as informações referentes a alimentação do aluno"
                                    class="ck_editor_txt py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none"
                                    id="ckeditor0">
                                </textarea>
                        </div>
                    </div>

                    <hr>

                    <div class="py-10">
                        <h3 class="uppercase text-center font-bold">Responsáveis do aluno</h3>
                    </div>

                    <div class="pb-10">
                        <div class="pb-5">
                            <label class="font-bold">Nome da Mãe:</label><br>
                            <input type="text" name="aluno_mae" placeholder="Insira o nome e sobrenome da Mãe"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="pb-5">
                            <label>Nome do Pai:</label><br>
                            <input type="text" name="aluno_pai" placeholder="Insira o nome e sobrenome do Pai"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                    </div>


                    <hr>

                    <div class="py-10">
                        <h3 class="uppercase text-center font-bold">Informações para Contato</h3>
                    </div>

                    <div class="pb-10">
                        <div class="pb-5">
                            <label class="font-semibold">Telefone:</label>
                            <input type="tel" name="aluno_telefone" placeholder="513451010"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="pb-5">
                            <label>E-MAIL:</label>
                            <input type="email" name="aluno_email" placeholder="Insira o E-MAIL"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                    </div>

                    <hr>

                    <div class="py-10">
                        <h3 class="uppercase text-center font-bold">Pareceres</h3>
                    </div>
                    <div class="pb-10">
                        <div class="pb-5">
                            <label class="font-semibold">Parecer do Aluno pelo Professor</label>
                            <textarea
                                name="aluno_descricao1"
                                placeholder="Insira seus pareceres sobre o aluno"
                                class="ck_editor_txt py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none"
                                id="ckeditor1">
                            </textarea>
                        </div>

                        <div  class="pb-5">
                            <label class="font-semibold">Parecer do Aluno pelo Monitor</label><br>
                            <textarea
                                name="aluno_descricao2"
                                placeholder="Insira seus pareceres sobre o aluno"
                                class="ck_editor_txt py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none"
                                id="ckeditor2">
                            </textarea>
                        </div>
                    </div>

                    <hr>

                    <div class="py-10">
                        <h3 class="uppercase text-center font-bold">Ananmnese</h3>
                    </div>

                    <div class="pb-10">
                        <div class="pb-5">
                            <label class="font-semibold">Desenvolvimento Psicomotor</label>
                            <textarea
                                name="aluno_anam_psicomotor"
                                placeholder="Insira as informações psicomotoras do aluno"
                                class="ck_editor_txt py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none"
                                id="ckeditor3">
                            </textarea>
                        </div>


                        <div class="pb-5">
                            <label class="font-semibold">Desenvolvimento da Linguagem</label><br>
                            <textarea
                                name="aluno_anam_linguagem"
                                placeholder="Insira as informações sobre a linguagem"
                                class="ck_editor_txt py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none"
                                id="ckeditor4">
                            </textarea>
                        </div>

                        <div class="pb-5">
                            <label class="font-semibold">Comportamento e Hábitos</label><br>
                            <textarea
                                name="aluno_anam_comportamento"
                                placeholder="Insira as informações referentes aos comportamentos e hábitos do aluno"
                                class="ck_editor_txt py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none"
                                id="ckeditor5">
                            </textarea>
                        </div>

                        <div class="pb-5">
                            <label class="font-semibold">Família em relação ao aluno</label><br>
                            <textarea
                                name="aluno_anam_familia"
                                placeholder="Insira informações referentes família e aluno"
                                class="ck_editor_txt py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none"
                                id="ckeditor6">
                            </textarea>
                        </div>

                        <div class="pb-5">
                            <label class="font-semibold">Independência do Aluno</label><br>
                            <textarea
                                name="aluno_anam_independencia"
                                placeholder="Insira informações referentes família e aluno"
                                class="ck_editor_txt py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none"
                                id="ckeditor7">
                            </textarea>
                        </div>

                        <div class="pb-5">
                            <label class="font-semibold">Outras informações</label><br>
                            <textarea
                                name="aluno_anam_infos"
                                placeholder="Insira outras informações pertinenentes ao aluno"
                                class="ck_editor_txt py-20 bg-grey-200 block border-b-2 w-full h-60 text-xl outline-none"
                                id="ckeditor8">
                            </textarea>
                        </div>

                        <div class="flex justify">
                            <div class="">
                                <label for="formFile" class="form-label inline-block mb-2 font-semibold">Insira uma foto do Educando</label>
                                    <input class="form-control
                                    block
                                    w-full
                                    px-3
                                    py-1.5
                                    text-base
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    type="file" name="image">
                                </div>
                        </div>

                        <div class="pt-10 w-4/5 m-auto pb-5 text-center">
                            <button
                                type="submit"
                                class="px-15 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 border border-blue-700 rounded">
                                    Salvar
                            </button>
                        </div>
                </form>
            </div>


            </div>
        </div>
    </div>
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
