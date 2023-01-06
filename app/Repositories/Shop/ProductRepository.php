<?php

namespace App\Repositories\Shop;

use App\Models\Shop\Product;
use Illuminate\Database\Eloquent\Builder;

class ProductRepository extends CoreRepository
{
	
	protected function getModelClass()
	{
		return Product::class;
	}
	
	public function getCategoryItems(int $categoryId) {
		return $this->startConditions()->whereHas('relation', function(Builder $query) use ($categoryId) {
			$query->where('parent_id', $categoryId);
		})->with(['relation'])->get();
	}
}