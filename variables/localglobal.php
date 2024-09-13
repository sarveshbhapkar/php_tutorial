<!-- Local and Global variable |
+ What is Local variable?
+ What is Global variable?
+ How to get Global variable inside function. 
« Variables nested function.
+ Example
« Interview Questions. |» -->

<?php

    //variable outside function is global variable
$name="sarv";

function getname(){

    //use global variable inside a function
    global $name;

    //variable  inside function is called local variable  
//$name="sarvesh";
    echo $name;
    echo "<br>";

}

echo $name;

getname();


?>