<?php 
    include 'db.php';

    $id = $_GET['unameid'];
    $query = "DELETE FROM `admin` WHERE id= $id";
    $run = mysqli_query($con, $query);

    if($run)
    {
        echo "<script>alert('Admin has been deleted!'); window.location.href='admin-list.php';</script>";
    
    }
?>