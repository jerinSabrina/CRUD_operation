<?php

class Student {
  public $name;
  public $mobile;
  public $marks;

  public function cgpa() {
    $total_marks = 0;
    for($i = 0; $i < count($this->marks); $i++) {
       $total_marks += $this->marks[$i];
    }
    $avg_marks = $total_marks / count($this->marks);

    if($avg_marks > 33) {
      return "Pass with avg marks" . $avg_marks;
    }
    else {
    	return "Failed" . $avg_marks;
    }
  }
}


$student1 = new Student();
$student1->name = "Rahim";
$student1->mobile = "0172264555";
$student1->marks = [45,25,33,45,47];

echo "Name: " . $student1->name . "<br/>";
echo "Mobile: " . $student1->mobile . "<br/>";
echo "CGPA: " . $student1->cgpa();

echo "<br/> Student 2 </br>";

$student2 = new Student();
$student2->name = "Karim";
$student2->mobile = "456456456";
$student2->marks = [45,25,63,45,47];

echo "Name: " . $student2->name . "<br/>";
echo "Mobile: " . $student2->mobile . "<br/>";
echo "CGPA: " . $student2->cgpa();

?>

