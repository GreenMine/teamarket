<?php

namespace App\Models\Shop;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 *
 * @property integer $id
 * @property Relation $relation
 * @property string $title
 * @property
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property Carbon $deleted_at
 */
class Category extends CoreModel
{
	use HasFactory;
	
	protected $table = 'shop_categories';
	
	const ROOT_PARENT_ID = 0;//FIXME: move to Repository
	
}
