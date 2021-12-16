@extends('layouts.app')

@section('content')

    <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl font-bold text-center">
                {{ $cid->cid_nome}}
            </h1>
        </div>

        <div class="">
            <div class="py-5">
                <h4 class="text-4xl font-medium italic">Código</h4>
                <span class="text-black-500 py-5"><br>
                    {{ $cid->cid_codigo }}
                </span>
            </div>
        </div>

        <div class="">
            <div class="py-5">
                <h4 class="text-4xl font-medium italic">Descrição do CID</h4>
                <span class="text-black-500 py-5"><br>
                    {{ $cid->cid_descricao }}
                </span>
            </div>
        </div>
    <br>
    <br>

    </div>
@endsection
