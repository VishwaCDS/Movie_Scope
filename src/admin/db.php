<?php

    $host = 'localhost';
    $username = 'root';
    $db = 'movie_scope';

    $con = new mysqli($host, $username, '',$db);

    if($con->connect_error){
        die( "Connection fail: ".$con->connect_error);
    }
    else{
        //echo "<script>alert('Connected Succesfully!!');</script>";
    }

?>