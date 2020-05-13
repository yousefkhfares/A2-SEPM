<?php include ("header.inc");	
	?>
	<?php include ("nav.inc");	
	?>

	<main>
	<h1 class=Mainh1>Add Course</h1>
	<form method=post action=process_form.php enctype="multipart/form-data">
		<label for="Course Code">Course Code</label><input type=text name=course_code ><br>
		<label for="name">Name:</label><input type=text name=name ><br>
		<label for="subject">Subject:</label><input type=text name=subject><br>
		<label for="instructor">Instructor:</label><input type=text name=instructor ><br>
		<label for="weeks">Weeks:</label><input type=text name=weeks><br>
		<textarea rows="4" cols="50" name=description placeholder="Enter course description here....."></textarea><br>
		<input type="file" name = "file01" ><br>
		<input type=submit>
	</form>
	</main>
<?php include ("footer.inc");	
	?>