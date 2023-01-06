<?php

namespace App\Basket\Models;

use App\Basket\Interfaces\Basketable;
use App\Basket\Interfaces\BasketItemInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 *
 * @property Basketable $basketable
 * @property int $quantity
 */
abstract class BasketItem extends Model implements BasketItemInterface
{
    public function basketable(): MorphTo
    {
        return $this->morphTo();
    }

    public function setQuantity(int $quantity)
    {
        if ($quantity > 0) {
            $this->quantity = $quantity;
            $this->save();
        } else {
            $this->delete();
        }
    }

    public function getPrice()
    {
        return $this->quantity * $this->basketable->getPrice();
    }
}
