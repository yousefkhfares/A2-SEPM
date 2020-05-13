<?php
$tmp = $_FILES['file01']['tmp_name'];
    $dest = "Course_Guide/{$_FILES['file01']['name']}";
    move_uploaded_file($tmp, $dest);

	$course_code = $_POST['course_code'];
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$instructor = $_POST['instructor'];
	$weeks = $_POST['weeks'];
	$description = $_POST['description'];
	//connect to the database server
	$db = mysqli_connect('localhost', 'root', "", 'college') or die(mysqli_error($db));
	
	//run an insert query using the form data
	$q = "insert into course values(null,'$course_code','$name', '$subject', '$instructor', $weeks, '$description' )";
	mysqli_query($db, $q) or die(mysqli_error($db));
	
	header("location:Add.php");
?>