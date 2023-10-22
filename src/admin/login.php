<?php 
    session_start();

    include 'ft.php';
    include 'db.php';
?>

<head>
    <link rel="stylesheet" href="admin-styles/css/bootstrap.min.css">

    <!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<link rel="shortcut icon" href="../images/icons8-movie-32.png" type="image/x-icon">

</head>

<div class="container">
    <div class="head" style="text-align:center;">
        <h1>Login To Movie Scope</h1>
    </div>

<!-------Form from boostrap----------->
<form action="login.php" method="post">
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

<?php 
//Check same data in the database and assign in to variables
    if(isset($_POST['submit']))
    {
        $user = $_POST['uname'];
        $pwd = $_POST['pwd'];

        $query = "SELECT * From admin where uName = '$user' ";

        $run = mysqli_query($con,$query);

        if(mysqli_num_rows($run)>0)
        {
            while($row = mysqli_fetch_assoc($run))
            {
                if(password_verify($pwd, $row['pwd'])){
                    $_SESSION['loginsuccesful'] = 1;
                    $_SESSION['user'] = $user;
            echo "<script>alert('Logged in succefully'); window.location.href='movie-list.php'; </script>";
                }
            }
        }
        else{
            echo "<script>alert('check your details'); </script>";
        }
    }
?>