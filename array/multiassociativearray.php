<?php

// Multidimensional Arrayd
// « What is a Multidimensional Array. ;
// + Use of Multidimensional Array.

$users=[
    ["name"=>"sarvesh","age"=>"22","email"=>"sarv@gmail.com"],
    ["name"=>"parvesh","age"=>"23","email"=>"parv@gmail.com"],
    ["name"=>"darvesh","age"=>"25","email"=>"darv@gmail.com"],
    ["name"=>"tarvesh","age"=>"28","email"=>"tarv@gmail.com"]
];

// echo "<pre>";
// print_r($users);

foreach($users as $user){
    // print_r($user);
    // echo "<br>";

    foreach($user as $item){
        print_r($item);
        echo "<br>";

    }

}

?>