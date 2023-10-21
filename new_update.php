<?php 
    include 'conn.php';

    if(isset($_POST['update']))
    {
        $C_username = $_POST['C_username'];
        $N_username = $_POST['N_username'];
        $firstname = $_POST['firstName'];
        $lastname = $_POST['lastName'];
        $email = $_POST['email'];

        // ----------------------------------------------------------------
        $pwd = $_POST['c_password'];
        $hash = password_hash("$pwd", PASSWORD_BCRYPT);
        // ----------------------------------------------------------------

        $new_password = $_POST['newPassword'];
        $hash_new = password_hash("$new_password", PASSWORD_DEFAULT);

        $query = " UPDATE `users` SET `userName`='$N_username',`F_name`='$firstname',`L_name`='$lastname',`email`='$email',`password`='$hash_new' WHERE userName = '$C_username' && password = '$hash' ";

        $run = mysqli_query($conn,$query);

        if($run)
        {
            echo "<script>alert('Updated Succesfully'); window.location.href='User_profile.php';</script>";
        }
        else
        {
            echo "<script>alert('Wrong Details'); window.location.href='User_profile.php'; </script>";
        }

    }

    else
    {
        echo "<script>alert('Invalid Details!!');</script>";
    }
?>