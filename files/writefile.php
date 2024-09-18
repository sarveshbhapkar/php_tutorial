<?php

$fileName="dummy.txt";
$content="this is dummy file";
$file =fopen($fileName,"w") or die("unable to create file");
fwrite($file,$content);
echo "file created";

?>