<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Scope</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    
    <link rel="shortcut icon" href="images/icons8-movie-32.png" type="image/x-icon">
</head>
<body>

    <!--Header-->
   <?php
     include('./includes/header.php');
     include 'conn.php';
   ?>

    <!-- slider -->
    <div class="slide-container">
        <slider>
            <slide>
                <img src="images/Doctor_strange.jpg" alt="" style="height: 100%; width:100%">
            </slide>

            <slide>
                <img src="images/Venom.jpeg" alt="" style="height: 100%; width:100%">
            </slide>

            <slide>
                <img src="images/kgf-2.jpeg" alt="" style="height: 100%; width:100%">
            </slide>

            <slide>
                <img src="images/The-Batman.jpg" alt="" style="height: 100%; width:100%">
            </slide>

        </slider>
    </div>

    <!--Search field-->
    <div class="search">
        <!-- <input type="text" class="search-box" id="" placeholder="Search movie">
        <button class="search-btn">Search</button> -->
    </div>


    <!--Main header 01 (Now showing)-->
    <div class="first-header">
        <span class="now-showing">NOW SHOWING</span>
    </div>
    <center><hr class="tr-header"></center>

    <div class="wrapper">
    <!------------------Movies insert from admin---------------->
    <?php 
        $query = "SELECT * FROM movies";
        $run = mysqli_query($conn, $query);
        
        if($run)
        {
            while($row = mysqli_fetch_assoc($run))
            {
                ?>

                        <div class="tr-movie">
                            <?php echo "<img src='images/".$row['cover_image']."' >"; ?>
                            <div class="more-btn">
                                <a href="movies-page.php"><button>MORE DETAILS</button></a>
                            </div>
                        </div>
                

                <?php 
            }
        }
    ?>

    </div>
                            <!-- <div class="more-btn">
                                <a href="movies-page.php"><button>MORE DETAILS</button></a>
                            </div>
                        </div> -->
                


    <!-- Footer-->
    <?php
     include('./includes/footer.php');
   ?>

    
</body>
</html>