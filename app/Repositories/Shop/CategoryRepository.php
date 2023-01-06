<?php

namespace App\Repositories\Shop;

use App\Models\Shop\Category;
use Illuminate\Database\Eloquent\Builder;

class CategoryRepository extends CoreRepository
{
	
	protected function getModelClass()
	{
		return Category::class;
	}
	
	public function getChildCategories(int $categoryId = Category::ROOT_PARENT_ID) {
		return $this->startConditions()->whereHas('relation', function(Builder $query) use ($categoryId) {
			$query->where('parent_id', $categoryId);
			if($categoryId == Category::ROOT_PARENT_ID) {
				$query->where('id', '!=', Category::ROOT_PARENT_ID);
			}
		})->get();
	}
}
