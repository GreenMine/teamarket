<?php

namespace App\Providers;

use App\Repositories\BasketRepository;
use Illuminate\Support\ServiceProvider;

class BasketServiceProvider extends ServiceProvider
{
    public function register() {
		$this->app->singleton(BasketRepository::class, function ($app) {
			//TODO: maybe add basket loader class, which will be contain
			// getNew and getCurrent methods
			return new BasketRepository();
		});
	}

    public function boot() {}
}
