<?php

if(!empty($_GET['id'])){


   require_once 'connection.php';
   $student_id=$_GET['id'];
   $del_query="DELETE FROM `bookdatabase` WHERE id='$student_id'";
   $result=mysqli_query($conn,$del_query);

   if($result){
       
       header('location:/book/display.php?msg=deleted');

   }
}



?>