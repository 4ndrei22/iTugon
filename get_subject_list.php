<?php
     $db = mysqli_connect('localhost', 'root', '', 'db_admin' );
     if (!$db) {
         echo ("Database connection failed");
     }

 
     $query = $db->query("SELECT * FROM office_code") or die($db->error);
     
     $result = array();
     
     while($rowData = $query->fetch_assoc()){
         $result[] = $rowData;
     }

     echo json_encode($result);
    

?>