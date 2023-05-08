<form class="md:w-1/2 space-y-5" wire:submit.prevent='editBook'>
    <div>
        <x-input-label for="nombre" :value="__('Nombre Libro')" />
        
        <x-text-input 
        id="nombre" 
        class="block mt-1 w-full" 
        type="text" 
        wire:model="nombre" 
        :value="old('nombre')"  
        placeholder="nombre del libro"
        />
        @error('nombre')
            <livewire:show-alert :message="$message"/>
        @enderror
    </div>

    <div>
        <x-input-label for="codigo" :value="__('Código')" />
        <x-text-input 
        id="codigo" 
        class="block mt-1 w-full" 
        type="number" 
        wire:model="codigo" 
        :value="old('codigo')"  
        placeholder="Código del libro"
        />
        @error('codigo')
        <livewire:show-alert :message="$message"/>
        @enderror
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripción')" />
        <textarea 
        wire:model="descripcion" 
        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full"  
        placeholder="Descripción del libro"
        ></textarea>
        @error('descripcion')
            <livewire:show-alert :message="$message"/>
        @enderror
    </div>

    <x-primary-button class="w-full justify-center">
        {{ __('Editar Libro') }}
    </x-primary-button>

</form>
