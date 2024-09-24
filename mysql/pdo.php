<?php

$host="localhost";
$username="root";
$password=null;
// $database="college";

try{
    $conn=new PDO("mysql:host=$host;dbname=college",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connection successful ";
}catch(PDOException $err){
    echo $err;
}

echo "<br>";

$result= $conn->query("show tables");
while($row = $result->fetch(PDO::FETCH_NUM)){
    print_r($row);
}
   
?>