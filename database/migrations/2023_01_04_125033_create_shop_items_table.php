<?php

use App\Models\ShopCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_items', function (Blueprint $table) {
			$table->id();
			$table->foreignIdFor(ShopCategory::class, 'category_id')->constrained('shop_categories');
	
			$table->string('slug');
			$table->string('title');
			$table->text('description')->nullable();
			$table->integer('price')->unsigned();
			
			$table->unique(array('category_id', 'slug'));
	
			$table->timestamps();
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_items');
    }
};
