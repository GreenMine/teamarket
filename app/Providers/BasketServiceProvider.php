<?php

namespace App\Providers;

use App\Models\Basket;
use Illuminate\Support\ServiceProvider;

class BasketServiceProvider extends ServiceProvider
{
    public function register() {
		$this->app->singleton(Basket::class, function ($app) {
			return Basket::getCurrent();
		});
	}

    public function boot() {}
}
