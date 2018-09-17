<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\welcome;
use App\User;
use App\Http\Requests\RegistrationRequest;

class RegisterController extends Controller
{
    public function create()
    {
    	return view('posts.register');
    }

    public function store(RegistrationRequest $request)
    {
        $request->persist();
    	
    	/*$user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password'=>bcrypt(request('password'))
            ]);

    	auth()->login($user);
        \Mail::to($user)->send(new welcome($user));*/
        session()->flash('message','Thanks for signing up');
    	return redirect('/posts');

    }
}
