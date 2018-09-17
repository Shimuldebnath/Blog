<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use App\User;
use Carbon\Carbon;

class PostController extends Controller
{

    public function __construct()
    {
        $this ->middleware('auth')->except(['index','show']);
    }
    public function index()
    {
        $posts = Post::latest();
        if($month=request('month'))
        {
            $posts->whereMonth('created_at',Carbon::parse($month)->month);
        }

        if($year=request('year'))
        {
            $posts->whereYear('created_at',$year);
        }
        $posts=$posts->get();

        $archives=Post::archives();
    
    	
    	return view('posts.index',compact('posts'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function show($id)
    {
    	$post = Post::find($id);
    	return view('posts.show',compact('post'));
    }

    public function store(Request $request)
    {

        $post= new Post;
        $this->validate(request(),[
            'title'=>'required|unique:posts',
            'body'=>'required'
            ]);

        $post->title=$request->title;
        $post->body=$request->body;
        $post->user_id=auth()->id();
        $post->save();
        session()->flash('message','Your post has been published now');
         
        return redirect('/posts');
    }
}
