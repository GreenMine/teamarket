<?php

namespace App\Repositories\Shop;

use App\Models\ShopCategory;

class ShopCategoryRepository extends ShopRepository {
	
	protected function getModelClass() {
		return ShopCategory::class;
	}
}
