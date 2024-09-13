<?php

// Associative Array
// « What is an Associative Array.
// « Use of Associative Array.
// « Syntax and Example.
// « Interview Questions.


$usersDetails =[
    "firstName"=>"sarvesh",
    "lastName"=>"bhapkar",
    "age"=>22,
    "email"=>"sarveshbhapkar10@gmail.com",
    "address"=>"maharashtra"
];

// echo $usersDetails["email"];


foreach($usersDetails as $data):
    echo $data;
    echo "<br>";
endforeach
?>