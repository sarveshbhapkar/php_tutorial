<?php
//class
class MathOpertations{

    public $val=45;

    function sum($a,$b){
        echo $a+$b;
    }

    function multi($a,$b){
        echo $a*$b;
    }
}

//object
$maths= new MathOpertations();
    $maths->sum(12,23);
    echo "<br>";
    $maths1= new MathOpertations();
    $maths1->sum(125,23);
    echo "<br>";

    $maths2= new MathOpertations();
    $maths2->multi(10,20);
    
?>

