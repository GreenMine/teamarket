<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Relations\HasMany;

interface BasketInterface
{
    public function items(): HasMany;
}
