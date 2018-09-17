<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentController extends Controller
{

    public function store(Post $post)
    {
    	//$post->addComment(request('body'));


    	/*$this->validate(request(),[
    		'body'=>'required|min:2'
    		]);
    	return back();*/

    	$comment= new Comment;
        $this->validate(request(),[
            'body'=>'required|min:2'
            ]);

        $comment->body=request('body');
        $comment->user_id=auth()->id();
        $comment->post_id=$post->id;
        $comment->save();
         
        return back();
    }
    
}