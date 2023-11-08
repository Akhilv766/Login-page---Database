
<?php
    include("connection.php");

    $abc="SELECT * FROM trogon_table";
    $def=mysqli_query($conn,$abc);

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Of Users</title>
</head>
<body>
<center><h1><bold><u>List Of Users</bold></u></h1></center>
<center>
    <table border="3">
        <tr><th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>ADDRESS</th>
        <th>PHOTO</th>
        <!-- <th>EDIT</th>
        <th>DELETE</th> -->
        <tr>
            <?php
             while($row=mysqli_fetch_assoc($def))

             {
            ?>
                <td> <?php echo $row['id']; ?> </td>
                <td> <?php echo $row['name']; ?> </td>
                <td> <?php echo $row['email']; ?> </td>
                <td> <?php echo $row['phone']; ?> </td>
                <td> <?php echo $row['address']; ?> </td>
                <td> <?php echo $row['photo']; ?> </td>
                <td><a href="#">EDIT</a></td>
                <td><a href="#">DELETE</a></td>
             
        </tr>
           <?php
             }

             ?>
            
            

    
</center>
</body>
</html>