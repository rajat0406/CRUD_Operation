<?php  
if (isset($_POST['Submit'])) {  
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

    $department = $_POST["dep"];

    $sql = "INSERT INTO record (uname,uage,gender,email,mob,dep)  
    VALUES ('$uname','$uage','$gender','$email','$mob','$department')";  
    
    if ($conn->query($sql) === TRUE) {  
        header('Location: form1.html');  
    } else {  
        echo "Error: Someone already register using this number";/* . $sql . "<br>" . $conn->error;*/  
    }  
    $conn->close();  
} 