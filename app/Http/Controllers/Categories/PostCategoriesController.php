<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Exception;
use Illuminate\Http\Request;

class PostCategoriesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        try {
            $category = Categories::create(
                $request->only([
                    'description',
                    'actived'
                ])
            );
            return response()->json($category, 201);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
