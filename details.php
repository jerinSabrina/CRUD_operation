<?php
  $connection = new mysqli("localhost", "root", "password", "school");

  if($connection->connect_error) {
    die("Unable to connect database");
  }
  else {
  	echo "Database connection success!!";
  }

  $sql = "select * from students where id = " . $_GET['id'];

  $result = $connection->query($sql);

  if($result->num_rows > 0) {
     while($student = $result->fetch_assoc()) {
       echo "<br/>";
       echo "Name: " . $student['name'];
       echo "<br/>";
       echo "Roll: " . $student['roll'];
       echo "<br/>";
       echo "Mobile: " . $student['mobile'];
       echo "<br/>";
       echo "Father Name: " . $student['father_name'];
     }
  }
  else {
    echo "No data into the table";
  }

?>