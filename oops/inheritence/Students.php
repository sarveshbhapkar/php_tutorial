<?php

class UserAuth{
    function login($userType){
        echo "$userType logged in";

    }
}

class Students extends UserAuth{
    function getName(){
        echo "sarvesh";

    }
    
}

class Teachers extends UserAuth{
    function getSkill(){
        echo "dsa";
        
    }
   
}

$s1= new Students();
$s1->login("student");

echo "<br>";

$t1=new Teachers();
$t1->login("teacher");

?>