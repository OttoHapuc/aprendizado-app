<header class=" w-full flex items-center justify-between px-4 py-2 border-solid border-b border-slate-300">
    <x-image class="flex gap-2 items-center w-12" :src="$city['img']" :alt="$city['name']">
        <span class="text-xl">{{ $city['name'] }}</span>
    </x-image>
    <div class="flex items-center gap-5">
        <div class="flex gap-3 items-center bg-slate-300 py-2 px-4 rounded-full">
            <x-input-text
                id="search"
                name="search"
                placeholder="Titulo do livro ..."
                required
                class="group bg-white flex items-center p-2 rounded-full"
                inputClass="bg-white transition-all duration-300 group-hover:w-48 focus:w-48 focus:mr-2 w-0 focus:px-2"
            >
                <i class="fa-solid fa-magnifying-glass"></i>
            </x-input-text>
            <x-input-select
                id="library"
                name="library"
                :options="$units" {{-- Certifique-se de que $units está sendo passado corretamente --}}
                class="group bg-white flex items-center py-2 px-3 rounded-full"
                selectClass="border bg-white rounded transition-all duration-300 group-hover:w-48 focus:w-48 group-hover:mr-2 focus:mr-2 w-0" {{-- Aqui, certifique-se de que não há erros de sintaxe --}}
            >
                <i class="fa-solid fa-building"></i>
            </x-input-select>
        </div>
        <div class="flex items-center gap-3">
            <div class="bg-white p-3 rounded-full"><i class="fa-solid fa-gear"></i></div>
            <div class="bg-white p-3 rounded-full"><i class="fa-regular fa-user"></i></div>
        </div>
    </div>
</header>
