<?php 

/*
    //AUthorization - Access COntrol
    //CHeck whether the admin is logged in or not
    if(!isset($_SESSION['admin'])) //IF admin session is not set
    {
        //Admin is not logged in
        //REdirect to login page with message
        $_SESSION['no-login-message'] = "<div class='error text-center'>Please login to access Admin Panel.</div>";
        //REdirect to Login Page
        header('location:'.SITEURL.'admin/login.php');
    }


    /*
    //CHeck whether the user is logged in or not
    if(!isset($_SESSION['user'])) //IF user session is not set
    {
        //User is not logged in
        //REdirect to login page with message
        $_SESSION['no-login-message'] = "<div class='error text-center'>Please login to access Admin Panel.</div>";
        //REdirect to Login Page
        header('location:'.SITEURL.'user/login.php');
    }
    */

?>