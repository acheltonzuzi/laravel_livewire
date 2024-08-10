<?php

namespace App\Livewire\Front;

use App\Models\Receita;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends Component
{
    #[Layout('layouts.frontend')]
    public function render()
    {
        $receitas=Receita::get();
        return view('livewire.front.home',compact('receitas'));
    }
}
