<?php
    include 'header.php';
    include 'ft.php';
    include 'db.php';
?>

<!------Table------------->
<div class="container">
    <center>
    <div class="title">
        <h1>Messages</h1>
        <hr>
    </div>
    </center>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Phone No</th>
      <th scope="col">Message</th>
      <th scope="col"></th>
    </tr>
  </thead>

  <!----get data from data base----->
  <?php 
        $query = "SELECT * FROM contact";
        $run = mysqli_query($con, $query);
        
        if($run)
        {
            while($row = mysqli_fetch_assoc($run))
            {
                ?>
                <tbody>
                <tr>
                  <th scope="row"><?php echo $row['conId'] ?></th>
                  <td><?php echo $row['name'] ?> </td>
                  <td><?php echo $row['email'] ?> </td>
                  <td><?php echo $row['phoneNo'] ?> </td>
                  <td><?php echo $row['message'] ?> </td>
                  <td><a href="delete-message.php?conId=<?php echo $row['conId']; ?>" class="btn btn-danger" >Delete</a></td>
                </tr>
                <?php 
            }
        }
    ?>

  
  </tbody>
</table>
</div>