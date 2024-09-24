<?php

include("./config.php");

$getStudent=$conn->prepare("select id,name from students");
$getStudent->execute();

$studentData=$getStudent->fetchAll();

// print_r($studentData);
echo "<select>";
echo "<option>select name </option>";
foreach($studentData as $student){
    echo "<option ".$student['id']." >".$student['name']."</option>";

}

echo "<select>";
?>