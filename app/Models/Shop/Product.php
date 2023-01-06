<?php

namespace App\Models\Shop;

use App\Basket\Interfaces\Basketable;
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
class Product extends CoreModel implements Basketable
{
	use HasFactory;
	
	protected $table = 'shop_products';
	
	public function getPrice() {
		return $this->price;
	}
	
	public function getName() {
		return $this->title;
	}
}
