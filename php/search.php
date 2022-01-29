<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['U_unique_id'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);

    $sql1 = "SELECT * FROM ticketinfo WHERE NOT ticket_id = {$outgoing_id}";
    $output = "";
    $query1 = mysqli_query($conn, $sql1);
    if(mysqli_num_rows($query1) > 0){
        $row = mysqli_fetch_assoc($query1);
        $sql="SELECT * FROM accountcreation WHERE unique_id = {$row['ticket_id']}  AND (firstname LIKE '%{$searchTerm}%' OR lastname LIKE '%{$searchTerm}%')";
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query) > 0){
            include_once "data.php";
        }else{
            $output .= '<p class="text-muted fw-600 text-center">No user found</p>';
        }
        
    }else{
        $output .= '<p class="text-muted fw-600 text-center">No user found</p>';
        
    }
    echo $output;
?>