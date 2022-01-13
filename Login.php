<?php
	$msg = "";

	if (isset($_POST['submit'])) {
		$con = new mysqli('localhost', 'root', '', 'db_admin');

		$username = $con->real_escape_string($_POST['usernameL']);
		$password = $con->real_escape_string($_POST['passwordL']);

		$sql = $con->query("SELECT id, password,adminkey FROM accountcreation WHERE username='$username'");
		if ($sql->num_rows > 0) {
		    $data = $sql->fetch_array();
		    if (password_verify($password, $data['password']) && $data['adminkey'] == 1) {

		        $msg = "You have been logged IN to staff dashboard";
            $insert = "INSERT INTO loginaccess (Firstname,Lastname,Email,Contactnum, accessLVL,Username) SELECT firstname,lastname,email,contactNum,adminkey,username FROM accountcreation WHERE username = '$username' ";
				    mysqli_query($con,$insert);
            header("Location: Dashboard(Staff).php");

            }elseif (password_verify($password, $data['password']) && $data['adminkey'] == 2) {

              $msg = "You have been logged IN to admin dashboard";
              $insert = "INSERT INTO loginaccess (firstname,lastname,email,contactnum, accesslvl,username) SELECT firstname,lastname,email,contactNum,adminkey,username FROM accountcreation WHERE username = '$username' ";
				      mysqli_query($con,$insert);
              header("Location: Dashboard(super).php");
              } else
			    $msg = "Please check your inputs!";
        } else
            $msg = "Please check your inputs!";
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="./Image Files/Logo/BulSU.png">
  <title>BulSU iTugon</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./CSS Files/Login.css">
  <link rel="stylesheet" href="./CSS Files/Staff_Dashboard.css">
</head>
<body>
    <div class="row">
        <div class="col-md-7 slideshow-container">
          <div class="mySlides fade">
            <!-- <div class="numbertext">1 / 3</div> -->
            <img src="./Image Files/BulSU MVG/Mission.jpg" class="imgSize">
            <!-- <div class="text">Caption Text</div> -->
          </div>
        
          <div class="mySlides fade">
            <!-- <div class="numbertext">2 / 3</div> -->
            <img src="./Image Files/BulSU MVG/Vision.jpg" class="imgSize">
            <!-- <div class="text">Caption Two</div> -->
          </div>
        
          <div class="mySlides fade">
            <!-- <div class="numbertext">3 / 3</div> -->
            <img src="./Image Files/BulSU MVG/Goals.jpg" class="imgSize">
            <!-- <div class="text">Caption Three</div> -->
          </div>
        
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
          <br>
          <div style="text-align: center;">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
          </div>
        </div>
        <script>
          var slideIndex = 1;
          showSlides(slideIndex);
        
          function plusSlides(n) {
            showSlides(slideIndex += n);
          }
        
          function currentSlide(n) {
            showSlides(slideIndex = n);
          }
        
          function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
          }
        </script>
      <div class="col">
        <div id="mainDiv">
          <div class="imgcontainer">
            <img src="./Image Files/Logo/BulSU.png" alt="Avatar" class="avatar">
            <h2>BulSU iTugon</h2>
          </div>
        <h2 id="h2">Login Form</h2>
        <?php if ($msg != "") echo $msg . "<br><br>"; ?>
          <div class="container">
            <form id="LoginForm" method="post" action="Logincopy.php">
            <label for="username"><b>Username</b></label> 
            <input type="text" placeholder="Enter Username" name="usernameL" id="usernameL" required>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="passwordL" id="passwordL" required>
            <button type="submit" name = "submit" >Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  
</body>
</html>
