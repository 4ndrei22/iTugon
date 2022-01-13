<?php
	include 'connect.php';
    $username = $_POST["usernameL"];
    $password = $_POST["passwordL"];

    $sql = $con->query("SELECT Password FROM accountcreation WHERE username = '$username'");

    if ($sql->num_rows > 0)
    {
		$data = $sql->fetch_array();
		    if (password_verify($password, $data['Password'])) {
				header("Location: ../Dashboard(super).php");
		        $msg = "You have been logged IN!";
            } else
				echo '<script>alert("Incorrect Email or Password");</script>';
				header('refresh: 1, url = ../login.php');
			    $msg = "Please check your inputs!";
		}
	 mysqli_close($con);
?>