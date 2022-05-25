<?php 
    $conn = mysqli_connect("localhost","root","","member_db");

    if(!$conn) {
        die("Fail to connect Database" . mysqli_error($conn));
    }
?>