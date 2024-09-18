<!DOCTYPE html>
<html lang="en">
<head>

    <title>session</title>
</head>
<body>
    <form action="" method="post">

        <input type="text" name="user" placeholder="enter user name : ">
        <br/>
        <br/>
        <button name="button" value="set">set session</button>

        <br/>
        <br/>
        <button name="button" value="get">get session</button>

        <br/>
        <br/>
        <button name="button" value="delete">delete session</button>
     
    </form>
</body>
</html>

<?php

session_start();

if(isset($_POST['button'])){
    if($_POST['button']=='set'){
        $val=$_POST['user'];
        $_SESSION['user']=$val;
    }

    if($_POST['button']='get'){
        
        echo $_SESSION['user'];
    }

    if($_POST['button']='delete'){
        session_destroy();
    }
}

?>