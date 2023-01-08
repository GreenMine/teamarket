<?php

namespace App\Models;

use App\Interfaces\BasketItemInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 *
 * @property int $id
 * @property Basket $basket
 */
class BasketItem extends Model implements BasketItemInterface
{
	public function basketable(): MorphTo {
		return $this->morphTo();
	}
	
	public function setQuantity(int $quantity) {//FIXME: attribute
		if ($quantity > 0) {
			$this->quantity = $quantity;
			$this->save();
		} else {
			$this->delete();
		}
	}
	
	public function getPrice() {//FIXME: attribute
		return $this->quantity * $this->basketable->getPrice();
	}
}