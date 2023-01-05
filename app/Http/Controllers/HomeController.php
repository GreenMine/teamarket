<?php

namespace App\Http\Controllers;

use App\Models\ShopCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function show() {
		$categories = ShopCategory::all();
		return view('app.home', compact('categories'));
	}
}
