<header class=" bg-cyan-700 flex items-center justify-between py-2 px-4">
    @include('components.atoms.logo')

<!--Loby, Livros e doações-->
<nav class=" font-mono font-extrabold">
    <ol class="flex gap-8">
        <li><a class="hover:bg-slate-200 p-3 rounded-md transition duration-300" href="#">Loby</a></li>
        <li><a class="hover:bg-slate-200 p-3 rounded-md transition duration-300" href="#">Livros</a></li>
        <li><a class="hover:bg-slate-200 p-3 rounded-md transition duration-300" href="#">Doações</a></li>
    </ol>
</nav>
    <div class="flex gap-3 items-center">
        <div class="flex gap-4 bg-slate-300 py-2 px-6 rounded-full">
        <!--Caixa de mensagem-->
            <button class="flex items-center">
                <i class="fa-solid fa-envelope"></i>
            </button>
        <!--Notificação-->
            <button class="w-5 flex items-center">
                <i class="fa-solid fa-bell"></i>
            </button>
            @include('components.atoms.search-input')
            @include('components.atoms.unit-select')
        </div>
                    <!--Configurações e usuario-->
            <button class="flex items-center bg-slate-100 p-2 rounded-full"><i class="fa-solid fa-gear"></i></button>
            <button class="flex items-center bg-slate-100 p-2 rounded-full"><i class="fa-solid fa-user"></i></button>
    </div>
</header>