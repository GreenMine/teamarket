<?php

namespace App\Http\Controllers;

use App\Repositories\Shop\ShopCategoryRepository;

class HomeController extends Controller
{
	public function __construct(
		private ShopCategoryRepository $categoryRepository
	) {}
	
	public function show()
	{
		$categories = $this->categoryRepository->getChildCategories();
		return view('app.home', compact('categories'));
	}
}
