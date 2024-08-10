<?php

namespace App\Livewire\Admin;

use App\Models\Receita;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class ReceitasStore extends Component
{
    use WithFileUploads;
    public $nome;
    public $descricao;
    public $categoria;
    public $imagem;
    public function render()
    {
        $receitas=Receita::get();
        return view('livewire.admin.receitas-store',compact('receitas'));
    }
    public function cadastrar(){
        $validated=$this->validate([
            'nome'=>'required',
            'descricao'=>'required',
            'categoria'=>'required',
            'imagem'=>'required|image',
        ]);
        $validated['imagem']=$this->imagem->store('imagens');
        $validated['user_id']=Auth::user()->id;
        Receita::create($validated);
        $this->reset();
    }
    public function delete($id){
        $receita=Receita::find($id);
        $receita->delete();
    }
}
