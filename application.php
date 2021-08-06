<?php
  print_r($_POST);

  $name = $_POST['name'];
  $fname = $_POST['fname'];
  $roll = $_POST['roll'];
  $mobile = $_POST['mobile'];


  $connection = new mysqli("localhost", "root", "password", "school");

  if($connection->connect_error) {
    die("Unable to connect database");
  }
  else {
  	echo "Database connection success!!";
  }

  
  $sql = "insert into students(name, father_name, roll, mobile) values('$name', '$fname', '$roll', '$mobile')";

  if($connection->query($sql) === TRUE) {
    echo "Student information stored successfully!!";
  }
  else {
    echo "Error: " . $connection->error;
  }

?>