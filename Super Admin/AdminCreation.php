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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../CSS Files/bootstrap.min.css" rel="stylesheet" />
  <link href="../CSS Files/Staff_Dashboard.css?v=2.0.1" rel="stylesheet" />
  <link href="../CSS Files/demo.css" rel="stylesheet" />
  <!--   Core JS Files   -->
  <script src="../JS Files/Errormsg.js"></script>
  <script src="../JS Files/core/jquery.min.js"></script>
  <script src="../JS Files/core/popper.min.js"></script>
  <script src="../JS Files/core/bootstrap.min.js"></script>
  <script src="../JS Files/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../JS Files/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../JS Files/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../JS Files/Staff_Dashboard.min.js" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
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
          <li class="active">
            <a href="./AdminCreation.php">
              <i class="fa fa-plus"></i>
              <p style="font-size: 10px;">Create Employee Account</p>
            </a>
          </li>
          <li>
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
                  <a class="dropdown-item" href="../Login.php">Logout</a>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        
          <div class="row">
            <div class="col-md-12">
              <div class="card card-user">
                <div class="card-header">
                  <h5 class="card-title">Create Account</h5>
                </div>
                <div class="card-body">
                <form id="form" action="./getData2.php" method="post">
                    <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="firstname" id="firstname">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" name="lastname" id="lastname">
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="abc@email.com" name="email" id="email">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" class="form-control" placeholder="09123456789" name="contact_number" id="contact_number" >
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                          <label for="access">Access Level</label>
                          <select class="form-control" name="accessLvl" id="accessLvl">
                            <!-- <option value="">Select access level</option> -->
                            <option value="1"name="Staff" id="Staff">Staff</option>
                            <option value="2" name="Super Admin" id="Super Admin">Super Admin</option>
                          </select>
                      </div>
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="usernameR" id="usernameR">
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="passwordR" id="passwordR">
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="Password" class="form-control" placeholder="Confirm Password" name="conPassword" id="conPassword">
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name = "submit" id="submit" class="btn btn-primary btn-round">Create</button>
                    </div>
                    </div>
          </form>
              </div>
            </div>
          </div>
          <!-- User directory -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> User Directory </h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <label></label>
                </div>
                  <div class="col-md-auto">
                    <label>Search</label>
                </div>
                  <div class="col-md-4">
                      <input type="text" style="width: 100%;" placeholder="Search..." value="">
                  </div>
                  <div class="col-md-auto">
                    <button><i class="fa fa-search"></i></button>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Access Level</th>
                      <th>Email</th>
                      <th>Contact Number</th>
                      <th>Username</th>
                    </thead>
                    <tbody>
                    <?php
                      include "connect.php";
                      $sql = "CALL getAccountcreation()";
                      $result = $con->query($sql);
                      if ($result->num_rows > 0) {
                      // output data of each row
                        while($row = $result->fetch_assoc()) {
                          echo "<tr><td>" . $row["Firstname"]. "</td><td>" . $row["Lastname"] . "</td><td>" . $row["adminKey"] .
                               "</td><td>". $row["Email"] . "</td><td>". $row["Contactnum"] . "</td><td>". $row["Username"] . "</td></tr>";
                        }
                      echo "</table>";
                      } else { echo "0 results"; }
                      $con->close();
                      ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        </form>
        
      </div>
    </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <!-- <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul> -->
            </nav>
            <div class="credits ml-auto">
              <!-- <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span> -->
            </div>
          </div>
        </div>
      </footer>
  </div>
  </div>
  
</body>

</html>
