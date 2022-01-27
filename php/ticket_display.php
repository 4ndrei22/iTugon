<?php
    session_start();
    include_once "config.php";

    $outgoing_id = $_SESSION['U_unique_id'];
    $display_ticket = mysqli_real_escape_string($conn, $_POST['searchTerm']);

    $sql = "SELECT * FROM accountcreation WHERE NOT unique_id = {$outgoing_id} AND (firstname LIKE '%{$display_ticket}%' OR lastname LIKE '%{$display_ticket}%') ";
    $output = "";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query) > 0){
        include_once "ticket_data.php";
    }else{
        $output .= '<p class="text-muted fw-600 text-center">No user found</p>';
    }
    echo $output;
?>