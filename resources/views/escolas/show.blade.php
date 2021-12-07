@extends('layouts.app')

@section('content')

    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl font-bold">
                {{ $escola->escola_nome}}
            </h1>
        </div>

        <div class="">
            <h3>Endereço</h3>
        </div>

        <div class="">
            <div class="py-5">
                <h4 class="text-4xl font-medium italic">Rua:</h4>
                <span class="text-black-500 py-5"><br>
                    {{ $escola->escola_rua }}
                </span>
            </div>
        </div>

        <div class="">
            <div class="py-5">
                <h4 class="text-4xl font-medium italic">Número:</h4>
                <span class="text-black-500 py-5"><br>
                    {{ $escola->escola_numero }}
                </span>
            </div>
        </div>

        <div class="">
            <div class="py-5">
                <h4 class="text-4xl font-medium italic">Bairro:</h4>
                <span class="text-black-500 py-5"><br>
                    {{ $escola->escola_bairro }}
                </span>
            </div>
        </div>

        <div class="">
            <div class="py-5">
                <h4 class="text-4xl font-medium italic">CEP</h4>
                <span class="text-black-500 py-5"><br>
                    {{ $escola->escola_cep }}
                </span>
            </div>
        </div>

    <hr>
    <br>

            <div class="">
                <h3>Contato</h3>
            </div>

            <div class="">
                <div class="py-5">
                    <h4 class="text-4xl font-medium italic">Telefone</h4>
                    <span class="text-black-500 py-5"><br>
                        {{ $escola->escola_telefone }}
                    </span>
                </div>
            </div>

            <div class="">
                <div class="py-5">
                    <h4 class="text-4xl font-medium italic">E-mail</h4>
                    <span class="text-black-500 py-5"><br>
                        {{ $escola->escola_email }}
                    </span>
                </div>
            </div>

            <br><br>


    </div>
@endsection
