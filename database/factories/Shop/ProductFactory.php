<?php

namespace Database\Factories\Shop;

use App\Models\Shop\Category;
use App\Models\Shop\Relation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop\Product>
 */
class ProductFactory extends Factory
{
	const TYPE_OF_TEA = [
		'Black',
		'Green',
		'Oolong',
		'White',
		'Pu-erh',
		'Yellow',
		'Herbal'
	];
	
	/**
	 * @var Category[] $categories
	 */
	private array $categories;
	
	public function __construct($count = null, ?Collection $states = null, ?Collection $has = null, ?Collection $for = null, ?Collection $afterMaking = null, ?Collection $afterCreating = null, $connection = null, ?Collection $recycle = null)
	{
		parent::__construct($count, $states, $has, $for, $afterMaking, $afterCreating, $connection, $recycle);
		$this->categories = Category::all()->toArray();
	}
	
	/**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
		$teaType = self::randElement(self::TYPE_OF_TEA);
		$itemName = $teaType . ' Tea ' . $this->faker->country();
		
		$randCategory = Category::find(self::randElement($this->categories)['id']);
	
        return [
			'relation_id' => Relation::create([
				'parent_id' => $randCategory->relation_id,
				'slug' => Str::slug($itemName)
			]),
			'title' => $itemName,
			'description' => $this->faker->realText(mt_rand(200, 1000)),
			'price' => mt_rand(1, 999) * pow(10, mt_rand(1, 4))
        ];
    }
	
	private static function randElement(array $array) {
		return $array[array_rand($array)];
	}
}
