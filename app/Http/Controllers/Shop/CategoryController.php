<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Shop\Category;
use App\Repositories\Shop\CategoryRepository;
use App\Repositories\Shop\ProductRepository;

class CategoryController extends Controller
{
	
	public function __construct(
		private ProductRepository $itemRepository,
		private CategoryRepository $categoryRepository
	) {}
	
	public function show(Category $category)
	{
		$products = $this->itemRepository->getCategoryItems($category->id);
		$categories = $this->categoryRepository->getChildCategories($category->relation->id);
		return view('app.shop.category', [
			'category' => $category,
			'products' => $products,
			'categories' => $categories
		]);
	}
}
