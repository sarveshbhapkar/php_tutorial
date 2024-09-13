<?php 

// Multidimensional Arra: |
// + What is a Multidimensional Array.
// + Use of Multidimensional Array. |
// + Syntax and Example. |

$user=[
    [1,"sarvesh","bhapkar","sarv@gmail.com"],
    [2,"ram","bhapkar","ram@gmail.com"],
    [3,"darshan","bhapkar","darshan@gmail.com"],
    [4,"peru","bhapkar","peru@gmail.com"]

];
// echo "<pre>";
// print_r($user);


for($i=0;$i<count($user);$i++){
    echo "<br>";
    for($j=0;$j<count($user[$i]);$j++){
    
        echo $user[$i][$j];
        echo "<br>";
        

    }
}
?>