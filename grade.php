<html>
  <head> 
    <title> Student grade point </title>  
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
<?php

  $student_marks = array("rahim" => array("bangla" => 24, "english" => 47, "math" => 85)
    , "karim" => array("bangla" => 84, "english" => 47, "math" => 45, "general" => 75), 
    "xyz" => array("bangla" => 54, "english" => 87, "math" => 65));

  foreach($student_marks as $stu => $marks) {
    echo "<h1>" . $stu . " Marks </h1>";
    echo "<table class='table table-bordered'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th> Subject </th>";
    echo "<th> Marks </th>";
    echo "<th> Point </th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    $total_marks = 0;
    $subjects = 0;
    foreach($marks as $sub => $mark) {
      $total_marks += $mark;
      //$subjects += 1;
      echo "<tr>";
      echo "<td> " . $sub . "</td>";
      echo "<td> " . $mark . "</td>";
      echo "<td>" . gradePoint($mark) . "</td>";
      echo "</tr>"; 
    }
    echo "Total subject: " . count($marks);
    $avg_mark = $total_marks/count($marks);
    echo "</tbody>";
    echo "<table>";
    echo "<h4> Average Grade:" . gradePoint($avg_mark) . "</h4>";
  }

  function gradePoint($marks) {
    $grade_point = "";
    if($marks >= 80) {
      $grade_point = "A+";
    }
    else if($marks >=70) {
      $grade_point = "A";
    }
    else if($marks >= 60) {
      $grade_point = "A-";
    }
    else if($marks >= 50) {
      $grade_point = "B";
    }
    else if($marks >= 40) {
      $grade_point = "C";
    }
    else {
      $grade_point = "F";
    }
    return $grade_point;
  }
?>

</body>
</html>