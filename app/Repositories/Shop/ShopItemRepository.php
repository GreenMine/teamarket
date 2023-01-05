<?php

namespace App\Repositories\Shop;

use App\Models\ShopItem;

class ShopItemRepository extends ShopRepository
{
	
	protected function getModelClass()
	{
		return ShopItem::class;
	}
}