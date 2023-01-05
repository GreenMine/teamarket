<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\ShopCategory;

class CategoryController extends Controller
{
	public function show(ShopCategory $category)
	{
		return view('app.shop.category');
	}
}
