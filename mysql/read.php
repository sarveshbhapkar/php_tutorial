<?php

include("./config.php");

echo "<br>";

$getStudents=$conn->prepare("select * from students");
$getStudents->execute();  

$students=$getStudents->fetchAll();
// print_r($students);


echo "<table border='1' >";

foreach( $students as $student){
    echo "<tr>
    <td>" . $student['name'] ."</td>
     <td>" . $student['course'] ."</td>
      <td>" . $student['fee'] ."</td>

    </tr>";

}
echo "<table>";

?>