<?php
    $db = mysqli_connect('localhost', 'root', '', 'db_admin' );
    if (!$db) {
        echo ("Database connection failed");
    }

    $email = $_POST['email'];
    $pssword = $_POST['pssword'];

    $sql = "SELECT * FROM tbl_mobile_app_accounts WHERE email = '".$email."' AND pssword = '".$pssword."'";

    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1){
        echo json_encode("Success");
    }else{        
        echo json_encode("Error");
    }

?>