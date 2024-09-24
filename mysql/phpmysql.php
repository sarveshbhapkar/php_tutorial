<?php

// Connect PHP with MySalg
// » How many ways do we have to connect?
// + Make Variables for connection.
// » Make Connect with MySQLi class.
// Get the Table List from database.

$host="localhost";
$username="root";
$password=null;
$database="college";

$conn=new mysqli($host,$username,$password,$database);
if($conn->connect_error){

    die ."some error". $conn->connect_error;

}
echo "connetion successful";
echo "<br/>";

$result=$conn->query("show tables")->fetch_all();
print_r($result);


?>