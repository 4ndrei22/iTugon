<?php
     $db = mysqli_connect('localhost', 'root', '', 'db_admin' );
     if (!$db) {
         echo ("Database connection failed");
     }

     $ticket_owner = $_POST['ticket_owner'];
 
     $query = $db->query("SELECT ticket_id, subject, priority_lvl, status FROM ticketinfo WHERE ticket_owner  = '$ticket_owner' ORDER BY timestamp DESC") or die($db->error);
     #$query = $db->query("SELECT ticket_id, subject, priority_lvl, status FROM ticketinfo WHERE ticket_owner  = 123123123") or die($db->error);
     
     $result = array();
     
     while($rowData = $query->fetch_assoc()){
         $result[] = $rowData;
     }

     echo json_encode($result);
    

?>