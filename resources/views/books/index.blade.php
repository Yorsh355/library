<x-app-layout>
  <x-slot name="header">
      <livewire:searsh-books/>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
        @if(session()->has('mensaje'))
        <div class="bg-green-100 border-l-4 border-green-600 text-green-600 font-bold p-2 my-3 uppercase ">
            {{session('mensaje')}}
        </div>
        @endif

          <livewire:show-books/>
      </div>
  </div>
</x-app-layout>
