<?php

include("./config.php");

$getStudent=$conn->prepare("select id,name from students");
$getStudent->execute();

$studentData=$getStudent->fetchAll();


?>