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
  <link rel="stylesheet" href="./CSS Files/bootstrap.min.css">
  <link rel="stylesheet" href="./CSS Files/Login.css">
  <link rel="stylesheet" href="./CSS Files/Staff_Dashboard.css">
</head>
<body>
  <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8 bg-light">
        <div class="slideshow-container">
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
      </div>
        
      <div class="col-lg-4 col-md-4 col-sm-4 bg-success" id="container">
        <h4 class="card-title"> Change Username </h4>
              <div class="card-body">
                <form action="ChangeUsername.php" method = "post">                  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Current Username</label>
                        <input type="text" class="form-control" placeholder="Current Username" name="CurUsername" value="<?php echo $username; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>New Username</label>
                        <input type="text" class="form-control" placeholder="New Username" name="NewUsername" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="password" name="CUPassword" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="submit" class="btn btn-primary btn-round">Change Username</button>
                    </div>
                  </div>
                </form>
                  
              </div>
            
      </div>
    </div>
  
</body>
</html>
