<?php

// Contains constants used for Query Execution and updating the Database

    //Start Session
    session_start();


    //Create Constants to Store Non Repeating Values
    $server = "http://localhost/bongiorno/";
    define('SITEURL', 'http://localhost/bongiorno/');

define('LOCALHOST', 'localhost'); // default localhost
define('DB_USERNAME', 'evelina'); // default db username
define('DB_PASSWORD', 'password'); // default db password ''
define('DB_NAME', 'foodwebsite'); //change database here



// if($con){
//     echo "Database connection was successful";
// }
// else{
//     echo "Connection was unsuccessful ".mysqli_error($con);

//     die($con);
// }

try{
    // Connect to Database
    $con = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if($con){
        echo "Database connection was successful";
    }

}    

catch(Exception $errormsg){
    echo $errormsg->getMessage();
    

}
// Select/Change the default database to be used when performing queries against the database connection
//$select_db = mysqli_select_db($con, DB_NAME) or die(mysqli_error());


?>