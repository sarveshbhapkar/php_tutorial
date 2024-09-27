<!-- Type Hinting in PHP

+ What is type hinting?

+ How to apply type hinting.

+ Example of why this is important.

+ Interview Questions. -->

<?php
 
function fruit(string | int $name){
    echo $name;
}

fruit(555);


?>