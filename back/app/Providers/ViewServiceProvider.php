<?php

namespace App\Providers;

use App\View\Composer\CompanyComposer;
use Faker\Provider\Company;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // no se usa nada que no este registrado en el contenedor de servicios, por lo que no es necesario registrar nada aquí
            // Aquí puedes registrar cualquier servicio relacionado con las vistas si es necesario
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::share('prueba', 'Este es un valor compartido en todas las vistas');
        View::composer('welcome', CompanyComposer::class);
   
    }


}
