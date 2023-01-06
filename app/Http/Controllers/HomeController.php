<?php

namespace App\Http\Controllers;

use App\Repositories\Shop\CategoryRepository;

class HomeController extends Controller
{
	public function __construct(
		private CategoryRepository $categoryRepository
	) {}
	
	public function show()
	{
		$categories = $this->categoryRepository->getChildCategories();
		return view('app.home', compact('categories'));
	}
}
