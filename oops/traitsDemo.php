<?php

trait parentCompany1{
    function getTotalEmp(){
        echo "total employees are : 5000";
    }

    function getTotalroject(){
        echo "total projects are : 123";
    }
}

trait parentCompany2{
    function getTotaloffice(){
        echo "total offices are :500";
    }
}

class Company{
   
    use parentCompany1;
    use parentCompany2;

}

$cmp=new Company();
$cmp->getTotalEmp();
echo "<br>";
$cmp->getTotaloffice();
echo "<br>";
$cmp->getTotalroject();


?>

<!-- Traits in PHP |
+ What are Traits and Why do we use it?
+ Make Traits and Class
+ Use Traits with class |
+ Example
+ Interview Questions 




-->

