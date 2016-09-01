<?php

namespace TocaLeao\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('TocaLeao\Repositories\UserRepository',
            'TocaLeao\Repositories\UserRepositoryEloquent');

        $this->app->bind('TocaLeao\Repositories\CustomerRepository',
            'TocaLeao\Repositories\CustomerRepositoryEloquent');

        $this->app->bind('TocaLeao\Repositories\ProductRepository',
            'TocaLeao\Repositories\ProductRepositoryEloquent');
    }
}

