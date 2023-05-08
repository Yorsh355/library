<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class ShowBooks extends Component
{
    
    protected $listeners = ['deleteBook'];

    public function deleteBook(Book $book)
    {
        $book->delete();
    }

    public function render()
    {

        $books = Book::paginate(10);

        return view('livewire.show-books', [
            'books' => $books,
        ]);
    }
}
