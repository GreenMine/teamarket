<?php

namespace App\Repositories;

use App\Models\Relation;
use App\Models\ShopCategory;

class RelationRepository extends CoreRepository
{
	
	protected function getModelClass()
	{
		return Relation::class;
	}
	
	/**
	 * Resolving identifier by slug
	 *
	 * @param string $path
	 * @return int|false
	 */
	public function resolveBySlug(string $path)
	{
		$slugs = explode('/', $path);
		
		$iterator = collect($slugs)->getIterator();
		return $this->recursiveFindBySlug(ShopCategory::ROOT_PARENT_ID, $iterator);
	}
	
	/**
	 * Recursive finding last identifier by slug
	 *
	 * @param int $parent_id
	 * @param \ArrayIterator $iterator
	 * @return int|false
	 */
	private function recursiveFindBySlug(int $parent_id, \ArrayIterator $iterator)
	{
		if (!$iterator->valid()) {
			return $parent_id;
		}
		
		$next_slug = $iterator->current();
		$iterator->next();
		
		$identifier = $this->startConditions()
							->where('parent_id', $parent_id)
							->where('slug', $next_slug)
							->first();
		if (!$identifier instanceof Relation) {
			return false;
		}
		
		return $this->recursiveFindBySlug($identifier->id, $iterator);
	}
}
