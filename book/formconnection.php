
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
    <td> <input type="text"   placeholder="rollnumber"  name="rollno" required></td>
    </tr>
    <tr>  
    <td>First Name: </td>
    <td> <input type="text" placeholder="firstname" name="firstname" required> </td>
    </tr>
    <tr>
    <td>Last Name: </td>
    <td> <input type="text"  placeholder="lastname" name="lastname"required> </td>
    </tr>
    <tr>
    <td>Email: </td>
    <td> <input type="email"  placeholder="example@example.com" name="email"required></td>
    </tr>
    <tr>
    <td>Password :</td>
    <td><input type="password" name="password" required></td>    
    </tr>
    <tr>
    <tr>
    <td>Confirm Password :</td>
    <td><input type="password" name="confirmpassword" required></td>    
    </tr>
    <tr>
    <td></td>
    <td><input type="submit" name="submit" value="Sign in"></td>
    </tr>
    </form>
    </table>
</body>
</html>

<?php
{
   if(isset($_POST['submit']) && $_POST['submit']!=''){

    require_once 'connection.php';
   
    $rn=(!empty($_POST['rollnumber'])) ? $_POST['rollnumber'] : '';
    $fn=(!empty($_POST['firstname'])) ? $_POST['firstname'] : '';
    $ln=(!empty($_POST['lastname'])) ? $_POST['lastname'] : '';
    $em=(!empty($_POST['email'])) ? $_POST['email'] : '';
    $pd=(!empty($_POST['password'])) ? $_POST['password'] : '';
    $cp=(!empty($_POST['confirmpassword'])) ? $_POST['confirmpassword'] : '';


    $stu_query="INSERT INTO `bookdatabase` (`rollno`,`firstname`,`lastname`,`email`,`password`,`confirmpassword`) VALUES('".$rn."','".$fn."','".$ln."','".$em."','".$pd."','".$cp."' )";
      
    $result=mysqli_query($conn,$stu_query);

    if($result){
 
        echo"Record has been saved"; die;
    }
    
   }
}
?>