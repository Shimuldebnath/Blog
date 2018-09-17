@extends('layout.app')

@section('content')
<div class="col-sm-8">
	<h2> Sign in</h2>
	<form method="POST" action="/login">
	{{csrf_field()}}
		<div class="form-group">
			<label for="email">Email Address</label>
			<input type="email" class="form-control" id="email" name="email">
		</div>

		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="password" name="password">
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-info">Login</button>
		</div>
		
	</form>

	@include('partials.errors')
</div>
@endsection