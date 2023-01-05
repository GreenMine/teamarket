<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Repositories\RelationRepository;
use Illuminate\Http\Request;

class BaseController extends Controller
{
	public function show(Request $request, string $path = '') {
		/** @var RelationRepository $identifierRepository */
		$identifierRepository = app(RelationRepository::class);
		
		dd($identifierRepository->resolveIdentifierBySlug($path));
	}
}
