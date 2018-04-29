<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sample Course Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Demo Course Website</a>
    </div>
    <ul class="nav navbar-nav pull-right">
      <li class="active"><a href="<?php echo url('/home'); ?>">Home</a></li>
      <li><a href="<?php echo url('/bookmark'); ?>">BookMarked Courses</a></li>
    </ul>
  </div>
</nav>


</body>
</html>

