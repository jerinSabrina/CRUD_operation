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
       $db_student = $student;
     }
  }
  else {
    echo "No data into the table";
  }
   echo $_GET['id'];
?>

<h1> Update Student </h1>

<form action="update.php?id= <?php echo $_GET['id'] ?>" method="POST">
    <div>
      <label> Name </label>
      <input name="name" value="<?php echo $db_student['name']; ?>" type="text"/>
    </div>
    <div>
      <label> Father's Name </label>
      <input name="fname" value="<?php echo $db_student['father_name']; ?>" type="text"/>
    </div>
    <div>
      <label> Roll No </label>
      <input name="roll" value="<?php echo $db_student['roll']; ?>" type="text"/>
    </div>
    <div>
      <label> Mobile No </label>
      <input name="mobile" value="<?php echo $db_student['mobile']; ?>" type="text"/>
    </div>
    <div>
      <input type="submit" value="Update Data"/>
    </div>
  </form>