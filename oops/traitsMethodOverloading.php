<?php

// Method Overriding Haity
// + What is Method Overriding? |
// + Make 2 Traits and 1 Class. |
// + Define the Same methods in Traits and Class.
// « Example of Method Overriding Traits. |
// «+ Interview Questions.

trait ParentCompany1{

        function getEmp(){
            echo "total emp is 1000";
        }
    
}

trait ParentCompany2{

    function getEmp(){
        echo "total emp is 10000";
    }

}

class Company{

    use parentCompany1;
    use parentCompany2{
        ParentCompany1::getEmp insteadof ParentCompany2;
        ParentCompany2::getEmp as getEmpCompany2;
    }
    
    // function getEmp(){
    //     echo "total emp is 100";
    // }
}

$c1=new Company();
$c1->getEmp();
echo "<br>";
$c1->getEmpCompany2();


?>