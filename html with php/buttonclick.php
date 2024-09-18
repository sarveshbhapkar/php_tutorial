<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>

<form action="" method="POST">
    <button name="button" value="btn1">call function</button>
</form>

    
</body>
</html>

<?php 

if(isset($_REQUEST['button'])){
    buttonclick();
}

function buttonclick(){
    echo "funxction called button click";
}

?>