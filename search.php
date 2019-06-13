<?php 

    if (isset($_POST['submit_login'])) {  
    extract($_POST);  
    $servername = "localhost";  
    $username   = "root";  
    $password   = "";  
    $dbname     = "form";  
    // Create connection  
    $conn       = new mysqli($servername, $username, $password, $dbname);  
    // Check connection  
    if ($conn->connect_error) {  
        die("Connection failed: " . $conn->connect_error);  
    }  

    $username = mysqli_escape_string($conn,$_POST['uname']);
    $userage = mysqli_escape_string($conn, $_POST['uage']);
    

    $query = "SELECT * FROM record where uname='$username' and uage='$userage'" ;


    $result = mysqli_query($conn,$query);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Record</title>
    <style type="text/css">
        header {
  background-color: #333;
  position: relative;
  width: 100%;
}
 .headright{
            float: right;
            margin-right: 10px;
            margin-bottom: 1px;
            margin-top: 35px
        }
    </style>
</head>
<body>
    <header>
        <table><tr>
            <div>
            <td><img src="studentLogo.jpg" style="width:100px;height:100px;"></td>
            <td><h1 style = "color: red;font-size: 200%;"> Student Information</h1></td></div>
            <div class="headright">
            <a href="SignUP.html" target="right" style="color: White;font-size: 20px;">New Student</a>
            <a href="delete.html" target="right" style="color: White;font-size: 20px;">Delete detail</a>
            </div>
        </table>
    </header>
    <center>
    <div>
        <h style = "color: black;text-align: center ; font-size: 250%;">
        Search Data
    </h>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Age</td>
            <td>Gender</td>
            <td>Email</td>
            <td>Contact</td>
            <td>Department</td>
        </tr>

        <?php
        if($row=mysqli_fetch_array($result)){

        ?>
        <tr>
            <td><?php echo $row["uname"]; ?></td>
            <td><?php echo $row["uage"]; ?></td>
            <td><?php echo $row["gender"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["mob"]; ?></td>
            <td><?php echo $row["dep"]; ?></td>
        </tr>
        <?php

        }
        ?>

    </table>
    </div>
    </center>
</body>
</html>