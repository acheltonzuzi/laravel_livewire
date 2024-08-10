<div>
    <section class="w-8/12 mx-auto mt-20 p-5">

        <h1 class="text-orange-500 text-4xl mb-3">Receitas</h1>
        <div class="grid grid-cols-3 gap-3">
            @foreach ($receitas as $receita)
                @livewire('front-component.card', ['nome' => $receita->nome, 'imagem' => $receita->imagem,'id'=>$receita->id])
            @endforeach


        </div>



    </section>
</div>
