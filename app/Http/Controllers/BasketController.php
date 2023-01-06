<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Shop\Product;

class BasketController extends Controller
{
	public function index() {
		
		$basket = Basket::getCurrent();
//		$product = Product::find(2);
//		$basket->add($product, 2);
		
		dd($basket->getTotalAmount());
	}
}
