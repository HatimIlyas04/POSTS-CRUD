<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Show the form for creating a new comment.
     *
     * @param  int  $postId
     * @return \Illuminate\Http\Response
     */
    public function create($postId)
    {
        $post = Post::findOrFail($postId);
        return view('comments.create', compact('post'));
    }

    /**
     * Store a newly created comment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'content' => 'required|string',
        ]);

        Comment::create([
            'post_id' => $request->post_id,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.index');
    }
}
