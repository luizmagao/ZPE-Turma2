<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Exception;
use Illuminate\Http\Request;

class PostPostsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        try {
            $category = Posts::create(
                $request->only([
                    'category_id',
                    'title',
                    'content',
                    'font',
                    'actived'
                ])
            );
            return response()->json($category, 201);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
