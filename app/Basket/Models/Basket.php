<?php

namespace App\Basket\Models;

use App\Basket\Interfaces\Basketable;
use App\Basket\Interfaces\BasketInterface;
use App\Basket\Interfaces\BasketItemInterface;
use Illuminate\Database\Eloquent\Model;

abstract class Basket extends Model implements BasketInterface
{
    const BASKET_SESSION_KEY = 'basket_id';

    public static function getCurrent(): BasketInterface
    {
        $basket = static::find(session(static::BASKET_SESSION_KEY));

        if (!$basket) {
            $basket = new static();
            $basket->save();
            session()->put(static::BASKET_SESSION_KEY, $basket->id);
        }

        return $basket;
    }

    public static function getNew(): BasketInterface
    {
        session()->forget(static::BASKET_SESSION_KEY);
        return static::getCurrent();
    }

    public function add(Basketable $basketable, int $quantity)
    {
		/** @var BasketItem $item */
		foreach ($this->items as $item) {
			$currentBasketable = $item->basketable;
            if (get_class($currentBasketable) === get_class($basketable) &&
				$currentBasketable->getKey() === $basketable->getKey()
			) {
                $item->quantity += $quantity;
                $item->save();

                return;
            }
        }

        $basketItem = $this->items()->getModel();

        $item = new $basketItem();
        $item->basket_id = $this->id;
        $item->quantity = $quantity;
        $item->basketable_type = get_class($basketable);
        $item->basketable_id = $basketable->getKey();
        $item->save();

//        unset($this->items);
    }
	
	public function get(int $id) : BasketItemInterface|null {
		return $this->items
					->where('id', $id)
					->first();
	}
	
	public function getTotalPrice()
    {
		return $this->items
					->map(fn($i) => $i->getPrice())
					->sum();
    }

    public function getTotalAmount(): int
    {
		return $this->items
					->map(fn($i) => $i->quantity)
					->sum();
    }

    public function isEmpty(): bool
    {
        return $this->getTotalAmount() == 0;
    }
}
