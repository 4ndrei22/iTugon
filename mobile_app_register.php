<?php
    $db = mysqli_connect('localhost', 'root', '', 'db_admin' );
    if (!$db) {
        echo ("Database connection failed");
    }

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $account_type = $_POST['account_type'];
    $id_number = $_POST['id_number'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number']; 
    $pssword = $_POST['pssword'];

    $sql = "SELECT * FROM tbl_mobile_app_accounts WHERE email = '".$email."' AND pssword = '".$pssword."'";

    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1){
        echo json_encode("Error");
    }else{
        $insert = "INSERT INTO tbl_mobile_app_accounts(first_name, last_name, account_type, id_number, email, contact_number, pssword) 
        VALUES('".$first_name."', '".$last_name."', '".$account_type."', '".$id_number."', '".$email."', '".$contact_number."', '".$pssword."',)";

        $query = mysqli_query($db, $insert);

        if ($que3w2ery){
            echo json_encode("Success");
        }
    }

?>