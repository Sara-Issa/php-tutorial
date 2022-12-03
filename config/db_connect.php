<?php

// MySQL - connect to dstsbase
$conn = mysqli_connect('localhost', 'sara', 'test1234', 'ninja_pizza');

// check connection
if(!$conn){
    echo 'Connection error:' . mysqli_connect_error();
} 

?>