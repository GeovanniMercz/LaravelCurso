<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * El espacio de nombres del controlador de tu aplicación.
     * Si lo necesitas, puedes descomentar y usarlo.
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * El path al "home" de tu aplicación.
     *
     * Generalmente, los usuarios son redirigidos aquí después de iniciar sesión.
     */
    public const HOME = '/dashboard';

    /**
     * Define la ruta de carga para la aplicación.
     */
    public function boot(): void
    {
        parent::boot();

        $this ->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Define los grupos de rutas para la aplicación.
     */
    public function map(): void
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
    }

    /**
     * Define las rutas del grupo "web".
     */
    protected function mapWebRoutes(): void
    {
        Route::middleware('web')
            // ->namespace($this->namespace) // Solo si usas namespace antiguo
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define las rutas del grupo "api".
     */
    protected function mapApiRoutes(): void
    {
        Route::prefix('api')
            ->middleware('api')
            // ->namespace($this->namespace) // Solo si usas namespace antiguo
            ->group(base_path('routes/api.php'));
    }
}
