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
        <input type="text" class="search-box" id="" placeholder="Search movie">
        <button class="search-btn">Search</button>
    </div>

    <!--Main header 01 (Now showing)-->
    <div class="first-header">
        <span class="now-showing">NOW SHOWING</span>
    </div>
    <center><hr class="tr-header"></center>

    <div class="wrapper">
            <div class="tr-movie">
                <img src="images/drs-m.jpg" alt="dr.strange">

                <div class="more-btn">
                    <a href="movies-page.php#drs"><button>MORE DETAILS</button></a>
                </div>
            </div>

            <div class="tr-movie">
                <img src="images/KGF-m.jpg" alt="kgf">

                <div class="more-btn">
                    <a href="movies-page.php#kgf"><button>MORE DETAILS</button></a>
                </div>
            </div>

            <div class="tr-movie">
                <img src="images/sonic-m.jpg" alt="sonic">

                <div class="more-btn">
                    <a href="movies-page.php#sonic"><button>MORE DETAILS</button></a>
                </div>
            </div>

            <div class="tr-movie">
                <img src="images/beasts-m.jpg" alt="beast">

                <div class="more-btn">
                    <a href="movies-page.php#beasts"><button>MORE DETAILS</button></a>
                </div>
            </div>

            <div class="tr-movie">
                <img src="images/memory-m.jpg" alt="memory">

                <div class="more-btn">
                    <a href="movies-page.php#memory"><button>MORE DETAILS</button></a>
                </div>
            </div>

            <div class="tr-movie">
                <img src="images/minion-m.jpg" alt="minion">

                <div class="more-btn">
                    <a href="movies-page.php#minion"><button>MORE DETAILS</button></a>
                </div>
            </div>

            <div class="tr-movie">
                <img src="images/runway-m.jpg" alt="runway">

                <div class="more-btn">
                    <button>MORE DETAILS</button>
                </div>
            </div>

            <div class="tr-movie">
                <img src="images/thor-m.jpg" alt="thor">

                <div class="more-btn">
                    <button>MORE DETAILS</button>
                </div>
            </div>

    </div>

    <!--Coming soon section-->
    <div class="second-header">
        <span class="coming-soon">COMING SOON</span>
    </div>
    <center><hr class="tr-header"></center>
    
    <div class="wrapper">

        <div class="tr-movie">
            <img src="images/JW-m.jpg" alt="jw">

            <div class="more-btn">
                <a href="movies-page.php#jw"><button>MORE DETAILS</button></a>
            </div>
        </div>

        <div class="tr-movie">
            <img src="images/pets-m.jpg" alt="pets">

            <div class="more-btn">
                <a href="movies-page.php#pets"><button>MORE DETAILS</button></a>
            </div>
        </div>

        <div class="tr-movie">
            <img src="images/Avatar-m.jpg" alt="avatar">

            <div class="more-btn">
                <a href="movies-page.php#avatar"><button>MORE DETAILS</button></a>
            </div>
        </div>
    </div>
            

    <!-- Footer-->
    <?php
     include('./includes/footer.php');
   ?>

    
</body>
</html>