<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Aquí puedes registrar servicios o bindings si los necesitas
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Aquí puedes añadir lógica que se ejecute al arrancar la aplicación
    }
}
