<!DOCTYPE html>
<html>
<head>
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
          <div class="container">
            <form id="LoginForm" method="post" action="LOGIN\toLogin.php">
            <label for="username"><b>Username</b></label> 
            <input type="text" placeholder="Enter Username" name="usernameL" id="usernameL" required>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="passwordL" id="passwordL" required>
            <button type="submit">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  
</body>
</html>
