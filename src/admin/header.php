<?php 
 session_start();

 
 if(isset($_SESSION['loginsuccesful']))
 {

 }
 else{
     echo "<script>window.location.href='login.php';</script>";
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Movie Scope</title>

    <!----Bostrap CDN ----------------->

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="admin-styles/css/bootstrap.min.css">

<!-----------Font Awsome CDN ------------------>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="shortcut icon" href="../images/icons8-movie-32.png" type="image/x-icon">

</head>
<body>

    <center><h1>Movie Scope - Admin Panel</h1></center>
    <hr>

    <!--------Nav bar------------>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">HELLO, <?php echo $_SESSION['user'];?> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item active">
        <a class="nav-link" href="movie-list.php">Movies</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="message-list.php">Messages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register-admin.php">Admin Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin-list.php">Admin list</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-danger" href="logout.php">Log Out</a>
      </li>
     
    </ul>
  </div>
</nav>

    <!--------Navbar end-------->
    
</body>
</html>