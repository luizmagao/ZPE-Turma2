<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Exception;
use Illuminate\Http\Request;

class PutCategoriesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Categories $category)
    {
        try {
            $category->update($request->only([
                'description',
                'actived'
            ]));
            return response()->json($category, 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
