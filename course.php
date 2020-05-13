<?php include ("header.inc");	
	?>
	<?php include ("nav.inc");	
	?>
	<main>
    <h1 class=Mainh1>Course</h1>
	<div class=Maincontent>
	     <?php
            $id = $_GET['id']; 
            
            //connect
            $db = mysqli_connect("localhost","root","","college") or die(mysqli_error($db));
            
            $q = "select * from course where course_id = $id";
            
            $results = mysqli_query($db, $q) or die(mysqli_error($db));
            
            while($row=mysqli_fetch_array($results))
            {
                print "<h3>{$row['name']}</h3>";
				print "<h3>Course Code:{$row['course_code']}</h2>";
                print "<h3>Subjects: {$row['subject']}</h4>";
				print "<h3>Instructor: {$row['instructor']}</h4>";
                print "<h3>Weeks:{$row['weeks']}</p>";
				print "<h3>Description:<br>{$row['description']}</h3>";
            }
        ?>
		</div>
	</main>
</body>
<?php include ("footer.inc");	
	?>
</html>