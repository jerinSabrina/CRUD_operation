<?php
  print_r($_POST);

  $subject = $_POST['subject'];
  $mark = $_POST['mark'];
  $student_id = $_GET['id'];


  $connection = new mysqli("localhost", "root", "password", "school");

  if($connection->connect_error) {
    die("Unable to connect database");
  }
  else {
    echo "Database connection success!!";
  }

  
  $sql = "insert into marks(subject, mark, student_id) values('$subject', '$mark', '$student_id')";

  if($connection->query($sql) === TRUE) {
    echo "Student mark stored successfully!!";
  }
  else {
    echo "Error: " . $connection->error;
  }

?>