<?php 
    // Include constants.php for SITEURL
    include('../config/constants.php');
    // 1. Destroy the Session
    session_destroy(); // Unset $_SESSION['user']

    // 2. Redirect to Login page
    echo("<script>location.href = '".SITEURL."admin/login.php';</script>");

?>