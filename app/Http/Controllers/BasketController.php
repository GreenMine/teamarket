<?php

namespace App\Http\Controllers;

use App\Http\Requests\Basket\AddRequest;
use App\Http\Requests\Basket\DeleteRequest;
use App\Models\BasketItem;
use App\Models\Shop\Product;
use App\Repositories\BasketRepository;

class BasketController extends Controller
{
	public function __construct(
		public BasketRepository $basketRepository
	) {}
	
	public function index() {
		$items = $this->basketRepository->getList();
		return view('app.basket')->with('items', $items);
	}
	
	public function add(AddRequest $request, Product $product) {
		$quantity = $request->get('quantity');
		$this->basketRepository->add($product, $quantity);
		
		return redirect()->route('basket');
	}
	
	public function remove(DeleteRequest $_, int $basket_item_id) {
		$this->basketRepository->remove($basket_item_id);
		
		return redirect()->back();
	}
	
	public function update(BasketItem $item) {
	
	}
}
