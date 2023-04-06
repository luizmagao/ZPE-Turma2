<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Exception;
use Illuminate\Http\Request;

class DeleteCategoriesController extends Controller
{
    public function __invoke(Request $request, Categories $category)
    {
        try {
            $category->delete();
            return response()->json('Categoria deletado(a) com sucesso', 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
