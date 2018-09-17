@extends('layout.app')

@section('content')
	<div class="col-sm-8 blog-main">
	<h2>Sign up here</h2>
		<hr>
	<form method="POST" action="/register">
		{{csrf_field()}}
  		<div class="form-group">
    		<label for="name">Name</label>
    		<input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
  		</div>

  		<div class="form-group">
    		<label for="email">Email</label>
    		<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  		</div>
  		
  		<div class="form-group">
    		<label for="tPassword">Password</label>
    		<input type="password" class="form-control" id="password1" placeholder="Password" name="password">
  		</div>

      <div class="form-group">
        <label for="Password_confirmation">Password Confirmation</label>
        <input type="password" class="form-control" id="password_confirmation" placeholder="Retype password" name="password_confirmation">
      </div>

  			<button type="submit" class="btn btn-primary">Submit</button>
	</form>

  @include('partials.errors')

	</div>
@endsection