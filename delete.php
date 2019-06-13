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
    

    $query = "Delete FROM record where uname='$username' and uage='$userage'" ;


    $result = mysqli_query($conn,$query);

    if(!$result){
        die('Could not delete data: ' . mysql_error());
            }
            
            echo "Deleted data successfully\n";
}
?>

