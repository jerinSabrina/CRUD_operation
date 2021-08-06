<?php
  $connection = new mysqli("localhost", "root", "password", "school");

  if($connection->connect_error) {
    die("Unable to connect database");
  }
  else {
  	echo "Database connection success!!";
  }

  $sql = "select * from marks where student_id = " . $_GET['id'];

  $result = $connection->query($sql);

  if($result->num_rows > 0) {
     while($marks = $result->fetch_assoc()) {
       echo "<br/>";
       echo "Subject: " . $marks['subject'];
       echo "<br/>";
       echo "Mark: " . $marks['mark'];
     }
  }
  else {
    echo "No data into the table";
  }

?>