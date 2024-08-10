<?php

namespace App\Livewire\FrontComponent;

use App\Models\Receita;
use Livewire\Component;

class Card extends Component
{
    public $nome;
    public $descricao;
    public $categoria;
    public $imagem;
    public $user_name;
    public $id;
    public function render()
    {
        return view('livewire.front-component.card');
    }
    public function deletar($id){
        $receita=Receita::find($id);
        $receita->delete();
    }
}
