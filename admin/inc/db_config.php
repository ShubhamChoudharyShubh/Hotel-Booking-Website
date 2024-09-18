<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'taj-hotel';

$con = mysqli_connect($hostname, $username, $password, $database);

if(!$con){
   die("Can Not Connect To Databse".mysqli_connect_error());
}

//checkout notion PHP Login System
//Yeh filteration function user input ko clean aur secure karne ke liye use hota hai.
function filteration($data){
    foreach($data as $key => $value){
        $data[$key] = trim($value); //Extra spaces hataata hai.
        $data[$key] = stripslashes($value); //Backslashes ko remove karta hai.
        $data[$key] = htmlspecialchars($value); //Special characters ko safe banata hai.
        $data[$key] = strip_tags($value); //HTML/PHP tags ko hataata hai.
    }
    return $data;
}
//checkout notion PHP Login System
function select($sql,$values,$datatypes)
{
    $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con,$sql))
    {
       mysqli_stmt_bind_param($stmt,$datatypes,...$values);
       if(mysqli_stmt_execute($stmt)){
         $res = mysqli_stmt_get_result($stmt);
         return $res;
       }
       else{
        die("Query cannot be executes - Select Function");
       }
       mysqli_stmt_close($stmt);
    }
    else{
        die("Query cannot be prepared - Select Function");
    }
}

?> 