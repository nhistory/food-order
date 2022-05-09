<?php
    // Authorization - Access control
    // Check whether the user is logged in or not
    if(!isset($_SESSION['user'])) // if user session is not set
    {
        // User is not logged in
        $_SESSION['no-login-message'] = "<div class='error text-center'>Please login to access Admin panel.</div>";
        // redirect to login page with message
        echo("<script>location.href = '".SITEURL."admin/login.php';</script>");

    }

?>

