@extends('layouts.app')

@section('content')

<!--
  Date : 29 November 2021
  Author : Saad Hasan
  Github : https://github.com/saadh393
  Title : Accordion UI Design
  External Plugin : Font Awesome
  Actual Design Source : https://dribbble.com/shots/14726947-Accordion-UI-Design

  Special Thanks and Love to Ildiko Gaspar

 -->

 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />


 <div class="h-screen-150 bg-gradient-to-br from-pink-50 to-indigo-100 grid place-items-center rounded-2 pt-13 pb-13">
     <div class="w-6/12 mx-auto rounded-2">
     <div class="bg-white p-10 shadow-sm">
         <h3 class="text-2xl font-medium text-gray-800">{{ null }} $aluno->aluno_nome</h3>
            <div>
                <h2 class="pt-5 pb-3">Possui Deficiência?</h2>
                <p class="capitalize">
                    {{-- $aluno->aluno_deficiencia --}} sim
                </p>
            </div>
            <div>
                <h2 class="pt-5 pb-3">Possui Restrição Alimentar?</h2>
                <p class="capitalize">
                    {{-- $aluno->aluno_alimentacao --}}
                </p>
            </div>
         <h1 class="text-xl font-semibold text-gray-600 my-3 pt-3">
            Dados do Aluno
         </h1>

         <div class="h-1 w-full mx-auto border-b my-5"></div>

         <!-- What is term -->
         <div class="transition hover:bg-indigo-50">
         <!-- header -->
         <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16 font-bold">
            <i class="fas fa-plus"></i>
            <h3>Informações Básicas</h3>
        </div>
        <!-- Content -->
        <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
           <div class="pb-6">
               <h4 class="leading-6 pl-9 text-justify font-semibold">- Responsáveis do Aluno</h4>
               <span class="leading-6 font-light pl-9 text-justify">
                   {{ null }} aluno->aluno_pai
               </span>
               <br>
               <span class="leading-6 font-light pl-9 text-justify">
                {{ null }} aluno->aluno_mae
                </span>
           </div>
           <div class="pb-6">
                <h4 class="leading-6 pl-9 text-justify font-semibold">- Contatos</h4>
                <span class="leading-6 font-light pl-9 text-justify">
                    {{ null }} aluno->aluno_telefone
                </span>
                <br>
                <span class="leading-6 font-light pl-9 text-justify">
                 {{ null }} aluno->aluno_email
                 </span>
            </div>
            <div class="pb-6">
                <h4 class="leading-6 pl-9 text-justify font-semibold">- Gênero</h4>
                <span class="leading-6 font-light pl-9 text-justify">
                    {{ null }} aluno->genero
                </span>
            </div>
        </div>

         <!-- When to use Accordion Components -->
         <div class="transition hover:bg-indigo-50">
            <!-- header -->
               <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16 font-bold">
                   <i class="fas fa-plus"></i>
                   <h3>Pareceres do Aluno</h3>
               </div>
         <!-- Content -->
         <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
            <div class="pb-6">
                <h4 class="leading-6 pl-9 text-justify font-semibold">- Descrição pelo Professor</h4>
                <span class="leading-6 font-light pl-9 text-justify">
                    {{ null }} aluno->aluno_descricao1
                </span>
            </div>
            <div class="pb-4">
                <h4 class="leading-6 pl-9 text-justify font-semibold">- Descrição pelo Monitor</h4>
                <span class="leading-6 font-light pl-9 text-justify">
                    {{ null }} aluno->descricao2
                </span>
            </div>
         </div>

         <!-- When to use Accordion Components -->
         <div class="transition hover:bg-indigo-50">
         <!-- header -->
            <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16 font-bold">
                <i class="fas fa-plus"></i>
                <h3>Anamnese</h3>
            </div>
            <!-- Content -->
            <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
                <div class="pb-4">
                    <h4 class="leading-6 pl-9 text-justify font-semibold">- Desenvolvimento Psicomotor</h4>
                    <span class="leading-6 font-light pl-9 text-justify">
                        {{ null }} aluno->aluno_anam_psicomotor
                    </span>
                </div>
                <div class="pb-4">
                    <h4 class="leading-6 pl-9 text-justify font-semibold">- Desenvolvimento da Linguagem</h4>
                    <span class="leading-6 font-light pl-9 text-justify">
                        {{ null }} aluno->aluno_anam_linguagem
                    </span>
                </div>
                <div class="pb-4">
                    <h4 class="leading-6 pl-9 text-justify font-semibold">- Comportamento e Hábitos</h4>
                    <span class="leading-6 font-light pl-9 text-justify">
                        {{ null }} aluno->aluno_anam_comportamento
                    </span>
                </div>
                <div class="pb-4">
                    <h4 class="leading-6 pl-9 text-justify font-semibold">- Família em Relação ao Aluno</h4>
                    <span class="leading-6 font-light pl-9 text-justify">
                        {{ null }} aluno->aluno_anam_familia
                    </span>
                </div>
                <div class="pb-4">
                    <h4 class="leading-6 pl-9 text-justify font-semibold">- Independência do Aluno</h4>
                    <span class="leading-6 font-light pl-9 text-justify">
                        {{ null }} aluno->aluno_anam_independencia
                    </span>
                </div>
                <div class="pb-4">
                    <h4 class="leading-6 pl-9 text-justify font-semibold">- Outras Informações</h4>
                    <span class="leading-6 font-light pl-9 text-justify">
                        {{ null }} aluno->aluno_anam_infos
                    </span>
                </div>
            </div>
            <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
                <div class="pb-4">
                    <h4 class="leading-6 pl-9 text-justify font-semibold">- Desenvolvimento Psicomotor</h4>
                    <span class="leading-6 font-light pl-9 text-justify">
                        {{ null }} aluno->aluno_anam_linguagem
                    </span>
                </div>
            </div>
         </div>
     </div>
     </div>
     </div>
 </div>

 <style>
     .accordion-content {
     transition: max-height 0.3s ease-out, padding 0.3s ease;
     }
 </style>

 <script>
     const accordionHeader = document.querySelectorAll(".accordion-header");
     accordionHeader.forEach((header) => {
     header.addEventListener("click", function () {
         const accordionContent = header.parentElement.querySelector(".accordion-content");
         let accordionMaxHeight = accordionContent.style.maxHeight;

         // Condition handling
         if (accordionMaxHeight == "0px" || accordionMaxHeight.length == 0) {
         accordionContent.style.maxHeight = `${accordionContent.scrollHeight + 32}px`;
         header.querySelector(".fas").classList.remove("fa-plus");
         header.querySelector(".fas").classList.add("fa-minus");
         header.parentElement.classList.add("bg-indigo-50");
         } else {
         accordionContent.style.maxHeight = `0px`;
         header.querySelector(".fas").classList.add("fa-plus");
         header.querySelector(".fas").classList.remove("fa-minus");
         header.parentElement.classList.remove("bg-indigo-50");
         }
     });
     });
 </script>


@endsection
