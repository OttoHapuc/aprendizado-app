<?php

namespace App\Providers;

use App\View\Components\Atoms\Image;
use App\View\Components\Atoms\InputSelect;
use App\View\Components\Atoms\InputText;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('image', Image::class);
        Blade::component('input-select', InputSelect::class);
        Blade::component('input-text', InputText::class);
    }
}
