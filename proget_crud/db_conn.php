<?php

$sname = "localhost";
$uname = "root";
$password = '';

$db_name = "my_dbb";

// $conn = mysqli_connect($sname, $uname, $password, $db_name);

// if(!$conn){
//     echo "Connection failed!";
// }


try{


    $conn = new PDO("mysql:host={$sname};dbname={$db_name}",$uname,$password,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    

}catch(Exception $e)
{
    echo "Connection failed!";
    die;
}
