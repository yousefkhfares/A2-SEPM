<?php include ("header.inc");	
	?>
	<?php include ("nav.inc");	
	?>
	<main>
    <h1 class=Mainh1>Courses</h1>
	<table Class=Maincontent>
        <tr>
            <th>Course Name</th><th>Course Code</th><th>Subject</th><th>Instructor</th><th>Weeks</th>
        </tr>
        <?php
            //connect
            $db = mysqli_connect("localhost","root","","college") or die(mysqli_error($db));
            
            $q = "select * from course";
            
            $results = mysqli_query($db, $q) or die(mysqli_error($db));
            
            while($row=mysqli_fetch_array($results))
            {
                print "<tr>\n";
				 print "<td><a href='course.php?id={$row['course_id']}'>{$row['name']}</a></td>\n";
				print "<td>{$row['course_code']}</td>\n";
				print "<td>{$row['subject']}</td>\n";
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
