<?php

/*4 parameters:
name of the server = "localhost"; or IP address of host

username of the server = "root";

password to connect to database = " ";

name of the database    = "cus_app";
*/

//variables
$SERVER     =   "localhost";

$username   =   "root";

$password   =   "";

$database   =   "cus_app";

/*
$connection = mysqli_connect($SERVER, $username, $password, $database);

if($connection){

    echo "Database connection was successful";

}else{

    echo "Connection not successful " . mysqli_error($connection);

    die($connection);
}
*/


try {

    $connection = mysqli_connect($SERVER, $username, $password, $database);

    if($connection){
        
        echo "Database connection was successful <br>";
    }

    }catch(Exception $errormsg) {

        echo $errormsg->getMessage();
    }




?>