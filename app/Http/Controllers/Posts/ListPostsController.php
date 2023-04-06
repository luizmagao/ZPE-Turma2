<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Exception;
use Illuminate\Http\Request;

class ListPostsController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            $posts = Posts::with('category')->get();
            return response()->json($posts, 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
