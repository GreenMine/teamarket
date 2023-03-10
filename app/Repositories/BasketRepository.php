<?php

namespace App\Repositories;

use App\Interfaces\Basketable;
use App\Interfaces\BasketInterface;
use App\Interfaces\BasketItemInterface;
use App\Models\Basket;
use App\Models\BasketItem;
use Illuminate\Support\Facades\Session;

class BasketRepository extends CoreRepository {
	private Basket $basket;
	
	public function __construct() {
		parent::__construct();
		$this->basket = self::getCurrent();
	}

	const BASKET_SESSION_KEY = 'basket_id';
	
	public function getModelClass() {
		return Basket::class;
	}
	
	public static function getCurrent(): BasketInterface {
		$basket = Basket::find(session(static::BASKET_SESSION_KEY));
		
		if (!$basket) {
			$basket = new Basket();
			$basket->save();
			Session::put(static::BASKET_SESSION_KEY, $basket->id);
		}
		
		return $basket;
	}
	
	public static function getNew(): BasketInterface {
		session()->forget(static::BASKET_SESSION_KEY);
		return static::getCurrent();
	}
	
	public function getList() {
		return $this->basket->items;
	}
	
	public function add(Basketable $basketable, int $quantity) {
		/** @var BasketItem $item */
		foreach ($this->basket->items as $item) {
			$currentBasketable = $item->basketable;
			if (get_class($currentBasketable) === get_class($basketable) &&
				$currentBasketable->getKey() === $basketable->getKey()
			) {
				$item->quantity += $quantity;
				$item->save();
				
				return;
			}
		}
		
		$basketItem = $this->basket->items()->getModel();
		
		$item = new $basketItem();
		$item->basket_id = $this->basket->id;
		$item->quantity = $quantity;
		$item->basketable_type = get_class($basketable);
		$item->basketable_id = $basketable->getKey();
		$item->save();
		
		$this->basket->items->add($item);
	}
	
	public function get(int $id) : BasketItem {
		return $this->basket->items
				->where('id', $id)
				->first();
	}
	
	public function update(int $id, array $data) {
		return $this->get($id)
					->update($data);
	}
	
	public function remove(int $id) : bool {
		return $this->get($id)->delete();
	}
	
	public function exists(int $id) : bool {
		return $this->get($id) instanceof BasketItemInterface;
	}
	
	public function getTotalPrice() : int {
		/** @var BasketItem $i */
		return $this->basket->items
				->map(fn($i) => $i->price)
				->sum();
	}
	
	public function getTotalAmount() : int {
		return $this->basket->items
			->map(fn($i) => $i->quantity)
			->sum();
	}
	
	public function isEmpty() : bool {
		return $this->getTotalAmount() == 0;
	}
}
