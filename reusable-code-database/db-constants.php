<?php

// Contains constants used for Query Execution and updating the Database

    //Start Session
    session_start();


    //Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://localhost/bongiorno/');

// Contains constants used for Query Execution and updating the Database

define('LOCALHOST', 'localhost'); // default localhost
define('DB_USERNAME', 'root'); // default db username
define('DB_PASSWORD', 'root'); // default db password ''
define('DB_NAME', 'foodwebsite'); //change database here

// Connect to Database
$con = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD,DB_NAME) or die(mysqli_error()); 

// Select/Change the default database to be used when performing queries against the database connection
$select_db = mysqli_select_db($con, DB_NAME) or die(mysqli_error());

// Check connection
if($con === false){
    die("ERROR: Could not connect. " . $con->connect_error);
}
else{
    // Print host information
echo "Connect Successfully. Host info: " . $con->host_info;
}



