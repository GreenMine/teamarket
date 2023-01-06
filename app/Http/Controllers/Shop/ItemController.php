<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Shop\Item;

class ItemController extends Controller
{
	public function show(Item $item)
	{
		return view('app.shop.item')->with('item', $item);
	}
}
