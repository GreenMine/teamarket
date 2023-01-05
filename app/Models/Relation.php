<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\LazyCollection;

/**
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string slug
 */
class Relation extends Model
{
    use HasFactory;
	public $timestamps = false;
	
	public function getParentsIterator($includeSelf = false) : LazyCollection {
		return LazyCollection::make(function() use ($includeSelf) {
			$current = $this;
			if($includeSelf) yield $current;
			
			while($current->parent_id != 0) {
				$current = Relation::find($current->parent_id);
				yield $current;
			}
		});
	}
	
	public function getPath() : string {
		return $this->getParentsIterator(true)
					->map(fn($p) => $p->slug)
					->reverse()
					->implode('/');
	}
	
	public function __toString()
	{
		return $this->getPath();
	}
}
