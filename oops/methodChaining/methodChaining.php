<?php
// Method Chaining in PHP
// + What is method ining?
// + Make class and og
// + Example of method chaining.
// + Interview Questions.

class Company{

    function getname(){
        
        function getName(){
            echo "this is honda motors";
            return $this;
        }

        function getemp(){
            echo "5000 employees in honda motors";
            $this;
        }
        function getBranch(){
            echo "500 branches in honda motors";
        }
    }
}

$c1=new Company();

$c1->getName()->getemp()->getBranch();

?>