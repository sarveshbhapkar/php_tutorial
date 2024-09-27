<!-- 

 Interface in PHP?
+ What is Interface?
+ Why do we use Interface? |
+ Difference between Interface and abstract class
« Example of Interface
+ Interview Questions.

what is interface ?
Interfaces tell what methods a class should
implement. 

Why Use Interface
+ To define features of a class.



Interface VS Abstract Class

« Interfaces cannot have properties, while abstract
classes can.

« All interface methods must be public, While
abstract class methods are public or protected

+ All methods in an interface are abstract, so they
cannot be implemented in code and the abstract
keyword is not necessary
-->

<?php

interface ProductFeatures{

   
    function image();
    function ownerDetail();
    
}

class Product implements ProductFeatures{

    function image()
    {
        echo "image here";
    }

    function ownerDetail()
    {
        echo "ownerdetails here";

    }
    
}

$product=new Product();
$product->image();
echo "<br>";
$product->ownerDetail();


?>