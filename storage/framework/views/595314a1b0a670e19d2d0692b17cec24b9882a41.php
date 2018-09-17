    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>My blog</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="nav-link active" href="/posts">Home</a>
          <a class="nav-link" href="/posts/create">Create</a>
          <a class="nav-link" href="/register">Register</a>
          <a class="nav-link" href="/login">Login</a>
          <a class="nav-link" href="/logout">Logout</a>
          <?php if(Auth::check()): ?>
          <a class="nav-link ml-auto" href="#"><?php echo e(Auth::user()->name); ?></a>
          <?php endif; ?>
        </nav>
      </div>
    </div>

