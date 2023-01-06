<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Shop\Category;
use App\Repositories\Shop\ItemRepository;

class CategoryController extends Controller
{
	
	public function __construct(
		private ItemRepository $itemRepository
	) {}
	
	public function show(Category $category)
	{
		$products = $this->itemRepository->getCategoryItems($category->id);
		return view('app.shop.category', ['category' => $category, 'products' => $products]);
	}
}
