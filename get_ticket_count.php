<?php
     $db = mysqli_connect('localhost', 'root', '', 'db_admin' );
     if (!$db) {
         echo ("Database connection failed");
     }

 
     $result = $db->query("SELECT * from ticketinfo") or die($db->error);
     
     $num_rows = mysqli_num_rows($result);

     echo json_encode($num_rows);
     #echo $num_rows;
    

?>