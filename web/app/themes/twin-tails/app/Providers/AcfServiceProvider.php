<?php

namespace App\Providers;
use App\Services\AcfService;
use Illuminate\Contracts\Container\BindingResolutionException;
use Roots\Acorn\Sage\SageServiceProvider;

class AcfServiceProvider extends SageServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        $this->app->singleton('acf', AcfService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        $this->app->make('acf');
    }
}
