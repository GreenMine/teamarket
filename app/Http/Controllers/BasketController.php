<?php

namespace App\Http\Controllers;

use App\Http\Requests\Basket\AddRequest;
use App\Http\Requests\Basket\RemoveRequest;
use App\Http\Requests\Basket\UpdateRequest;
use App\Models\Shop\Product;
use App\Repositories\BasketRepository;

class BasketController extends Controller
{
	public function __construct(
		public BasketRepository $basketRepository
	) {}
	
	public function index() {
		$items = $this->basketRepository->getList();
		$totalPrice = $this->basketRepository->getTotalPrice();
		
		return view('app.basket', ['totalPrice' => $totalPrice])->with('items', $items);
	}
	
	public function add(AddRequest $request, Product $product) {
		$quantity = $request->get('quantity');
		$this->basketRepository->add($product, $quantity);
		
		return redirect()->route('basket');
	}
	
	public function remove(RemoveRequest $_, int $basket_item_id) {
		$this->basketRepository->remove($basket_item_id);
		
		return redirect()->route('basket');
	}
	
	public function update(UpdateRequest $request, int $basket_item_id) {
		$data = $request->all();
		$this->basketRepository->update($basket_item_id, $data);
		
		return redirect()->route('basket');
	}
}
