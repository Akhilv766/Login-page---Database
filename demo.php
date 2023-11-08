<?php 

include("connection.php");

if(isset($_POST["submit"]))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];
    $photo=$_POST['photo'];

    $sql="INSERT INTO trogon_table(name,email,phone,address,dob,photo)VALUES('$name','$email','$phone','$address','$dob','$photo')";

    $result = mysqli_query($conn,$sql);
    
    header("Location:index.php");

   
}

?>
