<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            'image' => 'required',
            'description' => 'required|max:255',
            'likes' => 'required|integer',
        ]);
        $post = Post::create($validated);

        return response()->json($post);
    }

    public function index() {
        return response()->json(Post::all());
    }
}
