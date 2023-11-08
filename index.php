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
    
    header("Location:views.php");

   
}

?>



<!DOCTYPE html>
<head>
    <title>Registration</title>
    <style> 
        body {
            background-color: #f4f4f4;
            text-align: center;
        }

        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 0 auto;
        }
        input, textarea {
            width: 100%;
            padding: 6px;
            margin: 6px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="file"] {
            margin: 5px 0;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #258cd1;
        }
        h3{
            color:#098fe9
        }
    </style>
</head>
<body>

    <!-- FORM IS STARTING HERE -->
    <h3>Register Here</h3>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required="value"  autocomplete="off">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required="value"autocomplete="off">

        <label for="phone">Phone:</label>
        <input type="number" id="phone" name="phone"autocomplete="off">

        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4"></textarea>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob">

        <label for="photo">Photo:</label>
        <input type="file" id="photo" name="photo" accept="image/*">

       <input type="submit" value="submit" name="submit"> 
       <button type="button" onclick="window.location.href='views.php'">Admin View</button>
    </form>
    <!-- FORM ENDS HERE -->
</body>
</html>