<?php

namespace App\Rules;

use App\Repositories\BasketRepository;
use Illuminate\Contracts\Validation\Rule;

class BasketExistsRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value) {
		/** @var BasketRepository $basket */
		$basket = app(BasketRepository::class);
		return $basket->exists($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message() {
        return 'Item doesn\'t exists in your basket';
    }
}
