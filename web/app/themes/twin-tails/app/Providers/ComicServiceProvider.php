<?php

namespace App\Providers;

use App\Services\ComicService;
use Roots\Acorn\Sage\SageServiceProvider;

class ComicServiceProvider extends SageServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();

        $this->app->singleton('comic', ComicService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        $this->app->make('comic');
    }
}
