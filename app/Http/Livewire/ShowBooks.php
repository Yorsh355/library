<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class ShowBooks extends Component
{
    /* public $termino; */
    
    //para que Livewire escuche los eventos
    protected $listeners = ['deleteBook'];
    /* protected $listener = ['terminosBusqueda'=>'search']; */

    /* public function search($termino)
    {
        $this->termino = $termino;
    } */

    public function deleteBook(Book $book)
    {
        $book->delete();
    }

    public function render()
    {
        /* searsh */
        /* $books = Book::when($this->termino, function($query){
            $query->where('nombre', 'LIKE', "%" . $this->termino . "%");
        })->paginate(10); */

        $books = Book::paginate(10);

        return view('livewire.show-books', [
            'books' => $books,
        ]);
    }
}
