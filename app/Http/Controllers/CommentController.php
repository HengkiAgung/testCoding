<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Comment;

class CommentController extends Controller
{
    function store(Request $request) {
        Comment::create([
            "comment" => $request->comment,
            "post_id" => $request->postId,
        ]);

        return redirect('/post');
    }
}
