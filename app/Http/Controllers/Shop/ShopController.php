<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Repositories\RelationRepository;

class ShopController extends Controller
{
	const CONTROLLERS_RELATION = [
		\App\Models\ShopCategory::class => CategoryController::class,
		\App\Models\ShopItem::class => ItemController::class
	];
	
	public function resolve(string $path = '') {
		/** @var RelationRepository $relationRepository */
		$relationRepository = app(RelationRepository::class);
		$relationId = $relationRepository->resolveBySlug($path);
		
		if($relationId === false)
			abort(404);
		
		list($model, $controller) = $this->findRelationParent($relationId);
		return app($controller)->show($model);
	}
	
	private function findRelationParent(int $relationId) {
		foreach(self::CONTROLLERS_RELATION as $model => $controller) {
			$foundModel = app($model)->where('relation_id', $relationId)->first();
			if($foundModel !== null) {
				return [$foundModel, $controller];
			}
		}
		
		return false;
	}
}
