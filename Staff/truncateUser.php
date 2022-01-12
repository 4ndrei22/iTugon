<?php
    include 'connect.php';
    $sql = "TRUNCATE TABLE staffs";
    mysqli_query($con,$sql);
    header("Location: ../Login.php")
?>