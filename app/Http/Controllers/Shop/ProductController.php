<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Shop\Product;

class ProductController extends Controller
{
	public function show(Product $item)
	{
		return view('app.shop.item')->with('item', $item);
	}
}
