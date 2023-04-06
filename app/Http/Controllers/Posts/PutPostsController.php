<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Exception;
use Illuminate\Http\Request;

class PutPostsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id)
    {
        try {
            $posts = Posts::find($id);
            $posts->update($request->only([
                "title",
                "content",
                "font",
                "actived",
            ]));
            return response()->json($posts, 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
