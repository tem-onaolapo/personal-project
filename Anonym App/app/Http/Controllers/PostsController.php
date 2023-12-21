<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResources;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderby('created_at', 'desc')->get();
        return new PostCollection($posts);
    }
    public function myQuestions(){
        $questions = Post::where('user_id', Auth::user()->id)->get();
        return new PostCollection($questions);
    //     return response()->json([
    //         'data' => $questions
    // ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            // 'body' => 'required',
        ]);

        $query = Auth::user()->post()->create($validated);
        return new PostResources($query);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return new PostResources($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        if(auth()->user()->can('update', $post)){
            $validated = $request->validate([
                'title' => 'required|max:255|sometimes',
                'body' => 'required|sometimes'
            ]);
    
                $post->update($validated);
                return new PostResources($post);
        }
        
        return response()->json([
            'message' => 'Sorry, you cannot edit this post!'
        ]);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        if(auth()->user()->can('delete', $post)){
        $post->delete();
        $post->comments()->delete();
        return response()->noContent();
        }
        return response()->json([
            'message' => 'Sorry, you cannot delete this post!'
        ]);
    }

    public function create_question(){

    }
}
