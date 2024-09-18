<?php

// What is a Cookie?
// A cookie is often used to identify a user. 
// A cookie is a small file that the server embeds
//  on the user's computer. Each time the same computer
//   requests a page with a browser, it will send the 
//   cookie too. With PHP, you can both create and
//    retrieve cookie values.


setcookie("fruit","apple",time()+(86400));

if(isset($_COOKIE['fruit'])){
    print_r($_COOKIE['fruit']);
}else{
    echo "no cookie set";
}
?>