<div class="bg-gray-100 p-5">

    <div class="max-w-5xl mx-auto">
        <form class="flex flex-col md:flex-row items-center justify-"
        wire:submit.prevent='readDataForm'
        >

            <div class="mb-5 md:mr-3">
                <label 
                    class="block mb-1 text-sm text-gray-700 uppercase font-bold "
                    for="termino">Buscar
                </label>
                <input 
                    id="termino"
                    type="text"
                    placeholder="Buscar"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
                    wire:model="termino"
                />
            </div>

            <div class="flex justify-end">
                <input 
                    type="submit"
                    class="bg-indigo-500 hover:bg-indigo-600 transition-colors text-white text-sm font-bold px-10 py-2 rounded cursor-pointer uppercase w-full md:w-auto"
                    value="Buscar"
                />
            </div>
        </form>
    </div>
</div>

