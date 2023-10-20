<?php
    $host = 'localhost';
    $username = 'root';
    $db = 'movie_scope';

    $conn = new mysqli($host, $username, '',$db);

    if($conn->connect_error){
        die( "Connection fail: ".$conn->connect_error);
    }
    else{
        // echo "<script>alert('Connected Succesfully!!');</script>";
    }
?>