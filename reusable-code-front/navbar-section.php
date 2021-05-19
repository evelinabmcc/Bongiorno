<!-- Navbar Section reusable code-->


<!-- Includes db-constants.php -->
<?php include('reusable-code-database/db-constants.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Makes the website responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- Link to the CSS file -->
    <link rel="stylesheet" href="./css/style.css">
</head>


<body>
    <!-- Navbar Section starts here -->
        <section class="navbar">
            <div class="container">
                
                <!-- Logo starts here-->
                <div class="logo">
                   <img src="./images/background/logo.png" alt="Restaurant Logo" class="img-responsive">
                </div> 
                
                <!-- Navbar Menu -->
                <div class="menu text-right">
                    <ul>
                        <li>
                            <a href="./login.php" >Login</a>
                        </li>
                        <li>
                            <a href="./index.php" >Home</a>
                        </li>
                        <li>
                            <a href="./categories.php" >Categories</a>
                        </li>                        
                        <li>
                            <a href="./menu.php" >Menu</a>
                        </li>
                        <li>
                            <a href="./contact.php" >Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- CLears the floats -->
                <div class="clearfix"></div>

            </div>    
        </section>
    <!-- Navbar Section ends here -->


