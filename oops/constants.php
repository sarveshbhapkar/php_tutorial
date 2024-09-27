<?php

// Constant in PHP class
// + How to define constant in PHP class |
// + How to call constant inside class
// + Call constant outside class |
// + Constant with access modifiers |

class ConstantDemo{

    const collegeName="thakur";

    function getCollegeName(){
        echo ConstantDemo::collegeName;
    }
  
}
$c1=new ConstantDemo();


// echo ConstantDemo::collegeName;


?>