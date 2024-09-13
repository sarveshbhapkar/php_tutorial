<?php

// Remove & Add Element in Array

// + Add a Single element. '

// + Add multiple elements. 

// + Remove a single element. 

// « Remove multiple elements.

$users=["ram","sham","peter","bitter"];

//to add element
array_push($users,"eter","bruce","yash");


//to remove element
// array_pop($users);


//to remove multiple element
array_splice($users,-2);


print_r($users);


?>