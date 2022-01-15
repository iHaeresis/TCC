@extends('layouts.app')

@section('content')

<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col justify-center items-center">
            <div>
                <img class="object-center object-cover h-auto w-full" src="{{ asset('images\61d23c3bd3882-testeste.jpg') }}" alt="photo">
               </div>
            <div class="text-center py-8 sm:py-6">
                <p class="text-xl text-gray-700 font-bold mb-2">{{ 'aluno_nome aluno_sobrenome'}}</p>
                <span class="inline-flex items-baseline">

                        <img class="w-8 md:w-8" src="{{ asset('icons/handicap.png')}}">

                        <img class="w-8 md:w-8" src="{{ asset('icons/food.png')}}">

                </span>
                <p class="text-base text-gray-400 font-normal">Software Engineer</p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="w-full bg-white rounded-lg sahdow-lg overflow-hidden flex flex-col justify-center items-center">
            <div>
                <img class="object-center object-cover h-auto w-full" src="{{ asset('images\ ') }}" alt="photo">
               </div>
            <div class="text-center py-8 sm:py-6">
                <p class="text-xl text-gray-700 font-bold mb-2">{{ 'aluno_nome aluno_sobrenome'}}</p>
                <span class="inline-flex items-baseline">

                        <img class="w-8 md:w-8" src="{{ asset('icons/handicap.png')}}">

                        <img class="w-8 md:w-8" src="{{ asset('icons/food.png')}}">

                </span>
                <p class="text-base text-gray-400 font-normal">Software Engineer</p>
            </div>
        </div>
    </div>
</section>



@endsection
