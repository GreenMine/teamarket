<?php

namespace App\Repositories\Shop;

use App\Models\ShopCategory;
use Illuminate\Database\Eloquent\Builder;

class ShopCategoryRepository extends ShopRepository
{
	
	protected function getModelClass()
	{
		return ShopCategory::class;
	}
	
	public function getChildCategories(int $categoryId = ShopCategory::ROOT_PARENT_ID) {
		return $this->startConditions()->whereHas('relation', function(Builder $query) use ($categoryId) {
			$query->where('parent_id', $categoryId);
			if($categoryId == ShopCategory::ROOT_PARENT_ID) {
				$query->where('id', '!=', ShopCategory::ROOT_PARENT_ID);
			}
		})->get();
	}
}
