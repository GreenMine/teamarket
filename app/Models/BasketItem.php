<?php

namespace App\Models;

use App\Interfaces\Basketable;
use App\Interfaces\BasketItemInterface;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 *
 * @property int $id
 * @property Basketable $basketable
 * @property int $quantity
 * @property int $price
 */
class BasketItem extends Model implements BasketItemInterface
{
	public function basketable(): MorphTo {
		return $this->morphTo();
	}
	
	public function setQuantity(int $quantity) {//FIXME: delete
		if ($quantity > 0) {
			$this->quantity = $quantity;
			$this->save();
		} else {
			$this->delete();
		}
	}
	
	public function price() : Attribute {
		return Attribute::make(
			get: fn() => $this->quantity * $this->basketable->getPrice()
		);
	}
}