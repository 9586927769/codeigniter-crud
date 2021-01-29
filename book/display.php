<?php
  require_once 'connection.php';
  $query="SELECT * FROM `BOOKDATABASE`";

$results=mysqli_query($conn,$query);
$records=mysqli_num_rows($results);

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title></title>
      <table class="table">
      <form action="" method="POST">
      <table class="table">
      <thread>
       <tr>
       <th>RollNo</th>
       <th>First Name</th>
       <th>Last Name</th>
       <th>Email</th>
       <th alignment="center">Password</th>
       <th alignment="center">ConfirmPassword</th>
       <th colspan="2">Operation</th>     
       </tr>

</head>
<body>
      
</body>
</html>
    <?php
      if(!empty($records)){

           while($row= mysqli_fetch_assoc($results)){
              ?>
                <tr>
                <td><?php echo $row['rollno'];?></td>
                <td><?php echo $row['firstname'];?> </td>
                <td><?php echo $row['lastname'];?> </td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['password'];?> </td>
                <td><?php echo $row['confirmpassword'];?></td>
                <td><a href="add.php?id=<?php echo $row['id']; ?>">Update </td>
                <td><a href="delete.php?id=<?php echo $row['id'];?>">delete</td>
                 </tr>

              <?php 
              
           } 
       
              
      }
