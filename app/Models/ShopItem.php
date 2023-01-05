<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @property integer $id
 * @property Relation $relation
 * @property string $title
 * @property string $description
 * @property integer $price
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class ShopItem extends Model
{
    use HasFactory;
	
	public function relation() {
		return $this->belongsTo(Relation::class);
	}
	
	public function getRouteKey() {
		return $this->relation->getPath();
	}
}
