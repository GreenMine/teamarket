<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Model;

/**
 *
 * @property Relation $relation
 */
abstract class CoreModel extends Model {
	
	public function relation()
	{
		return $this->belongsTo(Relation::class);
	}
	
	public function getRouteKey()
	{
		return $this->relation->getPath();
	}
}
