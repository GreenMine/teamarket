<?php

namespace App\Models;

use App\Interfaces\BasketItemInterface;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 *
 * @property int $id
 */
class BasketItem extends Model implements BasketItemInterface
{
	protected $fillable = [
		'quantity'
	];
	
	public function basketable(): MorphTo {
		return $this->morphTo();
	}
	
	public function quantity() : Attribute {
		return Attribute::make(
			set: function($q) {
				if ($q > 0) {
					return $q;
				} else {
					$this->delete();
				}
			}
		);
	}
	
	public function price() : Attribute {
		return Attribute::make(
			get: fn() => $this->quantity * $this->basketable->getPrice()
		);
	}
}