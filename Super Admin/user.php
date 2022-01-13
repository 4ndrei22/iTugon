<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../Image Files/Logo/BulSU.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      BulSU iTugon
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../CSS Files/bootstrap.min.css" rel="stylesheet" />
    <link href="../CSS Files/Users.css" rel="stylesheet" />
    <link href="../CSS Files/demo.css" rel="stylesheet" />
    <!-- JS Files -->
    <script src="../JS Files/core/jquery.min.js"></script>
    <script src="../JS Files/core/popper.min.js"></script>
    <script src="../JS Files/core/bootstrap.min.js"></script>
    <script src="../JS Files/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Chart JS -->
    <script src="../JS Files/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../JS Files/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../JS Files/Staff_Dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="../JS Files/demo/demo.js"></script>
    <script src="../JS Files/openTickets.js"></script>
  </head>

<body class="">
  <div class="wrapper ">
  <div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
      <a class="simple-text logo-mini">
        <div class="logo-image-small">
          <img src="../Image Files/logo-small.png">
        </div>
      </a>
      <a class="simple-text logo-normal">
        Super Admin
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="">
            <a href="../Dashboard(super).php">
              <i class="fa fa-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="dropdown ">
              <a class="dropbtn active " >
                <i class="fa fa-ticket"></i>
                Tickets &nbsp; &nbsp;
                <span class="fa fa-caret-down"></span>
              </a>
              <div class="dropdown-content" >
                <a href="./Ticket(open).php">Open</a>
                <a href="./Ticket(Pending).php">Pending</a>
                <a href="./Ticket(reopened).php">Reopened</a>
              </div>
          </li>
          <li>
            <a href="./FAQs(create).php">
              <i class="fa fa-book"></i>
              <p>Knowledgebase</p>
            </a>
          </li>
          <li class="">
            <a href="./AdminCreation.php">
              <i class="fa fa-plus"></i>
              <p style="font-size: 10px;">Create Employee Account</p>
            </a>
          </li>
          <li class="active">
            <a href="./user.php">
              <i class="fa fa-user"></i>
              <p>User Profile</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top" Style="background-color: #671e1e;">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">BulSU iTugon</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-user-circle"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="./ChangeUsername.php">Change Username</a>
                  <a class="dropdown-item" href="./ChangePassword.php">Change Password</a>
                  <a class="dropdown-item" href="./truncateUser.php">Logout</a>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content pt-5">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-user">
              <div class="image"> 
                <!-- <img src="../assets/img/damir-bosnjak.jpg" alt="..." > -->
              </div>
              <div class="card-body">
                <div class="author">
                    <img class="avatar border-gray" src="../Image Files/logo-small.png" alt="...">
                    <?php
                      include 'connect.php';
                      //$sql = "SELECT Firstname, Lastname FROM staffs";
                      $sql = "SELECT * FROM staffs";
                      $result = mysqli_query($con,$sql);
                      if(mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_assoc($result)){
                        
                          $firstname = $row['Firstname'];
                          $lastname = $row['Lastname'];
                          $fullname = $firstname . " " . $lastname;
                          $email = $row['Email'];
                          $contactnum = $row['Contactnum'];
                          echo "<h5 style =  'text-transform: uppercase;'>$fullname</h5>";
                        }
                      }
                        
                      
                    ?>
                  <!-- <form action="./ChangeInfo.php" method="post">   -->
                  <form  method="post">                  
                    <div class="row">
                      <div class="col-md-3" style="margin-left: 24%;">
                        <div class="form-group">
                          <label for="fname">First Name</label>
                          <input type="text" class="form-control" placeholder="First Name" value="<?php echo $firstname; ?>" name="firstname" required>
                        </div>
                      </div>
                      <div class="col-md-3" style="margin-left: 2%;">
                        <div class="form-group">
                          <label for="lname">Last Name</label>
                          <input type="text" class="form-control" placeholder="Last Name" value="<?php echo $lastname; ?>" name="lastname" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3" style="margin-left: 24%;">
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" class="form-control" placeholder="Email" value="<?php echo $email; ?>" name="email" required>
                        </div>
                      </div>
                      <div class="col-md-3" style="margin-left: 2%;">
                        <div class="form-group">
                          <label for="contactnum">Contact Number</label>
                          <input type="text" class="form-control" placeholder="Contact Number" value="<?php echo $contactnum; ?>" name="Contact Number" required>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="update ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                      </div>
                    </div>
                  </form>
                </div>
                <p class="description text-center">
                </p>
              </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
            </nav>
            <div class="credits ml-auto">
            </div>
          </div>
        </div>
      </footer>
    </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
            </nav>
            <div class="credits ml-auto">
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
</body>

</html>