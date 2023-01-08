<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 *
 * @property Collection<BasketItemInterface> $items
 */
interface BasketInterface
{
    public function items(): HasMany;
}
