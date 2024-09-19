<!-- What is JSON

+ JSON stands for JavaScript Object

Notation.
+ Itis a text-based data exchange format for

structuring data.
+ It is mainly used to exchange data

between a server and a web application. -->

<!-- Handle JSON in PH
+ What is JSON
+ Convert array to json :
« Convert JSON to php object
« Convert JSON to php array
« Interview Question. | -->

<?php
// $user=["name"=>"sarvesh","age"=>22,"email"=>"sarvesh@gmail.com"];
// $userJson=json_encode($user);
// echo $userJson;


$user='{"name"=>"sarvesh","age"=>22,"email"=>"sarvesh@gmail.com"}';
$dataArray=json_decode($user,true);
print_r($dataArray);


?>