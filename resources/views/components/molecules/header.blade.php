<header class=" w-full flex items-center justify-between px-4 py-2 border-solid border-b border-slate-300">
    @include('components.atoms.logo', ['city' => $city])
    <div class="flex items-center gap-5">
        <div class="flex gap-3 items-center bg-slate-300 py-2 px-4 rounded-full">
            @include('components.atoms.search-input')
            @include('components.atoms.unit-select', ['units' => $units])
        </div>
        <div class="flex items-center gap-3">
            <div class="bg-white p-3 rounded-full"><i class="fa-solid fa-gear"></i></div>
            <div class="bg-white p-3 rounded-full"><i class="fa-regular fa-user"></i></div>
        </div>
    </div>
</header>
