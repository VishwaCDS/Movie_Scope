<?php
    include 'header.php';
    include 'ft.php';
    include 'db.php';
?>

<!----add movie Form---->

<div class="container">

<form action="vali-newmovie.php" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter Movie Name" name="mv_name">
  </div>

  <div class="form-group">
      <textarea  rows="5" type="text" class="form-control" placeholder="Enter Movie description" name="mv_des"></textarea>
  </div>

  <div class="form-group">
    <input type="date" class="form-control" placeholder="Enter Movie Release Date" name="mv_date">
  </div>

  <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile" name="img">
    <label class="custom-file-label" for="customFile">Choose file</label>
  </div>

  <br><br>

  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter Movie Trailer" name="mv_trailer">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
</form>

</div>