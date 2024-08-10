<div>
    <section class="w-10/12 mx-auto mt-10 p-3">
        <div class="grid md:grid-cols-2 gap-3">

            <div class="">
                <img class="rounded-md shadow-md w-[540px]" src="{{ asset('./storage/' . $receita->imagem) }}"
                    alt="sem imagem" srcset="">
                <h1 class="text-4xl text-orange-400 font-bold my-3">{{ $receita->nome }}</h1>
                <div class=" text-white rounded-full px-4 py-1 bg-orange-500 inline-flex gap-2 mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd"
                            d="M5.25 2.25a3 3 0 0 0-3 3v4.318a3 3 0 0 0 .879 2.121l9.58 9.581c.92.92 2.39 1.186 3.548.428a18.849 18.849 0 0 0 5.441-5.44c.758-1.16.492-2.629-.428-3.548l-9.58-9.581a3 3 0 0 0-2.122-.879H5.25ZM6.375 7.5a1.125 1.125 0 1 0 0-2.25 1.125 1.125 0 0 0 0 2.25Z"
                            clip-rule="evenodd" />
                    </svg>
                    Carnes
                </div>

                <div class="">
                    <h1 class="text-2xl font-extrabold mb-3 text-gray-800">Descrição</h1>
                    <p class="text-gray-500 text-justify">{{ $receita->descricao }}</p>
                </div>

            </div>

            <div class="">
                <h1 class="text-4xl text-blue-600 font-bold mb-3">Receitas que talvez gostes</h1>
                <div class="grid md:grid-cols-3 gap-2">
                    @foreach ($receitas as $receita)
                        @livewire('front-component.card', ['nome' => $receita->nome, 'imagem' => $receita->imagem, 'id' => $receita->id])
                    @endforeach

                </div>

            </div>


        </div>





    </section>
</div>
