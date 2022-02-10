<?php
    $db = mysqli_connect('localhost', 'root', '', 'db_admin' );
    if (!$db) {
        echo ("Database connection failed");
    }
    // ini_set('display_errors', 'Off');
    
    $ticket_owner = $_POST['ticket_owner'];
    $ticket_id = $_POST['ticket_id'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    $sub_category = $_POST['sub_category'];
    $date_needed = $_POST['date_needed']; 
    $office_code = (int)$_POST['office_code'];
    $msg = $_POST['msg']; 

    $sql = "SELECT * FROM ticketinfo WHERE ticket_id  = '".$ticket_id."'";

    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1){
        echo json_encode("Error");
    }else{
        $createTicket = "INSERT INTO ticketinfo(ticket_owner, ticket_id, message, subject, sub_category, date_needed, office_code) 
        VALUES('.$ticket_owner.', '".$ticket_id."', '".$message."', '".$subject."', '".$sub_category."', '".$date_needed."', '.$office_code.')";

        $newMessage = "INSERT INTO messages(outgoing_msg_id, ticket_id, msg) 
        VALUES('.$ticket_owner.', '".$ticket_id."', '".$msg."')";
    #    $insert = "INSERT INTO ticketinfo(ticket_id, message, subject, sub_category) 
    #    VALUES('".$ticket_id."', '".$message."', '".$subject."', '".$sub_category."')" or die($db->error);

        $query1 = mysqli_query($db, $createTicket);
        $query2 = mysqli_query($db, $newMessage);

        if ($query1 && $query2){
            echo json_encode("Success");
        }
    }

?>