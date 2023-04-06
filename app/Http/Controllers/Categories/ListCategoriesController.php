<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Categories;

class ListCategoriesController extends Controller
{
    public function __invoke(Request $request)
    {
        $categories = Categories::get();

        return response()->json($categories, 200);
    }
}
