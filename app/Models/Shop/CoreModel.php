<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @property Relation $relation
 * @property string $link
 */
abstract class CoreModel extends Model {
	
	public function relation()
	{
		return $this->belongsTo(Relation::class);
	}
	
	public function link(): Attribute {
		return Attribute::make(
			get: fn () => route('shop', $this->relation->getPath()),
		);
	}
}
