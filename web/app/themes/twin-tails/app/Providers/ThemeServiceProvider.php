<?php

namespace App\Providers;

use App\Services\AcfService;
use App\Services\ComicService;
use App\Services\RewriteService;
use Roots\Acorn\Sage\SageServiceProvider;

class ThemeServiceProvider extends SageServiceProvider
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
        $this->app->singleton('acf', AcfService::class);
        $this->app->singleton('rewrite', RewriteService::class);
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
        $this->app->make('acf');
        $this->app->make('rewrite');
    }
}
