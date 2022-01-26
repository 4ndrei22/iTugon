<?php 
    session_start();
    if(isset($_SESSION['U_unique_id'])){
        include_once "connect.php";
        $outgoing_id = $_SESSION['U_unique_id'];
        $incoming_id = mysqli_real_escape_string($con, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($con, $_POST['message']);
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO ticketinfo (ticketsender_id, ticketreceiver_id, message)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')") or die();
        }
    }else{
        header("location: ../login.php");
    }


    
?>