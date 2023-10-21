<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Scope- Register</title>

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
  <!-------------- Register Page----------------------->
    <div class="register-head">
        <span class="Create_acc">
            <center>Create Account</center>
        </span>
        <hr style="margin: 0 300px 0 300px;">
            <div class="register_form">
                <form action="includes/register_val.php" method="POST">
                    <h1>Register</h1>
                    <p>Please fill this form to create account</p>
                    <hr><br>

                    <label for=""><b>Username</b></label>
                    <input type="text"  name="username" placeholder="Enter Username" class="fill_form" required>

                    <label for=""><b>First name</b></label>
                    <input type="text"  name="f_name" placeholder="Enter First name" class="fill_form" required>

                    <label for=""><b>Last name</b></label>
                    <input type="text"  name="l_name" placeholder="Enter Last name" class="fill_form" required>

                    <label for=""><b>E-mail</b></label>
                    <input type="email" name="email"  placeholder="Enter Valid E-mail" class="fill_form" required>

                    <label for=""><b>Password</b></label>
                    <input type="password"  name="password" placeholder="Password" class="fill_form" required>

                    <label for=""><b>Repeat Password</b></label>
                    <input type="password"  name="re_pass" placeholder="Repeat Password" class="fill_form" required>

                    <hr><br>

                    <input type="checkbox" id="chk" class="check_box" onchange="acceptTerm()">
                    <span>agree to our <a href="">terms and conditions</a></span>

                    <br>
                    <br>

                    <button type="submit" name="reg_sub"  id="submit" class="submit_btn" disabled>Register</button>
                    
                </form>
            </div>    
    </div>


    <!-- Footer-->
    <?php
     include('./includes/footer.php');
   ?> 
</body>
</html>