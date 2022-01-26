<?php
  session_start();
  if(!isset($_SESSION['U_unique_id'])){
    header('refresh: 1, url = ../Login.php');
  }
?>
<?php
    $msg = "";
    if (isset($_POST['submit'])) {
      $con = new mysqli('localhost', 'root', '', 'db_admin');
      $username = $con->real_escape_string($_POST['username']);
      $newPassword =$con->real_escape_string($_POST['new_password']);
      $password = $con->real_escape_string($_POST['current_password']);
      $confirm_password = $con->real_escape_string($_POST['confirm_password']);
      if(!empty($newPassword) && !empty($password) && !empty($confirm_password)){
        $sql = mysqli_query($con, "SELECT * FROM accountcreation WHERE username = '{$username}'");
        if(mysqli_num_rows($sql) > 0){
          $row = mysqli_fetch_assoc($sql);
          $user_pass = md5($password);
          $newPass = md5($newPassword);
          $enc_pass = $row['password'];
          if($password == $confirm_password){
            if($user_pass === $enc_pass){
              $sql1 = "UPDATE `accountcreation` SET password = '$newPass' WHERE password = '$user_pass'";
              mysqli_query($con,$sql1);
              $msg = "update successfully";
              header('refresh: 1, url = ChangePassword.php');
              }else{
              $msg = "Incorrect Password";
              header('refresh: 1, url = ChangePassword.php');
              }
          }else{
            $msg = "Password didn't match";
            header('refresh: 1, url = ChangePassword.php');
          }
          
        }else{
          $msg = "$username - This is your current username";
          header('refresh: 1, url = ChangePassword.php');
        }
      }else{
        $msg = "All input fields are required";
        header('refresh: 1, url = ChangePassword.php');
      }
    }
 
?>
<?php 
  include "main_header.php";
?>

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
          <li class="dropdown">
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
          <li class="">
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
                  <a class="dropdown-item" href="./truncateUser.php">Logout</a>
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
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Change Password </h4>
              </div>
              <div class="card-body">
                <?php 
                  include 'connect.php';
                  $sql = mysqli_query($con, "SELECT * FROM accountcreation WHERE unique_id = {$_SESSION['U_unique_id']}");
                  if(mysqli_num_rows($sql) > 0){
                    $row = mysqli_fetch_assoc($sql);
                   }
                ?>
              <?php if ($msg != "") echo $msg . "<br><br>"; ?>
              <form action="ChangePassword.php" method = "post">                  
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $row['username']; ?>" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Current Password</label>
                        <input type="password" class="form-control" placeholder="Current Password" name="current_password" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>New Password</label>
                        <input type="password" class="form-control" placeholder="New Password" name="new_password" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name = "submit"class="btn btn-primary btn-round">Change Password</button>
                    </div>
                  </div>
                </form>
                  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>