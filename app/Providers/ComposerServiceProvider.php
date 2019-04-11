<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'theme.layouts.site',
            'App\Http\ViewComposers\ServicesComposer'
        );

        view()->composer(
            'layouts.app',
            'App\Http\ViewComposers\AuthedUserComposer'

        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
