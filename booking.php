<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Movie Seat Booking</title>
    <link rel="stylesheet" href="styles/booking.css">
    <link rel="stylesheet" href="styles/styles.css">

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    
    <link rel="shortcut icon" href="images/icons8-movie-32.png" type="image/x-icon">
    
    
    <style>
      
    </style>
  </head>
  <body>
  
    <?php
        include('includes/header.php');
    ?>


  
    <div class="movie-container">
	 <h1>Book Your Tickets Now</h1> </br>
      <label style="font-size: 1em;">Pick a movie:</label>
      <select id="movie" name="movie">
        <option value="1000">DOCTOR STRANGE IN THE MULTIVERSE OF MADNESS (U) (Rs.1000)</option>
        <option value="1000">VENOM (Rs.1000)</option>
        <option value="900">KGF CHAPTER 02 (Rs.900)</option>
		    <option value="1000">THE BATMAN (Rs.1000)</option>
      </select>
	  <br>
	  <br>
	    <label>Date : </label>
	    <input id="m_date" name="m_date" type="date" style="margin-left: 80px;"required>
	    <br>
	    <br>
		<label>Show Time : </label>
        <select id="mt_type" name = "mt_type" style="margin-left: 50px;">
            <option>10.30 AM</option>
            <option>1.50 PM</option>
            <option>04.35 PM</option>
			<option>10.45 PM </option>
			</br></br>
      </select>			
    </div>

    <ul class="showcase">
      <li>
        <div id="seat" class="seat"></div>
        <small class="status" style="font-size: 1em;">N/A</small>
      </li>
      <li>
        <div id="seat" class="seat selected"></div>
        <small class="status" style="font-size: 1em;">Selected</small>
      </li>
      <li>
        <div id="seat" class="seat occupied"></div>
        <small class="status" style="font-size: 1em;">Occupied</small>
      </li>
    </ul>

    <div class="container">
      <div class="screen"></div>

      <div class="row">
        <div id="seat 1" class="seat"></div>
        <div id="seat 2" class="seat"></div>
        <div id="seat 3" class="seat"></div>
        <div id="seat 4" class="seat"></div>
        <div id="seat 5" class="seat"></div>
        <div id="seat 6" class="seat"></div>
        <div id="seat 7" class="seat"></div>
        <div id="seat 8" class="seat"></div>
      </div>
      <div class="row">
        <div id="seat 9" class="seat"></div>
        <div id="seat 10" class="seat"></div>
        <div id="seat 11" class="seat"></div>
        <div id="seat 12" class="seat occupied"></div>
        <div id="seat 13" class="seat occupied"></div>
        <div id="seat 14" class="seat"></div>
        <div id="seat 15" class="seat"></div>
        <div id="seat 16" class="seat"></div>
      </div>
      <div class="row">
        <div id="seat 17" class="seat"></div>
        <div id="seat 18" class="seat"></div>
        <div id="seat 19" class="seat"></div>
        <div id="seat 20" class="seat"></div>
        <div id="seat 21" class="seat"></div>
        <div id="seat 22" class="seat occupied"></div>
        <div id="seat 23" class="seat occupied"></div>
		<div id="seat 24" class="seat"></div>
      </div>
      <div class="row">
        
        <div id="seat 25" class="seat"></div>
        <div id="seat 26" class="seat"></div>
        <div id="seat 27" class="seat"></div>
        <div id="seat 28" class="seat"></div>
        <div id="seat 29" class="seat"></div>
        <div id="seat 30" class="seat"></div>
        <div id="seat 31" class="seat"></div>
		<div id="seat 24" class="seat"></div>
      </div>
      <div class="row">
        <div id="seat 32" class="seat"></div>
        <div id="seat 33" class="seat"></div>
        <div id="seat 34" class="seat"></div>
        <div id="seat 35" class="seat occupied"></div>
        <div id="seat 36" class="seat occupied"></div>
        <div id="seat 37" class="seat"></div>
        <div id="seat 38" class="seat"></div>
        <div id="seat 39" class="seat"></div>
		<div id="seat 40" class="seat"></div>
      </div>
      <div class="row">
        <div id="seat 40" class="seat"></div>
        <div id="seat 41" class="seat"></div>
        <div id="seat 42" class="seat"></div>
        <div id="seat 43" class="seat"></div>
        <div id="seat 44" class="seat occupied"></div>
        <div id="seat 45" class="seat occupied"></div>
        <div id="seat 46" class="seat occupied"></div>
        <div id="seat 47" class="seat"></div>
		<div id="seat 48" class="seat"></div>
      </div>
    </div>

    <p class="text" style="font-size: 1em;margin:0px 0px 15px 0px" >
      You have selected <span id="count">0</span> seats for a price of RS. <span
        id="total" name="total"
        >0</span
      >
    </p>

    <a href="./payment.php">
      <button class="btn-home">
        Confim Details & Book Now
      </button>
	  <script>
  
</script>  
    </a>
    

    <script>
     
      var count=0;
      var seats=document.getElementsByClassName("seat");
      for(var i=0;i<seats.length;i++){
        var item=seats[i];
        
        item.addEventListener("click",(event)=>{
          var price= document.getElementById("movie").value;

          if (!event.target.classList.contains('occupied') && !event.target.classList.contains('selected') ){
          count++;
          
          var total=count*price;
          event.target.classList.add("selected");
          document.getElementById("count").innerText=count;
          document.getElementById("total").innerText=total;

          }
        })
      }
    </script>

    <!--Footer-->
    <?php
        include('includes/footer.php');
    ?>
	

</body>
</html>
