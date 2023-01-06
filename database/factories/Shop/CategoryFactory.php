<?php

namespace Database\Factories\Shop;

use App\Models\Shop\Relation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop\Category>
 */
class CategoryFactory extends Factory
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
			'relation_id' => Relation::create([
				'parent_id' => 0,
				'slug' => Str::slug($categoryName)
			]),
			'title' => $categoryName
		];
	}
}
