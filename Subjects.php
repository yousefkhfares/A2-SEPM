<?php include ("header.inc");	
	?>
	<?php include ("nav.inc");	
	?>
	<main>
    <h1 class=Mainh1>Subjects</h1>
	<table class=Maincontent>
	<tr>
		<th>Subject</th>
		<th>Course Code</th>
		<th>Course Name</th>
		<th>Instructor</th>
		<th>Weeks</th>
	</tr>
        <?php
            //connect
            $db = mysqli_connect("localhost","root","","college") or die(mysqli_error($db));
            
            $q = "select * from course";
            
            $results = mysqli_query($db, $q) or die(mysqli_error($db));
            
            while($row=mysqli_fetch_array($results))
            {
                print "<tr>\n";
				print "<td><a href='Subject.php?subject={$row['subject']}'>{$row['subject']}</a></td>\n";
				print "<td>{$row['course_code']}</td>\n";
                print "<td>{$row['name']}</td>\n";
                print "<td>{$row['instructor']}</td>\n";
                print "<td>{$row['weeks']}</td>\n";
                print "</tr>\n";
            }
        ?>
    
    </table>
</main>
</body>
</html>
<?php include ("footer.inc");	
	?>
