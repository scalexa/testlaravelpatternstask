<?php

namespace App\Providers;

use App\Contracts\IRepositoryA;
use App\Contracts\IRepositoryB;
use App\Repositories\RepositoryAEloquent;
use App\Repositories\RepositoryBEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IRepositoryA::class, RepositoryAEloquent::class);
        $this->app->bind(IRepositoryB::class, RepositoryBEloquent::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
