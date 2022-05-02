<?php include("partials/menu.php") ?>

<div class="main-content">
    <div class="wrapper">
        <h2>Add Admin</h2>
        <br><br>

        <?php 
            if(isset($_SESSION['add'])) //Checking whether the session is set or not
            {
                echo $_SESSION['add']; //Display the session message
                unset($_SESSION['add']); //Remove the session message
            }
        ?>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="Your Username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Your Password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>


<?php include("partials/footer.php") ?>

<?php 
    //Process the Value from form and save it in Database
    //Check whether the submit button is clicled or not
    if(isset($_POST['submit']))
    {
        // Button clicked
        // echo "Button Clicked";

        //Get the data from form
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); //Password Encryption with md5

        //SQL query to save the data into database
        $sql = "INSERT INTO tbl_admin SET
            full_name='$full_name',
            username='$username',
            password='$password'
        ";

        // Executing Query and Saving Data into Database
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        // Check whether the (query is executed) data is inserted or not and display appropriate message
        if($res==TRUE)
        {
            // Data Inserted
            // echo "Data Inserted";
            // Create a session variable to display message
            $_SESSION['add'] = "<div class='success'>Admin Added Successfully</div>";
            // Redirect page to manage admin
            // header("location:".SITEURL.'admin/manage-admin.php');
            echo("<script>location.href = '".SITEURL."admin/manage-admin.php';</script>");
        }
        else
        {
            // Failed to insert data
            // echo "Failed to insert data";
            // Create a session variable to display message
            $_SESSION['add'] = "<div class='error'>Failed to Add Admin</div>";
            // Redirect page to add admin
            // header("location:".SITEURL.'admin/manage-admin.php');
            echo("<script>location.href = '".SITEURL."admin/manage-admin.php';</script>");
        }
    }
?>