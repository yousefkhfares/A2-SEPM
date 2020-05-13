<?php include ("header.inc");	
	?>
	<?php include ("nav.inc");	
	?>
	<main>
    <h1 class=Mainh1>Instructor</h1>
	<div class=Maincontent>
	     <?php
            $instructor = $_GET['instructor']; 
            
            //connect
            $db = mysqli_connect("localhost","root","","college") or die(mysqli_error($db));
            
            $q = "select * from course where instructor  = '$instructor'";
            
            $results = mysqli_query($db, $q) or die(mysqli_error($db));
            
            while($row=mysqli_fetch_array($results))
            {
				print "<h2>{$row['instructor']},</h2>";
				print "<h3>Subject: {$row['subject']}</h3>";
                print "<h3>Course Code:{$row['course_code']}</h3>";
                print "<h3>Course Name: {$row['name']}</h3>";
                print "<h3>Weeks:{$row['weeks']}</h3>";
				print "<h3>Description:<br>{$row['description']}</h3>";
            }
        ?>
		</div>
	</main>
</body>
<?php include ("footer.inc");	
	?>
</html>