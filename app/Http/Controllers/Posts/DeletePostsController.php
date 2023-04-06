<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Exception;
use Illuminate\Http\Request;

class DeletePostsController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        try {
            $posts = Posts::find($id);
            $posts->delete();
            return response()->json('Post deletado(a) com sucesso', 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }
}
