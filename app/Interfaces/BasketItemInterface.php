<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 *
 * @property Basketable $basketable
 * @property int $quantity
 * @property int $price
 */
interface BasketItemInterface
{
    public function basketable() : MorphTo;

    public function quantity() : Attribute;

    public function price() : Attribute;
}
