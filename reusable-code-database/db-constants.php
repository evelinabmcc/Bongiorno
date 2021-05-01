<?php

// Contains constants used for Query Execution and updating the Database

define('LOCALHOST', 'localhost'); // default localhost
define('DB_USERNAME', 'root'); // default db username
define('DB_PASSWORD', ''); // default db password ''
define('DB_NAME', 'foodwebsite'); //change database here

// Connect to Database
$con = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); 

// Select/Change the default database to be used when performing queries against the database connection
$select_db = mysqli_select_db($con, DB_NAME) or die(mysqli_error());


?>