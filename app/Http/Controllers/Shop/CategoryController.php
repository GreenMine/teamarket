<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\ShopCategory;
use App\Repositories\Shop\ShopItemRepository;

class CategoryController extends Controller
{
	
	public function __construct(
		private ShopItemRepository $itemRepository
	) {}
	
	public function show(ShopCategory $category)
	{
		$products = $this->itemRepository->getCategoryItems($category->id);
		return view('app.shop.category', ['category' => $category, 'products' => $products]);
	}
}
