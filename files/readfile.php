<?php
// $file="me.txt";
// $myfile=fopen($file,'r') or die("anable to read file");
// echo fread($myfile,filesize(($file)));
// fclose($myfile);


if(isset($_FILES['file'])){
    $file="me.txt";
$myfile=fopen($file,'r') or die("anable to read file");
echo fread($myfile,filesize(($file)));
fclose($myfile);
}
?>




<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file"/>
    <br/>
    <br/>
    <button>read file</button>
</form>