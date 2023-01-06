<?php

namespace App\Basket\Interfaces;

use Illuminate\Database\Eloquent\Relations\HasMany;

interface BasketInterface
{
    public static function getCurrent(): self;

    public static function getNew(): self;

    public function items(): HasMany;

    public function add(Basketable $basketable, int $quantity);
	
	public function get(int $id) : BasketItemInterface|null;

    public function getTotalPrice();

    public function getTotalAmount(): int;

    public function isEmpty(): bool;
}
