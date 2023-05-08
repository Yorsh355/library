<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class EditBook extends Component
{
    public $book_id;//renombramos el id ya que es palabra reservada de livewire
    public $nombre;
    public $codigo;
    public $descripcion;

    protected $rules = [
        'nombre' => 'required|string',
        'codigo' => 'required',
        'descripcion' => 'required',
    ];

    public function mount(Book $book)
    {
        $this->book_id = $book->id;
        $this->nombre = $book->nombre;
        $this->codigo = $book->codigo;
        $this->descripcion = $book->descripcion;

    }

    public function editBook()
    {
        $datos = $this->validate();

        //Encontrar el libro a Editar
        $book = Book::find($this->book_id);

        //Asignar los valores
        $book->nombre = $datos['nombre'];
        $book->codigo = $datos['codigo'];
        $book->descripcion = $datos['descripcion'];

        //Guardar el libro
        $book->save();

        //redireccionar
        session()->flash('mensaje', 'El libro se actualizó correctamente');
        return redirect()->route('books.index');
    }

    public function render()
    {
        return view('livewire.edit-book');
    }
}
