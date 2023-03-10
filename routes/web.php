<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Shop\BaseController;
use \App\Http\Controllers\BasketController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'show']);

Route::get('/shop/{slug?}', [BaseController::class, 'resolve'])
	->where('slug', '.*')
	->name('shop');

Route::prefix('basket')->controller(BasketController::class)->group(function() {
	Route::get('/', 'index')
		->name('basket');
	Route::post('/{product}', 'add')->name('basket.add');
	Route::delete('/{basketItemId}', 'remove')->name('basket.remove');
	Route::patch('/{basketItemId}', 'update')->name('basket.update');
});