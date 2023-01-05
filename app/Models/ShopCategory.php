<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopCategory extends Model
{
	const ROOT_PARENT_ID = 0;
	
    use HasFactory;
	
	public function relation() {
		return $this->belongsTo(Relation::class);
	}
}
