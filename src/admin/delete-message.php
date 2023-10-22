<?php 
    include 'db.php';

    $id = $_GET['conId'];
    $query = "DELETE FROM `contact` WHERE conId= $id";
    $run = mysqli_query($con, $query);

    if($run)
    {
        echo "<script>alert('Message has been deleted!'); window.location.href='message-list.php';</script>";
    
    }
?>