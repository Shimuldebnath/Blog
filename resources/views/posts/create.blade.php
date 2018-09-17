@extends('layout.app')

@section('content')
<div class="col-sm-8 blog-main">
	<form method="POST" action="/posts">
		{{csrf_field()}}
  		<div class="form-group">
    		<label for="title">Title</label>
    		<input type="text" class="form-control" id="title" placeholder="title" name="title">
  		</div>
  		<div class="form-group">
    		<label for="body">Body</label>
   			 <textarea type="text" class="form-control" id="body" placeholder="body" name="body" row="7"></textarea>
  		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

	@include('partials.errors')
</div>
@endsection