<div>
    <div class="grid md:grid-cols-3 gap-3">
        <form wire:submit='cadastrar()'>
            <h1 class="text-2xl text-orange-500 font-semibold mb-3">Nova Receita</h1>
            <div class="">
                <input type="text" wire:model='nome' class="p-2 border rounded-md w-full mb-3" placeholder="nome">
                @error('nome')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="text" wire:model='categoria' class="p-2 border rounded-md w-full mb-3"
                    placeholder="categoria">
                @error('categoria')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="file" wire:model='imagem' class="p-2 border rounded-md w-full mb-3"
                    placeholder="categoria">
                <p wire:loading wire:target='imagem' class="text-gray-400">Carregando...</p>

                @error('imagem')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <textarea class="p-2 border rounded-md w-full mb-3" wire:model='descricao' placeholder="descrição"></textarea>
                @error('descricao')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <button class="bg-black rounded-md text-white my-3 px-4 py-2">Salvar</button>
        </form>
        <div class=" col-span-2">
            <h1 class="mb-3">Todas Receitas</h1>
            <div class="grid md:grid-cols-3 gap-3">
                @foreach ($receitas as $receita)
                    @livewire('front-component.card', ['id'=>$receita->id,'nome' => $receita->nome, 'imagem' => $receita->imagem])
                @endforeach
            </div>

        </div>

    </div>
</div>
