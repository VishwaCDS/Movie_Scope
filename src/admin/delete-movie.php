<?php 
    include 'db.php';

    $id = $_GET['movieid'];
    $query = "DELETE FROM `movies` WHERE id= $id";
    $run = mysqli_query($con, $query);

    if($run)
    {
        echo "<script>alert('Movie has been deleted!'); window.location.href='movie-list.php';</script>";
    
    }
?>