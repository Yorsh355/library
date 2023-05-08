<?php

namespace App\Http\Livewire;
//namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

//use Livewire\WithFileUploads;

class CreateBook extends Component
{
    public $nombre;
    public $codigo;
    public $descripcion;

    

    protected $rules = [
        'nombre' => 'required|string',
        'codigo' => 'required',
        'descripcion' => 'required',
    ];

    public function createBook()
    {
        $datos = $this->validate();


        //Crear el libro       
        Book::create([
            'nombre'=> $datos['nombre'],
            'codigo'=> $datos['codigo'],
            'descripcion'=> $datos['descripcion'],
        ]);

        //Crear un mensaje
        session()->flash('mensaje', 'Libro ingresado correctamente');

        //Redireccionar al usuario
        return redirect()->route('books.index');
    }

    public function render()
    {
        return view('livewire.create-book');
    }
}
