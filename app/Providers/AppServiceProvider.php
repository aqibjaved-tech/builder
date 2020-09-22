<?php

namespace App\Providers;

use App\Repositories\EloquentTodo;
use App\Repositories\TodoInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


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
        //
        $this->app->singleton(TodoInterface::class, EloquentTodo::class);
        Schema::defaultStringLength(191);
    }
}
