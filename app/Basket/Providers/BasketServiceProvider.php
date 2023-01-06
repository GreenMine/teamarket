<?php

namespace App\Basket\Providers;

use Illuminate\Support\ServiceProvider;

class BasketServiceProvider extends ServiceProvider
{
    public function register() {}

    public function boot() {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
