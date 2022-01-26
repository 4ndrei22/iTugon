<?php
	$msg = "";

	if (isset($_POST['submit'])) {
        $con = new mysqli('localhost', 'root', '', 'db_admin');

        $firstname = $con->real_escape_string($_POST['firstname']);
        $lastname = $con->real_escape_string($_POST['lastname']);
        $email = $con->real_escape_string($_POST['email']);
        $contactnum = $con->real_escape_string($_POST['contact_number']);
        $accesslvl = $con->real_escape_string($_POST['accessLvl']);
        $username = $con->real_escape_string($_POST['usernameR']);
        $password = $con->real_escape_string($_POST['passwordR']);
        $cPassword = $con->real_escape_string($_POST['conPassword']);

    if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($contactnum) && !empty($accesslvl) && !empty($usernameR) && !empty($passwordR)){
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $sql = mysqli_query($conn, "SELECT * FROM accountcreation WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - This email already exist!";
            }else{
              if(isset($_FILES['image'])){
                $img_name = $_FILES['image']['name'];
                $img_type = $_FILES['image']['type'];
                $tmp_name = $_FILES['image']['tmp_name'];
                
                $img_explode = explode('.',$img_name);
                $img_ext = end($img_explode);

                $extensions = ["jpeg", "png", "jpg"];
                if(in_array($img_ext, $extensions) === true){
                    $types = ["image/jpeg", "image/jpg", "image/png"];
                    if(in_array($img_type, $types) === true){
                        $time = time();
                        $new_img_name = $time.$img_name;
                        if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
                            $ran_id = rand(time(), 100000000);
                            $status = "Active now";
                            $encrypt_pass = md5($password);
                            $insert_query = mysqli_query($conn, "INSERT INTO accountcreation (unique_id, adminkey, firstname, lastname, email, contactNum,username, password, img, status)
                            VALUES ({$ran_id},'{$accesslvl}','{$fname}','{$lname}', '{$email}','{$contactnum}','{$username}', '{$encrypt_pass}', '{$new_img_name}', '{$status}')");
                            if($insert_query){
                                $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if(mysqli_num_rows($select_sql2) > 0){
                                    $result = mysqli_fetch_assoc($select_sql2);
                                    $_SESSION['U_unique_id'] = $result['unique_id'];
                                    echo "success";
                                }else{
                                    echo "This email address not Exist!";
                                }
                            }else{
                                echo "Something went wrong. Please try again!";
                            }
                        }
                    }else{
                        echo "Please upload an image file - jpeg, png, jpg";
                    }
                }else{
                    echo "Please upload an image file - jpeg, png, jpg";
                }
              }
            }
      }else{$msg = "$email is not a valid email";}
    }else{ $msg = "all input fields are required";}

	 	if ($password != $cPassword)
	 		$msg = "Please Check Your Passwords!";
	 	else {
	 		$hash = password_hash($password, PASSWORD_BCRYPT);
      
	 		$con->query("INSERT INTO accountcreation (AdminKey, Firstname, Lastname,email, contactnum, username, password) VALUES ('$accesslvl','$firstname', '$lastname', '$email','$contactnum', '$username', '$hash')");
	 		$msg = "You have been registered!";
       echo "<meta http-equiv='refresh' content='0'>";
       header('Location: AdminCreation.php');
	 	}
	 }
?>