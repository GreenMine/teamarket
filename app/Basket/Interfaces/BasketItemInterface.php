<?php

namespace App\Basket\Interfaces;

use Illuminate\Database\Eloquent\Relations\MorphTo;

interface BasketItemInterface
{
    public function basketable(): MorphTo;

    public function setQuantity(int $quantity);

    public function getPrice();
}
