<div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

        @foreach ($books as $book )
    
        <div class="p-6 text-gray-900 dark:text-gray-100 border-b-2 border grey-200 md:flex md:justify-between md:items-center">
          <div class="space-y-3">
            
            <h4 href="{{route('books.show', $book->id)}}" class="text-xl font-bold">
                {{$book->nombre}}
            </h4>
    
            <p>Descripción: {{$book->descripcion}}</p>
    
            <p>Código: {{$book->codigo}}</p>
          </div>
    
          <div class="flex gap-3 items-center mt-5 md:mt-0">
    
            <a href="{{route('books.edit', $book->id)}}" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase">
                Editar
            </a>
    
            <button wire:click="$emit('showAlert', {{$book->id}})"
             class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase">
                Eliminar
            </button>
    
          </div>
        </div>  
        @endforeach
    
    </div>
    
    <div class="flex justify-center mt-10">
        {{$books->links()}}
    </div>
</div>

@push('scripts')
{{-- Gist Sweet Alert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

Livewire.on('showAlert', (bookId)=>{
    Swal.fire({
        title: '¿Eliminar libro?',
        text: "Libro eliminado!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, !Eliminar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
    if (result.isConfirmed) {
        //Eliminamos la vacante desde el servidor
        Livewire.emit("deleteBook", bookId)
        Swal.fire(
        'Se elimino el libro!',
        'Eliminado correctamente',
        'success'
    )
  }
})
})

</script>

@endpush





{{-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="w-full overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Nombre</th>
                    <th class="py-3 px-6 text-left">Descripción</th>
                    <th class="py-3 px-6 text-left">Código</th>
                    <th class="py-3 px-6 text-left"></th>
                </tr>
            </thead>
            <tbody class="text-gray-900 dark:text-gray-100 text-sm font-light">
                @foreach ($books as $book)
                <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                    <td class="py-3 px-6 text-left whitespace-nowrap">{{ $book->nombre }}</td>
                    <td class="py-3 px-6 text-left">{{ $book->descripcion }}</td>
                    <td class="py-3 px-6 text-left">{{ $book->codigo }}</td>
                    <td class="py-3 px-6 text-left"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div> --}}


