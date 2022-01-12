<?php
	include 'connect.php';
	session_start();
    if(isset($_SESSION["usernameL"]) && $_SESSION["passwordL"]){
	 	header('Location: Login.php');
    }
    $user = $_POST["usernameL"];
	//$pass = $_POST["passwordL"];
	$pass = password_hash($_POST["passwordL"], PASSWORD_DEFAULT);

    $username = "";
    $password = "";
	$accessLVL = "";

    $select = "SELECT * FROM accountcreation WHERE 'username' = '$user'";
    $result = mysqli_query($con,$select);
    
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result))
        {
			$newPass = $row["Password"];
			$newuser = $row["Username"];
			if($row["adminKey"] == "Staff"){
				
				if($newuser == $user){
					if(password_verify($pass,$newPass)){
						$insert = "INSERT INTO staffs (Firstname,Lastname,Email,Contactnum, accessLVL) SELECT Firstname,Lastname,Email,Contactnum,AdminKey FROM accountcreation WHERE Username = '$user'";
						mysqli_query($con,$insert);
						$_SESSION["UsernameL"] = $username;
						$_SESSION["PasswordL"] = $password;
						echo "<meta http-equiv='refresh' content='0'>";
						header("Location: ../Dashboard(staff).php");
					}else{
						echo '<script>alert("Incorrect password");</script>';
						header('refresh: 1, url = ../logincopy.php');
					 }
				}else{
					echo '<script>alert("Incorrect username");</script>';
						header('refresh: 1, url = ../logincopy.php');
				}
				
				}elseif($row["adminKey"] == "Super Admin"){
					if($newuser == $user){
						if(password_verify($pass,$newPass)){
							$insert = "INSERT INTO staffs (Firstname,Lastname,Email,Contactnum, accessLVL) SELECT Firstname,Lastname,Email,Contactnum,AdminKey FROM accountcreation WHERE Username = '$user'";
						mysqli_query($con,$insert);
							$_SESSION["UsernameL"] = $username;
							$_SESSION["PasswordL"] = $password;
							echo "<meta http-equiv='refresh' content='0'>";
							header("Location: ../Dashboard(staff).php");
						}else{
							echo '<script>alert("Incorrect password");</script>';
							header('refresh: 1, url = ../logincopy.php');
						 }
					}else{
						echo '<script>alert("Incorrect username");</script>';
							header('refresh: 1, url = ../logincopy.php');
					}
					
				}else{
						echo '<script>alert("Incorrect Email or Password");</script>';
						header('refresh: 1, url = ../logincopy.php');
				
					}
			
        }
    }

	 mysqli_close($con);
?>