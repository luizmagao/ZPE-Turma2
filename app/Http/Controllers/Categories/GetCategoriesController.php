<?php

namespace App\Http\Controllers\Categories;

use App\Enums\CategoriesActivedEnums;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use Exception;
use Illuminate\Http\Request;

class GetCategoriesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Categories $category)
    {
        try {
            return response()->json($category, 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
