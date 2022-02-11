<?php 
  session_start();
?>
<?php
	$msg = "";
  
	if (isset($_POST['submit'])) {
		include 'connect.php';
        //$username = mysqli_real_escape_string($con, $_POST['usernameL']);
        $username = ($_POST['usernameL']);
        $password = ($_POST['passwordL']);
        //$password = mysqli_real_escape_string($con, $_POST['passwordL']);
        if(!empty($username) && !empty($password)){
            $sql = mysqli_query($con,"SELECT * FROM accountcreation WHERE username = '$username'");
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
                $user_pass = md5($password);
                $enc_pass = $row['password'];
                if($user_pass === $enc_pass){
                    $status = "Active now";
                    $sql2 = mysqli_query($con,"UPDATE accountcreation SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
                    if($sql2){
                      if($row['adminkey'] == 1){
                        $_SESSION['U_unique_id'] = $row['unique_id'];
                        $_SESSION['accesslvl'] = $row['adminkey'];
                        header("location: ./Dashboard(staff)");
                        $msg = "success";
                      }elseif($row['adminkey'] == 2){
                        $_SESSION['U_unique_id'] = $row['unique_id'];
                        $_SESSION['accesslvl'] = $row['adminkey'];
                        header("location: ./Dashboard(super)");
                        $msg = "success";
                      }
                       
                    }else{
                      $msg = "Something went wrong. Please try again!";
                      header('refresh: 1, url = Login');
                    }
                }else{
                  $msg = "Username or Password is Incorrect!";
                   header('refresh: 1, url = Login');
                }
            }else{
              $msg = "$username - This username not Exist!";
              header('refresh: 1, url = Login');
            }
        }else{
          $msg = "All input fields are required!";
          header('refresh: 1, url = Login');
        }
	}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="BulSU.png">
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
            <img src="Mission.jpg" style="width:100%">
            <div class="text">Caption Text</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="Vision.jpg" style="width:100%">
            <div class="text">Caption Two</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="Goals.jpg" style="width:100%">
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
              setTimeout(showSlides, 4000); // Change image every 2 seconds
            }
          </script>
        
      </div>
        
      <div class="col-lg-4 col-md-4 col-sm-4 min-vh-100">
        
            <div class="formcontainer vh-100 bg-light" id="formcontainer">
              
                <div class="icon-big text-center icon-warning pt-5">
                      <img src="./Image Files/Logo/BulSU.png" alt="" >
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
                    <a href="./truncateUser.php" class="forgot">Forgot Password</a>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>

</body>
</html>