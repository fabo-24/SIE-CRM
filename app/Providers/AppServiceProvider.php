<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Permission\PermissionServiceProvider;

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
         // Esto es usualmente automático, pero si no funciona, registra la directiva tú mismo:
    \Blade::directive('role', function ($role) {
        return "<?php if(auth()->check() && auth()->user()->hasRole($role)): ?>";
    });

    \Blade::directive('endrole', function () {
        return "<?php endif; ?>";
    });
    }
}
