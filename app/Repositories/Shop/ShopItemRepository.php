<?php

namespace App\Repositories\Shop;

use App\Models\ShopItem;
use Illuminate\Database\Eloquent\Builder;

class ShopItemRepository extends ShopRepository
{
	
	protected function getModelClass()
	{
		return ShopItem::class;
	}
	
	public function getCategoryItems(int $categoryId) {
		return $this->startConditions()->whereHas('relation', function(Builder $query) use ($categoryId) {
			$query->where('parent_id', $categoryId);
		})->get();
	}
}