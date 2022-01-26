<?php
    session_start();
    include_once "connect.php";

    $outgoing_id = $_SESSION['U_unique_id'];
    $searchTerm = mysqli_real_escape_string($con, $_POST['searchTerm']);

    $sql = "SELECT * FROM accountcreation WHERE NOT unique_id = {$outgoing_id} AND (firstname LIKE '%{$searchTerm}%' OR lastname LIKE '%{$searchTerm}%') ";
    $output = "";
    $query = mysqli_query($con, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>