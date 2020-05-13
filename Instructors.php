<?php include ("header.inc");	
	?>
	<?php include ("nav.inc");	
	?>
	<main>
    <h1 class=Mainh1>Instructors</h1>
	<table class=Maincontent>
        <tr>
           <th>Instructor</th><th>Course Code</th><th>Name</th><th>Subject</th><th>Weeks</th>
        </tr>
        <?php
            //connect
            $db = mysqli_connect("localhost","root","","college") or die(mysqli_error($db));
            
            $q = "select * from course";
            
            $results = mysqli_query($db, $q) or die(mysqli_error($db));
            
            while($row=mysqli_fetch_array($results))
            {
                print "<tr>\n";
				print "<td><a href='instructor.php?instructor={$row['instructor']}'>{$row['instructor']}</a></td>\n";
				print "<td>{$row['course_code']}</td>\n";
                print "<td>{$row['name']}</td>\n";
                print "<td>{$row['subject']}</td>\n";
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
