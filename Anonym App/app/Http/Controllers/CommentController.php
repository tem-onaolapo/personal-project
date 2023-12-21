<?php

namespace App\Http\Controllers;

use App\Http\Resources\CommentResource;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        return new CommentResource($comments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function postcomment(Post $post){
        $allcomments = $post->comments()->get();

        return response()->json([
            'data' => $allcomments
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Post $post)
    {
        $validated = $request->validate([
            'comment' => 'required|max:255'
        ]);

        $query = $post->comments()->create($validated);
        $post->commentcount = $post->commentcount+1;
        $post->save();
        $data = new CommentResource($query);
        return response()->json([
            'data' => $data
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //

        $post = Post::find($comment->post_id);
        if($post->user_id === auth()->user()->id){
            $comment->delete();
            $post->commentcount = $post->commentcount-1;
            $post->save();
        }
        else{
            return response()->json([
                'message' => 'Sorry, You cannot delete this comment!'
            ]);
        }
        

    }
}
