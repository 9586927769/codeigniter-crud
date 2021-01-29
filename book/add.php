<?php
{   
   if(isset($_POST['submit']) && $_POST['submit']!=''){

    require_once 'connection.php';
   
    $rn=(!empty($_POST['rollno'])) ? $_POST['rollno'] : '';
    $fn=(!empty($_POST['firstname'])) ? $_POST['firstname'] : '';
    $ln=(!empty($_POST['lastname'])) ? $_POST['lastname'] : '';
    $em=(!empty($_POST['email'])) ? $_POST['email'] : '';
    $pd=(!empty($_POST['password'])) ? $_POST['password'] : '';
    $cp=(!empty($_POST['confirmpassword'])) ? $_POST['confirmpassword'] : '';
    $id=(!empty($_POST['student_id'])) ? $_POST['student_id'] : '';

     if(!empty($id)){
   
         $stu_query="UPDATE `bookdatabase` SET `rollno`='".$rn."',`firstname`='".$fn."',`lastname`='".$ln."',`email`='".$em."',`password`='".$pd."',`confirmpassword`='".$cp."' WHERE `id`='".$id."' ";

     }else{
 
        $stu_query="INSERT INTO `bookdatabase` (`rollno`,`firstname`,`lastname`,`email`,`password`,`confirmpassword`) VALUES('".$rn."','".$fn."','".$ln."','".$em."','".$pd."','".$cp."' )";

     }

   

    
      
    $result=mysqli_query($conn,$stu_query);

    if($result){
 
        echo"Record has been saved"; die;
    }
    
   }
     
     if(isset($_GET['id']) && $_GET['id']!='' ){

        require_once 'connection.php';
        $stu_id=$_GET['id'];
        $stu_query="SELECT * FROM `bookdatabase` WHERE id='".$stu_id."'";
        $stu_res=mysqli_query($conn,$stu_query);
        $results=mysqli_fetch_row($stu_res);
        
        $rn=$results[1];
        $fn=$results[2];
        $ln=$results[3];
        $em=$results[4];
        $pd=$results[5];
        $cp=$results[6];


     }else{
        $rn="";
        $fn="";
        $ln="";
        $em="";
        $pd="";
        $cp="";
    $stu_id="";
     }

}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Register Form</title>
</head>
<body>
    <form action="" method="POST">
    <table alignment ="center">
    <tr>
    <td>Rollno: </td>
    <td> <input type="text"   placeholder="rollnumber"  name="rollno"  value="<?php echo $rn; ?>" required></td>
    </tr>
    <tr>  
    <td>First Name: </td>
    <td> <input type="text" placeholder="firstname" name="firstname" value="<?php echo $fn; ?>" required> </td>
    </tr>
    <tr>
    <td>Last Name: </td>
    <td> <input type="text"  placeholder="lastname" name="lastname" value="<?php echo $ln; ?>" required> </td>
    </tr>
    <tr>
    <td>Email: </td>
    <td> <input type="email"  placeholder="example@example.com" name="email" value="<?php echo $em; ?>" required></td>
    </tr>
    <tr>
    <td>Password :</td>
    <td><input type="password" name="password" value="<?php echo $pd; ?>" required></td>    
    </tr>
    <tr>
    <tr> 
    <td>Confirm Password :</td>
    <td><input type="password" name="confirmpassword"  value="<?php echo $cp; ?>" required></td>    
    </tr>
    <tr>
    <td></td>
        <input type="hidden" name="student_id" value="<?php echo $stu_id; ?>">
    <td><input type="submit" name="submit" value="Update"></td>
    </tr>
    </form>
    </table>
</body>
</html>