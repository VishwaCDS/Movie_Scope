<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My-Profile</title>
    <link rel="stylesheet" href="styles/styles_profile.css">

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    
    <link rel="shortcut icon" href="images/icons8-movie-32.png" type="image/x-icon">
</head>
<body>

<?php
    include('conn.php');
?>


<!-------------------------side panel------------------------->
    <?php
        include('includes/side_panel.php');
    ?>

<!--Profile-->

<div id="profile">
    <div id="profile-pic">
        <img id="cover-img" src="images/bg-1.jpg" width="800px" height="160px">
        <img id="main-img" src="images/dp-1.jpg"  width="100px" height="100px">
    </div>

    <div id="devide-line">
        
    </div>

    <div id="container-1">
        <form id="form-profile" action="new_update.php" method="post">
            <h3 id="ep-text">Edit Profile</h3>
            
            <h4 id="C_un">Current Username</h4>
            <input id="cusername" type="text" name="C_username">

            <h4 id="N_un">New Username</h4>
            <input id="nusername" type="text" name="N_username">

            <!-- ------------------------------------------------------------------------------------------- -->
            <h4 id="fn-text">First Name</h4>
            <input id="first-name" type="text" name="firstName">
            
            <h4 id="ln-text">Last Name</h4>
            <input id="last-name" type="text" name="lastName"> 

            <h4 id="en-text">e-mail</h4>
            <input id="email" type="email" name="email">  

            <h3 id="cp-1">Change Password</h3>

            <h4 id="cp">Current password</h4>
            <input id="c-password" type="password" name="c_password">

            <h4 id="np">New password</h4>
            <input id="new-password" type="password" name="newPassword">
           
            <button id="btn-1" name=update><span>Update</span></button>
        </form>
    </div>
</div>

    <!--Header-->
    <?php
        include('includes/header.php');
    ?>

    <!--Footer-->
    <?php
        include('includes/footer.php');
    ?>

</body>
</html>