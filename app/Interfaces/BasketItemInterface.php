<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\MorphTo;

interface BasketItemInterface
{
    public function basketable(): MorphTo;

    public function setQuantity(int $quantity);

    public function price() : Attribute;
}
