<?php

namespace Database\Factories;

use App\Models\Identifier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShopCategory>
 */
class ShopCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
		$categoryName = $this->faker->company();
		return [
			'relation_id' => Identifier::create([
				'parent_id' => 0,
				'slug' => Str::slug($categoryName)
			]),
			'title' => $categoryName
		];
	}
}
