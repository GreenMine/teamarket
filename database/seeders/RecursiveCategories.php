<?php

namespace Database\Seeders;

use App\Models\Shop\Category;
use App\Models\Shop\Relation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RecursiveCategories extends Seeder
{
	const RECURSIVE_DEPTH = 64;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$categories = array();
		$parent = Category::ROOT_PARENT_ID;
		
		for($i = 1; $i <= self::RECURSIVE_DEPTH; $i++) {
			$categoryName = 'Рекурсивная #' . $i;
			$relationId = Relation::create([
					'parent_id' => $parent,
					'slug' => Str::slug($categoryName)
				])->id;
			$parent = $relationId;
			
			$categories[] = [
				'relation_id' => $relationId,
				'title' => $categoryName
			];
		}
		
		DB::table('shop_categories')->insert($categories);
    }
}
