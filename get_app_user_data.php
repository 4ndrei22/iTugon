<?php
     $db = mysqli_connect('localhost', 'root', '', 'db_admin' );
     if (!$db) {
         echo ("Database connection failed");
     }

     $email = $_POST['email'];
     $password = $_POST['password'];
 
     $query = $db->query("SELECT * FROM accountcreation WHERE email = '".$email."' AND password = '".md5($password)."'") or die($db->error);
     
     $result = array();
     
     while($rowData = $query->fetch_assoc()){
         $result[] = $rowData;
     }

     echo json_encode($result);
    

?>