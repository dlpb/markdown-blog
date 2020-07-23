<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>dlpb.uk's blog</title>
    <!--<link rel="stylesheet" href="blog.css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/">blog.dlpb.uk</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
      </div>
    </nav>
    <div class="container">
        <div class="blog">
            <?php include 'postListRenderer.php'; ?>
        </div>
    </div>
</body>
<footer>
    <div class="container">
        <hr/>
        <p>
             Copyright &copy; dlpb.uk 2010-<?php echo date("Y");?>. This is a personal website and any views or opinions expressed within are my own.
        </p>
    </div>
</footer>
</html>
