@extends('app')

@section('home-page')
    <header class="bg-gray-900 text-gray-300 p-4 absolute top-0 w-full">
        <nav class="mx-auto flex justify-between items-center">
            <a href="/" class="text-xl font-bold">Aprendizado</a>
            <ul class="gap-8 hidden lg:flex">
                <li @if (request()->is('Docker')) class="text-green-400" @endif><a href="/Docker"
                        class="hover:text-green-400">Docker</a></li>
                <li @if (request()->is('Laravel')) class="text-green-400" @endif><a href="/Laravel"
                        class="hover:text-green-400">Laravel</a></li>
                <li @if (request()->is('Arquitetura')) class="text-green-400" @endif><a href="/Arquitetura"
                        class="hover:text-green-400">Arquitetura</a></li>
                <li @if (request()->is('Metodos')) class="text-green-400" @endif><a href="/Metodos"
                        class="hover:text-green-400">Banco de dados</a></li>
            </ul>
            <div class="gap-8 hidden lg:flex">
            <button class="hover:text-green-400 py-2 px-4 bg-gray-800 rounded-md login-button" onclick="loginVisibility()">Entrar</button>
                <button class="hover:text-green-400 py-2 px-4 bg-gray-800 rounded-md" onclick="registerVisibility()">Registro</button>
            </div>
        </nav>
    </header>

    <section class="flex flex-wrap justify-center items-center rounded-l-full lg:bg-gray-900">
    <img src="{{ asset('images/svg/dev/develop-in-desktop.svg') }}" alt="dev-login-image" class="w-[30%]">
        <div class="w-full lg:w-1/2 flex items-center justify-center rounded-xl">
            <div class="max-w-md w-full p-6">
                <h1 class="text-3xl font-semibold mb-6 text-gray-400 text-center">Registro</h1>
                <h1 class="text-sm font-semibold mb-6 text-gray-400 text-center">
                    Seja mais um conosco, neste mundo de estudos e dores de cabeça!!
                </h1>
                <div class="mt-4 flex flex-col lg:flex-row items-center justify-between">
                    <div class="w-full lg:w-1/2 mb-2 lg:mb-0">
                        <button type="button"
                            class="w-full flex justify-center items-center gap-2 bg-gray-800 text-sm text-gray-400 p-2 rounded-md hover:bg-gray-50 duration-300">
                            <i class="fa-brands fa-google"></i>
                            Registro com Google
                        </button>
                    </div>
                    <div class="w-full lg:w-1/2 ml-0 lg:ml-2">
                        <button type="button"
                            class="w-full flex justify-center items-center gap-2 bg-gray-800 text-sm text-gray-400 p-2 rounded-md hover:bg-gray-50 duration-300">
                            <i class="fa-brands fa-github"></i>
                            Registro com Github
                        </button>
                    </div>
                </div>
                <div class="mt-4 text-sm text-gray-600 text-center">
                    <p>ou com email</p>
                </div>
                <form action="{{ route('register') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-400">Nome</label>
                        <input type="text" id="name" name="name"
                            class="text-gray-300 bg-gray-600 mt-1 p-2 w-full rounded-md focus:border-gray-200 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-gray-600 transition-colors duration-300">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-400">Email</label>
                        <input type="text" id="email" name="email"
                            class="text-gray-300 bg-gray-600 mt-1 p-2 w-full rounded-md focus:border-gray-200 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-gray-600 transition-colors duration-300">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-400">Senha</label>
                        <input type="password" id="password" name="password"
                            class="text-gray-300 bg-gray-600 mt-1 p-2 w-full rounded-md focus:border-gray-200 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-gray-600 transition-colors duration-300">
                    </div>
                    <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-400">Confirmação de
                            senha</label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="text-gray-300 bg-gray-600 mt-1 p-2 w-full rounded-md focus:border-gray-200 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-gray-600 transition-colors duration-300">
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full bg-gray-800 text-white p-2 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 transition-colors duration-300">Registrar</button>
                    </div>
                </form>
                <div class="mt-4 text-sm text-gray-600 text-center">
                    <p>Já tem uma conta?<a href="#" class="text-black hover:underline"> Entrar aqui</a>
                    </p>
                </div>
            </div>
            <div class="max-w-md w-full p-6 hidden">
                <h1 class="text-3xl font-semibold mb-6 text-gray-400 text-center">Entrar</h1>
                <h1 class="text-sm font-semibold mb-6 text-gray-400 text-center">
                    Seja mais um conosco, neste mundo de estudos e dores de cabeça!!
                </h1>
                <div class="mt-4 flex flex-col lg:flex-row items-center justify-between">
                    <div class="w-full lg:w-1/2 mb-2 lg:mb-0">
                        <button type="button"
                            class="w-full flex justify-center items-center gap-2 bg-gray-800 text-sm text-gray-400 p-2 rounded-md hover:bg-gray-50 duration-300">
                            <i class="fa-brands fa-google"></i>
                            Entrar com Google
                        </button>
                    </div>
                    <div class="w-full lg:w-1/2 ml-0 lg:ml-2">
                        <button type="button"
                            class="w-full flex justify-center items-center gap-2 bg-gray-800 text-sm text-gray-400 p-2 rounded-md hover:bg-gray-50 duration-300">
                            <i class="fa-brands fa-github"></i>
                            Entrar com Github
                        </button>
                    </div>
                </div>
                <div class="mt-4 text-sm text-gray-600 text-center">
                    <p>ou com email</p>
                </div>
                <form action="{{ route('login') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-400">Email</label>
                        <input type="text" id="email" name="email"
                            class="text-gray-300 bg-gray-600 mt-1 p-2 w-full rounded-md focus:border-gray-200 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-gray-600 transition-colors duration-300">
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-400">Senha</label>
                        <input type="password" id="password" name="password"
                            class="text-gray-300 bg-gray-600 mt-1 p-2 w-full rounded-md focus:border-gray-200 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-gray-600 transition-colors duration-300">
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full bg-gray-800 text-white p-2 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 transition-colors duration-300">Entrar</button>
                    </div>
                </form>
                <div class="mt-4 text-sm text-gray-600 text-center">
                    <p>Já tem uma conta?<a href="#" class="text-black hover:underline"> Registrar aqui</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    @yield('home')
    @yield('docker')
    @yield('laravel')
    @yield('arquitetura')
    @yield('metodos')


    <script>
        var sectionBase = document.getElementById("base");
        var sectionRegistrar = document.getElementById("registrar");
        var sectionEntrar = document.getElementById("entrar");
        sectionRegistrar.setAttribute("hidden", "true");
        sectionEntrar.setAttribute("hidden", "true");
        document.addEventListener('DOMContentLoaded', function() {
            const loginModal = document.getElementById('login-modal');
            const loginButton = document.querySelector('.login-button');

            loginButton.addEventListener('click', function() {
                loginModal.classList.toggle('hidden');
            });
        });

        function loginVisibility() {
            if (sectionEntrar.hasAttribute("hidden")) {
                sectionBase.classList.remove("hidden");
                sectionRegistrar.setAttribute("hidden", "true");
                sectionEntrar.removeAttribute("hidden");
            } else {
                sectionEntrar.setAttribute("hidden", "true");
                sectionBase.classList.add("hidden");
            }
        }
        function registerVisibility() {
            if (sectionRegistrar.hasAttribute("hidden")) {
                sectionBase.classList.remove("hidden");
                sectionEntrar.setAttribute("hidden", "true");
                sectionRegistrar.removeAttribute("hidden");
            } else {
                sectionRegistrar.setAttribute("hidden", "true");
                sectionBase.classList.add("hidden");
            }
        }
    </script>
@endsection