<?php
    $conn=mysqli_connect("localhost","root","","website");
    
    if($conn->connect_error){
    $dbError = "Database connection failed.";
}
?>