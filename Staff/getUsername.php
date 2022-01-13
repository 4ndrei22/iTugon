<?php
 include 'connect.php';
 if(!empty($_POST)) {
        $username = $_POST['CurUsername'];
        $newUsername = $_POST['NewUsername'];
        $password = $_POST['CUPassword'];

        $select = "SELECT * FROM accountcreation WHERE username='$username'";
        $result = mysqli_query($con,$select);
        if($result==1){
            $sql1 = "UPDATE `accountcreation` SET Username = '$newUsername' WHERE Username = '$username' and Password = '$password'";
            $sql2 = "UPDATE `loginaccess` SET username = '$newUsername' WHERE username = '$username'";
            mysqli_query($con,$sql1);
            mysqli_query($con,$sql2);
            echo "<meta http-equiv='refresh' content='0'>";
            header('Location: ChangeUsername.php');  
        }
        else{
            echo'<script>alert("Incorrect Email or Password");</script>';
        }

        
      }
 
?>
