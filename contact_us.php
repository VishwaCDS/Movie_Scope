<!DOCTYPE html> 
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Contact-Us</title>
        <link rel="stylesheet" href="styles/contact_us.css">
        <link rel="stylesheet" href="styles/styles.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <link rel="shortcut icon" href="images/icons8-movie-32.png" type="image/x-icon">
    </head>
    <body>

        <!--Header-->
        <?php
        include('./includes/header.php');
        include ('conn.php');
        ?>

        <div class="contact-section">
            
            <h1>Contact Us </h1>

            <form class="contact-form"  method="post">
                <input type="text" class="contact-form-text" placeholder="Your name" name="name">
                <input type="email" class="contact-form-text" placeholder="Your email" name="email">
                <input type="text" class="contact-form-text" placeholder="Your phone" name="phone">
                <textarea class="contact-form-text"placeholder="Your message" name="message"></textarea>
                <input type="submit" class="contact-form-btn" value="Send" name="submit">
            </form>
        </div>

        <!-----after click submit button---->
<?php 
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];


        // ---------------------------------------------------------------------------------------------------------
        $sql = "INSERT INTO `contact`(`name`, `email`, `phoneNo`, `message`) VALUES ('$name','$email','$phone','$message')";
        $result = $conn->query($sql);

            if($result)
            {
                echo "<script>alert('Massege send to admin!!'); window.location.href='contact_us.php'; </script>";
                exit();
            }

            else
            {
              
            }

    }
?>

        <!-- Footer-->
        <?php
        include('./includes/footer.php');
        ?>

    </body>
</html>