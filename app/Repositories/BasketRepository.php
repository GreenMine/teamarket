<?php

namespace App\Repositories;

use App\Models\Basket;
use App\Models\Shop\Product;

class BasketRepository {
	public function __construct(
		private Basket $basket
	) {}
	
	public function getList() {
		return $this->basket->items;
	}
	
	public function add(Product $product, int $quantity) {
		return $this->basket->add($product, $quantity);
	}
	
	public function remove(int $id) {
		return $this->basket->remove($id);
	}
}
