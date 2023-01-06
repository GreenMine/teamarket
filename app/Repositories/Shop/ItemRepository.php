<?php

namespace App\Repositories\Shop;

use App\Models\Shop\Item;
use Illuminate\Database\Eloquent\Builder;

class ItemRepository extends CoreRepository
{
	
	protected function getModelClass()
	{
		return Item::class;
	}
	
	public function getCategoryItems(int $categoryId) {
		return $this->startConditions()->whereHas('relation', function(Builder $query) use ($categoryId) {
			$query->where('parent_id', $categoryId);
		})->with(['relation'])->get();
	}
}