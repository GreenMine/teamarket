<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Shop\Relation;
use App\Models\Shop\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
		 
		 $this->create_root_category();
		 \App\Models\Shop\Category::factory(10)->create();
		 \App\Models\Shop\Item::factory(100)->create();
    }
	
	const ROOT_CATEGORY_NAME = 'Главная категория';
	private function create_root_category() {
		\App\Models\Shop\Category::create([
			'relation_id' => Relation::create([
				'parent_id' => Category::ROOT_PARENT_ID,
				'slug' => Str::slug(self::ROOT_CATEGORY_NAME)
			])->id,
			'title' => self::ROOT_CATEGORY_NAME
		 ]);
	}
}
