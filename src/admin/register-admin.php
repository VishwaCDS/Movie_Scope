<?php
include 'header.php';
include 'ft.php';
include 'db.php';
?>

<!-------Registration form--------------->
<div class="container">
    <div class="head" style="text-align:center;">
        <h1>Register Admin</h1>
    </div>

<form action="register-admin.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name= "pwd" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div>

<!---register-end---------->

<!-----after click submit button---->
<?php 
    if(isset($_POST['submit']))
    {
        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];
        $hash = password_hash("$pwd", PASSWORD_BCRYPT);//encrypt password


        // ---------------------------------------------------------------------------------------------------------
        $sql = "SELECT uName FROM admin WHERE uName = '$uname'";
        $result = $con->query($sql);

            if(mysqli_num_rows($result) > 0)
            {
                // header("location: register-admin.php?error=usernameexist");
                echo "<script>alert('Username Exist!!'); window.location.href='register-admin.php?error=usernameexist'; </script>";
                exit();
            }

            else
            {
              $query = "INSERT INTO `admin`( `uName`, `pwd`) VALUES ('$uname','$hash')";
              $run = mysqli_query($con, $query);

              if($run)
              {
                  echo "<script>alert('Admin added!!'); window.location.href='admin-list.php'; </script>";
              }
            }

        //----------------------------------------------------------------------------------------------------------

        // $query = "INSERT INTO `admin`( `uName`, `pwd`) VALUES ('$uname','$hash')";
        // $run = mysqli_query($con, $query);

        // if($run)
        // {
        //     echo "<script>alert('Admin added!!'); window.location.href='admin-list.php'; </script>";
        // }
        // else{}
    }
?>