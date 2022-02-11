<?php
     include 'connect.php';
     
     $email = $_POST['email'];
     $password = $_POST['password'];
 
<<<<<<< HEAD
     $query = $con->query("SELECT username, firstname, lastname, email, unique_id FROM accountcreation WHERE email = '".$email."' AND password = '".md5($password)."'") or die($con->error);
=======
     $query = $db->query("SELECT username, firstname, lastname, email, unique_id FROM accountcreation WHERE email = '".$email."' AND password = '".md5($password)."'") or die($db->error);
>>>>>>> 10aed70430cd56092a165afbef0ca02772b808a7
     
     $result = array();
     
     while($rowData = $query->fetch_assoc()){
         $result[] = $rowData;
     }

     echo json_encode($result);
    

?>