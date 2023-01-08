<?php
namespace App\Models;

use App\Interfaces\BasketInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 *
 * @property int $id
 */
class Basket extends Model implements BasketInterface
{
	public function items(): HasMany
	{
		return $this->hasMany(BasketItem::class);
	}
}