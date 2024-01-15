<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
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
        Model::unguard(); //deshabilitamos la proteccion contra asignacion masiva
        //siempre y cuando no creemos ni actualicemos a traves del metodo $request->all()
        //ya que este metodo envia TODOS los campos del dato que queremos crear y actualizar, es inseguro
        //siempre utilizar el metodo validated del SavePostRequest
    }
}
