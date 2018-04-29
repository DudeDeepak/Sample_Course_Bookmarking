

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sample Course Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>

#headding {
	margin-top: 9vh;
}
</style>

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Demo Course Website</a>
    </div>
    <ul class="nav navbar-nav pull-right">
      <li><a href="<?php echo url('/home'); ?>">Home</a></li>
      <li class="active"><a href="<?php echo url('/bookmark'); ?>">BookMarked Courses</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
  <h2 id="headding">Bookmarked Course Information</h2>
  <p>* Click on save course to bookmark the course details *</p>
  <div id="base" value="<?php echo url('/'); ?>"></div>            
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Course ID</th>
        <th>Course Name</th>
        <th>Course Type</th>
	<th>Bookmarked At</th>
      </tr>
    </thead>
    <tbody>

	<?php

		if(!empty($bookmarks)) {

		foreach($bookmarks as $bookmark) {

		
		echo "<tr>
			<td>".$bookmark['course_id']."</td>
			<td>".$bookmark['course_name']."</td>
			<td>".$bookmark['course_type']."</td>
			<td>".$bookmark['created_at']."</td>
		     </tr>";

		}
	} else 
		echo "<p> No bookmarks found </p>";

	?> 

    </tbody>
  </table>
</div>

</body>
</html>


