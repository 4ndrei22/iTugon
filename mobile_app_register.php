<?php
    $db = mysqli_connect('localhost', 'root', '', 'db_admin' );
    if (!$db) {
        echo ("Database connection failed");
    }

    $adminkey = $_POST['adminkey'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $id_number = $_POST['id_number'];
    $email = $_POST['email'];
    $contactNum = $_POST['contactNum'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM accountcreation WHERE email = '".$email."'";

    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1){
        echo json_encode("Error");
    }else{
        $insert = "INSERT INTO accountcreation(adminkey, firstname, lastname, email, contactNum, username, password, id_number,) 
        VALUES('".$adminkey."', '".$firstname."', '".$lastname."', '".$email."', '".$contactNum."', '".$username."', '".$pssword."', '".$id_number."')";

        $query = mysqli_query($db, $insert);

        if ($query){
            echo json_encode("Success");
        }
    }

?>