<!DOCTYPE html>
	<html>
		<head>
			<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/payment.css">

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    
    <link rel="shortcut icon" href="images/icons8-movie-32.png" type="image/x-icon">
		</head>


		
		<body>

        <!--Header-->
    <?php
        include('includes/header.php');
    ?>

		

		<!-- create form for insert payment details -->	

		<form method="post" action="submitPayment.php" class="form" >
			 <div class="sdiv" >
				<h1>Payment Information</h1>
				<h2>How would you like to pay?</h2> </br> </br></br>
		     	               
                </select>
                <h3>My  Card Details :</h3></br> </br>
                <label color: #e6b800; >Card Type : </label>
                <select id="c_type" name = "c_type" style="margin-left: 50px;">
                    <option>American Express</option>
                    <option>Master Card</option>
                    <option>Visa Card</option>
                </select>
                <br>
                <br>
                	<label>Card Number : </label>
                	<input id="c_No" name = "c_No" type="numeric" style="margin-left: 26px;" pattern="[0-9]{16}" required>
	                <br>
	                <br>
	                <label>Name : </label>
	                <input id="cusName" name = "cusName" type="text" style="margin-left: 85px;" required>
	                <br>
	                <br>
	                <label>Expiry Date : </label>
	                <input id="Ex_Date" name="Ex_Date" type="date" style="margin-left: 85px;"required>
	                <br>
	                <br>
	                <label>CVV : </label>
	                <input id="cvv" name="cvv" type="number" style="margin-left: 97px;" pattern="[0-9]{3}" required>
	                <br><br/><br/>
	                 <input type="submit" value="Pay Now" style="margin-left: 50px; text-decoration: none; background-color:#e6b800 color: black;; font-size: 18px; font-weight: bold; background-color: #4d4d4d; color:#e6b800 ">
	                <br><br><br>
	                
                 


            </div>
        </form>  

        <!--Footer-->
    <?php
        include('includes/footer.php');
    ?>

        

</body>
</html>