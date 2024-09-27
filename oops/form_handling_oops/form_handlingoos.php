<?php

if(isset($_POST['user'])){
   
    class User{
        function getName($name){
            echo "user name is : $name";

        }
    }
}

$user=new User();
$user(getname($_POST['user']));

?>

<form action="" method="post">

<input type="text" name="user" placeholder="enter user name: ">
<button>click me</button>

</form>