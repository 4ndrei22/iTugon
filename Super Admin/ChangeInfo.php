<?php
	session_start();
	if(isset($_SESSION["firstname"]) && isset($_SESSION["lastname"]) && isset($_SESSION["email"]) && isset($_SESSION["contactnum"]))
	{
	header('Location: Dashboard(super).php');
	exit();
	}
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $contactnum = $_POST["contactnum"];
    
	
	include 'connect.php';

	$sql1 = "UPDATE `accountcreation` SET Firstname = '$firstname', Lastname = '$lastname', Email = '$email', Contactnum = '$contactnum'
            WHERE Firstname = '$firstname' OR Lastname = '$lastname' OR Email = '$email' OR Contactnum = '$contactnum'";
	$sql2 = "SELECT * FROM accountcreation WHERE Firstname = '$firstname' AND Lastname = '$last'";
	mysqli_query($con,$sql1);
	$result = mysqli_query($con, $sql2);

	$count =  mysqli_num_rows ($result);
	if($count == 1)
	{
		while ($row = mysqli_fetch_array($result)){
			if($row["Firstname"] == $firstname || $row["Lastname"] == $lastname || $row["Email"] == $email || $row["Contactnum"] == $contactnum){
				// $_SESSION["userL"] = $user;
				// $_SESSION["passwordL"] = $pass;
				header("Location: ../Dashboard(super).php");
			}
			else{
				echo("Update error");
			}
		}
		
		
	}
	else
	{
		echo ("Update Error. You will be redirected in 3 sec.");
		header("refresh: 3; url=./user.php");
	}
	mysqli_close($con);
?>