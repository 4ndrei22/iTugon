<?php 
  session_start();
  
?>

<?php
	$msg = "";
  
	if (isset($_POST['submit'])) {
		$con = new mysqli('localhost', 'root', '', 'db_admin');

		$username = $con->real_escape_string($_POST['usernameL']);
		$password = $con->real_escape_string($_POST['passwordL']);

		$sql = $con->query("SELECT * FROM accountcreation WHERE username='$username'");
		if ($sql->num_rows > 0) {
		    $data = $sql->fetch_array();
		    if (password_verify($password, $data['password']) && $data['adminkey'] == 1) {
            $firstname = $data['firstname'];
            $lastname = $data['lastname'];
            $email = $data['email'];
            $contactnum = $data['contactNum'];
            $user = $data['username'];
            $password = $data['password'];

            $_SESSION['Firstname'] = $firstname;
            $_SESSION['Lastname'] = $lastname;
            $_SESSION['email'] = $email;
            $_SESSION['contactnum'] = $contactnum;
            $_SESSION['username'] = $user;
            $_SESSION['password'] = $password;

		        $msg = "You have been logged IN to staff dashboard";
            header("Location: ./Dashboard(Staff).php");

            }elseif (password_verify($password, $data['password']) && $data['adminkey'] == 2) {
              $firstname = $data['firstname'];
              $lastname = $data['lastname'];
              $email = $data['email'];
              $contactnum = $data['contactNum'];
              $user = $data['username'];
              $password = $data['password'];

              $_SESSION['Firstname'] = $firstname;
              $_SESSION['Lastname'] = $lastname;
              $_SESSION['email'] = $email;
              $_SESSION['contactnum'] = $contactnum;
              $_SESSION['username'] = $user;
              $_SESSION['password'] = $password;
              $msg = "You have been logged IN to admin dashboard";
              header("Location: ./Dashboard(super).php");
              } else
			    $msg = "Incorrect Password";
          header('refresh: 1, url = Login.php');
        } else
            $msg = "Incorrect Username";
            header('refresh: 1, url = Login.php');
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="./CSS Files/Login.css">
  <link rel="stylesheet" href="./CSS Files/Staff_Dashboard.css">
  
  

</head>
<body>

    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8 vh-100 pt-5 mt-5">
        <div class="card">
          
        </div>
        <div class="slideshow-container">
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="./Image Files/BulSU MVG/Mission.jpg" style="width:100%">
            <div class="text">Caption Text</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="./Image Files/BulSU MVG/Vision.jpg" style="width:100%">
            <div class="text">Caption Two</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="./Image Files/BulSU MVG/Goals.jpg" style="width:100%">
            <div class="text">Caption Three</div>
          </div>

        </div><br>

        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>

          <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
          </script>
        
      </div>
        
      <div class="col-lg-4 col-md-4 col-sm-4 min-vh-100">
        
            <div class="formcontainer vh-100 bg-light" id="formcontainer">
              
                <div class="icon-big text-center icon-warning pt-5">
                      <img src="./Image Files/logo/BulSU.png" alt="" >
                </div>
                <h2 id="h2">BulSU iTugon</h2>
                <h2 id="h2">Login Form</h2>
              <?php if ($msg != "") echo "<h5 class='errormsg'>$msg </h5> "; ?>
              <div class="card-body">
                <form action="Login.php" method = "post">                  
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 pl-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="usernameL" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 pl-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="passwordL" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 ml-auto mr-auto">
                      <button type="submit" name="submit" class="btn btn-round w-100" id="submit">Log in</button>
                    </div>
                  </div>
                  <div class="row">
                    <a href="#" class="forgot">Forgot Password</a>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>

</body>
</html>