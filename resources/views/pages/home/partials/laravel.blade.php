@extends('pages.home.home')

@section('laravel')
    <article class="mx-2 md:mx-8 p-2 md:p-8 bg-gray-900 rounded-lg shadow-md shadow-2xl">

        <h2 class="text-center text-5xl font-bold mb-2 text-red-800">Laravel</h2>
        <section>
            <p class="text-lg mb-4 text-gray-300">
                O Laravel é um framework PHP poderoso, dinâmico e com uma sintaxe expressiva e elegante. Ele oferece
                uma série de ferramentas e serviços que ajudam a criar aplicativos robustos e escaláveis. O Laravel
                é uma escolha popular entre desenvolvedores devido à sua simplicidade e facilidade de uso.
            </p>
            <p class="text-lg mb-4 text-gray-300">
                Embora em muitos aspectos seja altamente personalizável em sua implementação e construção, o Laravel
                oferece uma quantidade significativa de funcionalidades internas (helpers, classes, métodos, etc.) que
                facilitam a vida do desenvolvedor. No entanto, como em toda linguagem de programação, é necessário um
                tempo de aprendizado e prática para se tornar um desenvolvedor eficiente, com boas práticas, capaz de
                construir aplicações de qualidade, seguras e escaláveis.
            </p>
        </section>
        <h2 class="text-3xl font-bold my-4 text-gray-300">Observe nosso compilado de comandos úteis para estrutura e
            desenvolvimento:</h2>
        <section>
            <div class="px-2 py-4 border border-gray-500 rounded-md">
                <h3 class="text-2xl underline font-bold mb-2 text-gray-300">Funcionamento</h3>
                <p class="text-lg mb-4 text-gray-300">
                    Toda aplicação é composta por uma série de arquivos e diretórios que trabalham juntos para o seu
                    funcionamento.
                    O Laravel segue o padrão MVC (Model-View-Controller), que é uma forma de organizar o código da
                    aplicação. Embora
                    este projeto siga essa abordagem, porem somaremos outro modelo estrutural, o SOLID
                    <a href="/Arquitetura">
                        (clique aqui para saber
                        mais sobre
                        SOLID neste projeto)
                    </a>, iremos explorar a maioria das funcionalidades do Laravel, garantindo que as
                    interações dos
                    arquivos sejam funcionais, eficientes e seguras.
                </p>
                <h4 class="text-2xl underline font-bold mb-2 text-gray-300 text-center">Visão geral:</h4>
                <h5 class="text-xl underline font-bold mb-2 text-gray-300">Roteamento:</h5>
                <ul class="text-gray-300">
                    <li class="mb-4">
                        <p class="text-green-400">Diretório:</p>
                        <div class="flex flex-col relative">
                            <x-card-view.code-view>
├./
├── /routes/
├──├── /web.php
                            </x-card-view.code-view>
                        </div>
                    </li>
                    <li class="mb-4">
                        <p class="text-green-400">Tipos de requisições:</p>
                        <div class="flex flex-col relative">
                            <x-card-view.code-view>
                                Route::get(); Route::post(); Route::put(); Route::delete(); Route::patch();
                            </x-card-view.code-view>
                            <x-.buttons.button-copy class="px-4 h-10" />
                        </div>
                    </li>
                    <li class="mb-4">
                        <p class="text-green-400">Realizando uma requisição que passará por um processo:</p>
                        <div class="flex flex-col relative">
                            <x-card-view.code-view>
use App\Http\Controllers\UserController;

Route::get('/user', [UserController::class, 'metodo']);
                            </x-card-view.code-view>
                            <x-.buttons.button-copy class="px-4 h-10" />
                        </div>
                    </li>
                    <li class="mb-4">
                        <p class="text-green-400">Realizando uma requisição que retornará uma página:</p>
                        <div class="flex flex-col relative">
                            <x-card-view.code-view>
Route::get('/rota', function () {
    return view('nome_da_view');
});
                            </x-card-view.code-view>
                            <x-.buttons.button-copy class="px-4 h-10" />
                        </div>
                    </li>
                </ul>
                <h5 class="text-xl underline font-bold mb-2 text-gray-300">Middlewae:</h5>
                <ul class="text-gray-300">
                    <li class="mb-4">
                        <p class="text-green-400">Método de contrução automática de uma classe Middleware pelo laravel:</p>
                        <div class="flex flex-col relative">
                            <x-card-view.code-view>
                                php artisan make:middleware Nome_do_middleware
                            </x-card-view.code-view>
                            <x-.buttons.button-copy class="px-4 h-10" />
                        </div>
                    </li>
                    <li class="mb-4">
                        <p class="text-green-400">Utilizando Middleware:</p>
                        <div class="flex flex-col relative">
                            <x-card-view.code-view>
