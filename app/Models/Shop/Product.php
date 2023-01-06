<?php

namespace App\Models\Shop;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $price
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class Product extends CoreModel
{
	use HasFactory;
	
	protected $table = 'shop_products';
}
