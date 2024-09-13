<?php


// Foreach loop in PHP
// «+ Use of for each loop
// break and continue
// the second way to use for each loop
// Interview Questions


$users=["ram","sham","peter","bitter"];

// foreach($users as $x){
//     echo $x;
//     echo "<br>";

//     if($x=="peter"){
//         continue;

//     }

//     if($x == "peter"){
//         break;

//     }
// }

foreach($users as $x):
    echo $x;
    echo "<br>";
endforeach

?>