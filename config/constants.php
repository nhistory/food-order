<?php 

    //Start session
    session_start();

    //Create Constants to store non repeating values.
    define('SITEURL', 'http://localhost/food-order/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '1234qwer');
    define('DB_NAME', 'food-order');

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Database connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //Selecting database

?>