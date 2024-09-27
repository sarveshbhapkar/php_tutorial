<?php

class Properties{
    public $name="sarvesh";

    function getName(){
        echo $this->name;

    }

    function updateName(){
        $this->name=("peter");
    }
}

 $p1 =new Properties();
 $p1->updateName();
 $p1->getName();


?>