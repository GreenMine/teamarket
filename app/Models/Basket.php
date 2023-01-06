<?php
namespace App\Models;

use App\Basket\Models\Basket as BasketModel;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 *
 * @property int $id
 * @property Collection<BasketItem> $items
 */
class Basket extends BasketModel
{
	public function items(): HasMany
	{
		return $this->hasMany(BasketItem::class);
	}
}