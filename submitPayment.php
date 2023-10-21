<?php

include 'conn.php'; //importing the DB configaration file

//Assigning inset values from form into variables
	$cNo = $_POST['c_No'];
	$name = $_POST['cusName'];
	$cType = $_POST['c_type'];
	$exDt = $_POST['Ex_Date'];
	$cvv = $_POST['cvv'];
	$hash = password_hash("$cvv", PASSWORD_BCRYPT);

//querry for the insert value
	$sql = "INSERT INTO card(card_no,name,card_type,exp_date,cvv) VALUES ('$cNo', '$name', '$cType', '$exDt', '$hash')";

//sending the querry to the database
	if (mysqli_query($conn,$sql)) {
		header("location:payment.php");
		// echo "succesfully";

	}
	else {
		echo "Error" .$sql. "<br>" .mysqli_error($conn);
	}
	mysqli_close($conn);

?>