use App\Http\Middleware\Authenticate;

Route::get('/profile', function () {
    // ...
})->middleware(Authenticate::class);
                            </x-card-view.code-view>
                            <x-.buttons.button-copy class="px-4 h-10" />
                        </div>
                    </li>
                    <li class="mb-4">
                        <p class="text-green-400">Utilizando dois ou mais middlewares:</p>
                        <div class="flex flex-col relative">
                            <x-card-view.code-view>
use App\Http\Middleware\First;
use App\Http\Middleware\Second;

Route::get('/', function () {
    // ...
})->middleware([First::class, Second::class]);
                            </x-card-view.code-view>
                            <x-.buttons.button-copy class="px-4 h-10" />
                        </div>
                    </li>
                    <li class="mb-4">
                        <p class="text-green-400">Agrupando em um ou mais processos de Middlewares ou anulando o processo
                            dentro do grupo:</p>
                        <div class="flex flex-col relative">
                            <x-card-view.code-view>
use App\Http\Middleware\EnsureTokenIsValid;

Route::middleware([EnsureTokenIsValid::class])->group(function () {
    Route::get('/', function () {
        // ...
    })->withoutMiddleware([EnsureTokenIsValid::class]);

    Route::get('/profile', function () {
        // ...
    });
});
                            </x-card-view.code-view>
                            <x-.buttons.button-copy class="px-4 h-10" />
                        </div>
                    </li>
                </ul>
                <h5 class="text-xl underline font-bold mb-2 text-gray-300">Controller:</h5>
                <ul class="text-gray-300">
                    <li class="mb-4">
                        <p class="text-green-400">Método de contrução automática de uma classe Controller pelo laravel::</p>
                        <div class="flex flex-col relative">
                            <x-card-view.code-view>
                                php artisan make:controller Nome_do_controller
                            </x-card-view.code-view>
                            <x-.buttons.button-copy class="px-4 h-10" />
                        </div>
                    </li>
                </ul>
                <h5 class="text-xl underline font-bold mb-2 text-gray-300">Service/Provider:</h5>
                <ul class="text-gray-300">
                    <li class="mb-4">
                        <p class="text-green-400">Método de contrução automática de uma classe Controller pelo laravel::</p>
                        <div class="flex flex-col relative">
                            <x-card-view.code-view>
                                php artisan make:provider Nome_do_provider
                            </x-card-view.code-view>
                            <x-.buttons.button-copy class="px-4 h-10" />
                        </div>
                    </li>
                </ul>
            </div>
            <div class="px-2 py-4 border border-gray-500 rounded-md">
                <h3 class="text-2xl underline font-bold mb-2 text-gray-300">Banco de Dados</h3>
                <ul class="text-gray-300">
                    <li class="mb-4">
                        <p class="text-green-400">Executando a(as) migration(s) para configurar a estrutura do
                            banco de
                            dados</p>
                        <div class="flex flex-col relative">
                            <x-card-view.code-view>
                                php artisan migrate
                            </x-card-view.code-view>
                            <x-.buttons.button-copy class="px-4 h-10" />
                        </div>
                    </li>
                    <li class="mb-4">
                        <p class="text-green-400">Criar um arquivo migration</p>
                        <div class="flex flex-col relative">
                            <x-card-view.code-view>
                                php artisan make:migration Nome_da_migration
                            </x-card-view.code-view>
                            <x-.buttons.button-copy class="px-4 h-10" />
                        </div>
                    </li>
                    <li class="mb-4">
                        <p class="text-green-400">Preencher o banco de dados com dados base ou teste</p>
                        <div class="flex flex-col relative">
                            <x-card-view.code-view>
                                php artisan db:seed
                            </x-card-view.code-view>
                            <x-.buttons.button-copy class="px-4 h-10" />
                        </div>
                    </li>
                    <li class="mb-4">
                        <p class="text-green-400">Criar um arquivo Seed</p>
                        <div class="flex flex-col relative">
                            <x-card-view.code-view>
                                php artisan make:seed Nome_da_seed
                            </x-card-view.code-view>
                            <x-.buttons.button-copy class="px-4 h-10" />
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </article>
    <p class="text-lg text-center text-gray-300">
        Pronto para começar? Consulte a
        <a href="https://laravel.com/docs" class="text-blue-500 hover:underline">
            documentação oficial do Laravel
        </a> e comece a construir aplicativos incríveis!
    </p>
@endsection
