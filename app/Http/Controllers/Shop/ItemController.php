<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\ShopItem;

class ItemController extends Controller
{
	public function show(ShopItem $item)
	{
		return view('app.shop.item')->with('item', $item);
	}
}
