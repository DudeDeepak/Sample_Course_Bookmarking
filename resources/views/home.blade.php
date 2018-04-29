<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sample Course Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="http://ksylvest.github.io/jquery-growl/stylesheets/jquery.growl.css" rel="stylesheet" type="text/css">
<script src='http://ksylvest.github.io/jquery-growl/javascripts/jquery.growl.js' type='text/javascript'></script>


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
      <li class="active"><a href="<?php echo url('/home'); ?>">Home</a></li>
      <li><a href="<?php echo url('/bookmark'); ?>">BookMarked Courses</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
  <h2 id="headding">Course Information</h2>
  <p>* Click on save course to bookmark the course details *</p>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Course ID</th>
        <th>Course Name</th>
        <th>Course Type</th>
        <th>Save Info</th>
      </tr>
    </thead>
    <tbody>

	 <?php
                $counter = 1;
                $course_elements = $arr['elements'];
                foreach($course_elements as $element) {

                echo "<tr>
                        <td id='course_id_".$counter."'>".$element['id']."</td>
                        <td id='course_name_".$counter."'>".$element['name']."</td>
                        <td id='course_type_".$counter."'>".$element['courseType']."</td>
                        <td><button name='".$counter."' type='button' class='btn btn-primary'>Save Course</button></td>
                     </tr>";

                        $counter += 1;
                }

        ?>

    </tbody>
  </table>
</div>

</body>
</html>

