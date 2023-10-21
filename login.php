<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Scope- Login</title>

    <script src="js/script.js" ></script>

    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/register_style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="shortcut icon" href="images/icons8-movie-32.png" type="image/x-icon">
</head>
<body>
    <!--Header-->
    <?php
     include('./includes/header.php');
   ?>
  <!-------------- Log in Page----------------------->
    <div class="register-head">
            <div class="register_form">
                <form action="includes/login_val.php" method="POST">
                    <h1>Login</h1>
                    <hr><br>

                    <label for=""><b>Username</b></label>
                    <input type="text" name="username" placeholder="Enter Username" class="fill_form" required>

                    <label for=""><b>Password</b></label>
                    <input type="password" name="password" placeholder="Password" class="fill_form" required>

                    <hr>
                    <br>

                    <button type="submit" id="submit" name="log_sub" class="submit_btn">Login</button>
                    
                    <center><a href="#">forgot my password</a></center>
                    
                </form>
            </div>    
    </div>


    <!-- Footer-->
    <?php
     include('./includes/footer.php');
   ?>
</body>
</html>