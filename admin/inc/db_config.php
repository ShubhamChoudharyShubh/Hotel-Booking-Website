<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'taj-hotel';

$con = mysqli_connect($hostname, $username, $password, $database);

if(!$con){
   die("Can Not Connect To Databse".mysqli_connect_errno());
}

function filteration($data){
    foreach($data as $key => $value){
        $data[$key] = trim($value); //Extra spaces hataata hai.
        $data[$key] = stripslashes($value); //Backslashes ko remove karta hai.
        $data[$key] = htmlspecialchars($value); //Special characters ko safe banata hai.
        $data[$key] = strip_tags($value); //HTML/PHP tags ko hataata hai.
    }
    return $data;
}

?> 