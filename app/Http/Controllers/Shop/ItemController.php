<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\ShopItem;
use Illuminate\Http\Request;

class ItemController extends Controller
{
	public function show(ShopItem $item) {
		return view('app.shop.item', compact($item));
	}
}
