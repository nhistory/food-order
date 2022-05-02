<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h2>Update Admin</h2>
        <br><br>

        <?php 
        
            // Get the ID of the selected admin
            $id = $_GET['id'];

            // Create SQL query to get the details
            $sql = "SELECT * FROM tbl_admin WHERE id=$id";

            // Execute the query
            $res = mysqli_query($conn, $sql);

            // Check whether the query is executed or not
            if($res==TRUE)
            {
                // Check whether the data is available or not
                $count = mysqli_num_rows($res);
                // Check whether we have admin data or not
                if($count==1)
                {
                    // Get the Details
                    // echo "Admin available";
                    $row = mysqli_fetch_assoc($res);

                    $full_name = $row['full_name'];
                    $username = $row['username'];

                }
                else
                {
                    // Redirect to manage admin page
                    echo("<script>location.href = '".SITEURL."admin/manage-admin.php';</script>");
                }
            }

        ?>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name: </td>
                    <td>
                        <input type="text" name="full_name" value="<?php echo $full_name; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>

    </div>
</div>

<?php 

    // Check whether the submit button is clicked or not
    if(isset($_POST['submit']))
    {
        // echo "Button clicked";
        // Get all the values from form to update
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];

        // Create a SQL query to update admin
        $sql = "UPDATE tbl_admin SET
        full_name = '$full_name',
        username = '$username' 
        WHERE id='$id'
        ";

        // Execute the Query
        $res = mysqli_query($conn, $sql);

        // Check whether the query executed successfully or not
        if($res==TRUE)
        {
            //Query executed and admin updated
            $_SESSION['update'] = "<div class='success'>Admin updated successfully</div>";
            echo("<script>location.href = '".SITEURL."admin/manage-admin.php';</script>");
        }
        else
        {
            //Failed to update admin
            $_SESSION['update'] = "<div class='error'>Failed to update</div>";
            echo("<script>location.href = '".SITEURL."admin/manage-admin.php';</script>");

        }
    }

?>

<?php include('partials/footer.php'); ?>