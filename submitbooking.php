<?php

	include 'header.php';
    include 'ft.php';
    include 'db.php';; //importing the DB configaration file

//Assigning inset values from form into variables
	$movie = $_POST['movie'];
	$total = $_POST['total'];
	$mtType = $_POST['mt_type'];
	$mDt = $_POST['m_Date'];
	$sno = $_POST['s_no'];
//querry for the insert value
	$sql = "INSERT INTO card(movie,total,mt_type,m_date,m_Date,s_no) VALUES ('$movie', '$total', '$mtType', '$mDt', '$sno')";

//sending the querry to the database
	if (mysqli_query($conn,$sql)) {
		header("location:booking.php");
		// echo "succesfully";

	}
	else {
		echo "Error" .$sql. "<br>" .mysqli_error($conn);
	}
	mysqli_close($conn);

?>