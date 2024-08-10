<?php

namespace App\Livewire\Front;

use App\Models\Receita;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ReceitaDetalhe extends Component
{
    #[Layout('layouts.frontend')]

    public $id;
    public function mount($id){
        $this->id=$id;
    }
    public function render()
    {
        $receita=Receita::find($this->id);
        $receitas=Receita::get();
        return view('livewire.front.receita-detalhe',compact('receita','receitas'));
    }
}
