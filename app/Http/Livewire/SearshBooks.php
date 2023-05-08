<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearshBooks extends Component
{
    public $termino; 

    public function readDataForm()
    {
        $this->emit('terminosBusqueda', $this->termino);
    }


    public function render()
    {
        return view('livewire.searsh-books');
    }
}
