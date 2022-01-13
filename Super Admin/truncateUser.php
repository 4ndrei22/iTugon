<?php
    include 'connect.php';
    $sql = "TRUNCATE TABLE loginaccess";
    mysqli_query($con,$sql);
    header("Location: ../Login.php")
?>