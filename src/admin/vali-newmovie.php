<?php 
    include 'db.php';

    if(isset($_POST['submit']))
    {
        $mv_name = $_POST['mv_name'];
        $mv_des = $_POST['mv_des'];
        $mv_trailer = $_POST['mv_trailer'];
        $mv_date = date('Y-m-d', strtotime($_POST['mv_date']));
        $target = "../images/".basename($_FILES['img']['name']);
        $img = $_FILES['img']['name'];

        $query = "INSERT INTO `movies`( `mv_name`, `description`, `cover_image`, `date`, `Trailer`) VALUES ( '$mv_name', '$mv_des' ,'$img','$mv_date','$mv_trailer')";

        $run = mysqli_query($con,$query);

        if(move_uploaded_file($_FILES['img']['tmp_name'], $target))
        {
            echo "<script>alert('Movie added!!'); window.location.href='movie-list.php'; </script>";
        }
        else
        {
            echo "<script>alert('Somthing wrong!!'); window.location.href='add-movie.php'; </script>";
        }
        
    }
?>

