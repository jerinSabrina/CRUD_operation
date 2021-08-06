<h1> Student List </h1>

<table border="1">
	<thead>
		<tr>
			<th>Name</th>
			<th>Roll</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php
          $connection = new mysqli("localhost", "root", "password", "school");

		  if($connection->connect_error) {
		    die("Unable to connect database");
		  }
		  else {
		  	echo "Database connection success!!";
		  }

		  $sql = "select * from students";

		  $result = $connection->query($sql);

		  if($result->num_rows > 0) {
             while($student = $result->fetch_assoc()) {
               echo "<tr>";
               echo "<td> " . $student['name'] . "</td>";
               echo "<td> " . $student['roll'] . "</td>";
               echo "<td><a href=details.php?id=" . $student['id'] . "> Details </a> </td>";
               echo "<td><a href=edit.php?id=" . $student['id'] . "> Edit </a> </td>";
               echo "</tr>";
             }
		  }
		  else {
            echo "No data into the table";
		  }


		?>
	</tbody>
</table>