<!DOCTYPE html>
<html lang="en">
<head>
    <title>cookie with request</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="user" placeholder="enter user name"/>
    <br/>
    <br/>
    <button name="button" value="set">Set cookies</button>
    
    <br/>
    <br/>
    <button name="button" value="display">display cookies</button>

    <br/>
    <br/>
    <button name="button" value="delete">delete cookies</button>


</form>

</body>
</html>


<?php
if(isset($_POST['button'])){
    if($_POST['button']=="set"){
        $val=$_POST['user'];
        echo $val;
        setcookie("user",$val);
        echo "cookie is set";
 
    }

    if($_POST['button']=='display'){
        if(isset($_COOKIE['user'])){
            echo $_COOKIE['user'];

        }
    }

    if($_POST['button']=='delete'){
        if(isset($_COOKIE['user'])){
            setcookie("user",null,-1);
            
        }
    }
}
?>