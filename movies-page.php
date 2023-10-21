<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Scope</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="shortcut icon" href="images/icons8-movie-32.png" type="image/x-icon">
</head>
<body>
    
    <!--Header-->
    <?php
     include('./includes/header.php');
     include 'conn.php';
   ?>

    <!-------------------------------------------Block 01 ----------------------------------------------->

    <?php 
        $query = "SELECT * FROM movies";
        $run = mysqli_query($conn, $query);
        
        if($run)
        {
            
            while($row = mysqli_fetch_assoc($run))
            {
                ?>

                    <div id="drs" class="movie-block" style="background-color: rgb(0, 0, 0, 0.7); display: flex; padding: 60px; margin-left: 200px; margin-right: 200px; margin-top: 100px; color: white; border: solid white;" >


                    <div class="movie-cover">
                        <?php echo "<img width='300px' height='400px' src='images/".$row['cover_image']."' >"; ?>
                    </div>

                    <div class="section-02" style="margin-left: 50px;">
                        <span style="font-size: 60px; color:#e1ad01;"><?php echo $row['mv_name'] ?></span>
                        <br>
                        <p><?php echo $row['description'] ?></p>

                        <br>
                        <span style="font-size: 30px;">Release Date: </span>
                        <br>
                        <br>
                        <h3><?php echo $row['date'] ?></h3>
                
                        <div class="movie-btns" style="margin: 20px 0;">
                            <a href="<?php echo $row['Trailer'] ?>" target="_blank"><button>Watch Trailer</button></a>
                        </div>

                    </div> 
                    
                    </div>
                    

                <?php 
            }
        }
    ?>
                
  



    <!-- Footer-->
    <?php
     include('./includes/footer.php');
   ?>

</body>
</html>