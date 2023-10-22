<?php
    include 'header.php';
    include 'ft.php';
    include 'db.php';
?>

<!------Table------------->
<div class="container">
    <center>
    <div class="title">
        <h1>Movies</h1>
        <hr>
    </div>
    </center>
    
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Movie Name</th>
      <th scope="col">Description</th>
      <th scope="col">Cover-image</th>
      <th scope="col">Release-Date</th>
      <th scope="col">Trailer</th>
      <th scope="col">Option</th>
    </tr>
  </thead>

  <!----get data from data base----->
  <?php 
        $query = "SELECT * FROM movies";
        $run = mysqli_query($con, $query);
        
        if($run)
        {
            while($row = mysqli_fetch_assoc($run))
            {
                ?>
                <tbody>
                <tr>
                  <th scope="row"><?php echo $row['id'] ?></th>
                  <td><?php echo $row['mv_name'] ?> </td>
                  <td><?php echo $row['description'] ?></td>
                  <td><?php echo "<img height='200px' width='150px' src='../images/".$row['cover_image']."' >"; ?></td>
                  <td><?php echo $row['date'] ?></td>
                  <td><?php echo $row['Trailer'] ?></td>

                  <td><a href="delete-movie.php?movieid=<?php echo $row['id']; ?>" class="btn btn-danger" >Delete</a><br><br><a class="btn btn-success" href="add-movie.php">New Movie</a></td>
                </tr>
                <?php 
            }
        }
    ?>

  
  </tbody>
</table>
</div>