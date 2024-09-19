<?php

if(isset($_POST['fileName'])){
    $fileName=$_POST['fileName'];
$content=$_POST['content'];
$file =fopen($fileName,"w") or die("unable to create file");
fwrite($file,$content);
echo "file created";
}

?>

>
<form action="" method="post">

<input type="text" placeholder="enter file name" name="fileName"/>
<br/>
<br/>
<textarea name="content">

</textarea>
<br/>
<br/>
<button>create file</button>

</form>