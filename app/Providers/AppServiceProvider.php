<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Carbon::setLocale('es');  ##Determinamos el idioma español
        setlocale(LC_TIME, 'es_ES');
        ##setlocale(LC_TIME, 'es_ES.utf8');   esta opción resume las dos anteriores
        Carbon::setUTF8(true);  ##Para el manejo de las tildes en los días que llevan acento
    }
}
