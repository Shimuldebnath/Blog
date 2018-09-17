<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest')->except(['destroy']);
	}
    public function create()
    {
    	return view('posts.login');
    }

    public function store()
    {
    	if(!auth()->attempt(request(['email','password']))){
    		return back()->withErrors([
    			'message' => 'Please check your credentials'
    			]);
    	}

    	return redirect('/posts');
    }

    public function destroy()
    {
    	auth()->logout();
    	return redirect('/posts');
    }
}