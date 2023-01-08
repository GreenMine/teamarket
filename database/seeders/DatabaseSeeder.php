<?php

namespace Database\Seeders;

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
	
		 \App\Models\Shop\Category::factory(10)->create();
		 \App\Models\Shop\Product::factory(100)->create();

		$this->call(RecursiveCategories::class);
    }
}
