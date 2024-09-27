<?php

class IamParent{

    function amParent(){
        echo "i am function of parent class";
    }
}


class child extends IamParent{

    function amParent()
    {
        "i am from child class";
    }
}


// $t1=new IamParent();
// $t1->amParent();

$t2=new child();
$t2->amParent();

?>

<!-- Method and Property |
OverRiding in PHP class
Child class has the same method or property
name as the parent.
But child class has different implementation of
methods or Properties? -->