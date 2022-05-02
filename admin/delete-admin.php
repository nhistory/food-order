<?php 
    // Include constants.php file here
    include('../config/constants.php');


    // Get the id of admin to be deleted
    $id = $_GET['id'];

    // Create SQL query to delete admin
    $sql = "DELETE FROM tbl_admin WHERE id=$id";

    // Execute the query
    $res = mysqli_query($conn, $sql);

    // Check whether the query executec successfully or not
    if($res==TRUE)
    {
        //Query executed successfully and admin deleted
        // echo "Admin deleted";
        //Create session variable to display message
        $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully</div>";
        //Redirect to manage admin page
        echo("<script>location.href = '".SITEURL."admin/manage-admin.php';</script>");
    }
    else
    {
        //Failed to delete admin
        // echo "Failed to delete admin";
        
        $_SESSION['delete'] = "<div class='error'>Failed to delete admin. Try again later.</div>";
        echo("<script>location.href = '".SITEURL."admin/manage-admin.php';</script>");
    }

    // Redirect to manage admin page with message (success/error)

?>