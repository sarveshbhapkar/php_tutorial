<?php

class ConstructorDemo{


    public $name;

    function __construct(){
        echo "this is constructotor";
        $this->name;
    }


    function displayName(){
        echo $this->name;

    }
}


$cd =new ConstructorDemo();
$cd->displayName();


?>