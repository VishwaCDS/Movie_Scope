<?php
    include 'header.php';
    include 'ft.php';
    include 'db.php';
?>

<!------Table------------->
<div class="container">
    <center>
    <div class="title">
        <h1>Admins in Movie Scope</h1>
        <hr>
    </div>
    </center>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">password</th>
      <th scope="col"></th>
    </tr>
  </thead>

  <!----get data from data base----->
  <?php 
        $query = "SELECT * FROM admin";
        $run = mysqli_query($con, $query);
        
        if($run)
        {
            while($row = mysqli_fetch_assoc($run))
            {
                ?>
                <tbody>
                <tr>
                  <th scope="row"><?php echo $row['id'] ?></th>
                  <td><?php echo $row['uName'] ?> </td>
                  <td><pre>Password Encrypt</pre></td>
                  <td><a href="delete-admin.php?unameid=<?php echo $row['id']; ?>" class="btn btn-danger" >Delete</a> <a class="btn btn-success" href="register-admin.php">New Admin</a></td>
                </tr>
                <?php 
            }
        }
    ?>

  
  </tbody>
</table>
</div>