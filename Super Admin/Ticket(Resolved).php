<?php
  session_start();
  if(isset($_SESSION["Firstname"])&& ($_SESSION["Lastname"])){

?>
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
    <link href="../CSS Files/Staff_Dashboard.css" rel="stylesheet" />
    <link href="../CSS Files/demo.css" rel="stylesheet" />
    <link href="../CSS Files/ActiveTickets.css" rel="stylesheet">
    <!-- JS Files -->
    <script src="../JS Files/goto msg/msg(resolved).js"></script>
    <!--   Core JS Files   -->
    <script src="../JS Files/core/jquery.min.js"></script>
    <script src="../JS Files/core/popper.min.js"></script>
    <script src="../JS Files/core/bootstrap.min.js"></script>
    <script src="../JS Files/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../JS Files/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../JS Files/Staff_Dashboard.min.js" type="text/javascript"></script>
  </head>
<body>
  <div class="wrapper">
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
          <li class=" ">
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
      <!-- nav bar -->
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
      <!-- end nav bar  -->
      <div class="content">
          <div class="Header pb-4">
            <h2>
              Resolved Tickets
            </h2>
            <div class="inner-addon right-addon">
              <i class="fa fa-search"></i>
              <input type="text" class="form-control" placeholder="Search..." />
            </div>
          
          </div>
          <div class="row">
            <?php
              include 'connect.php';
              //$sql = "SELECT Firstname, Lastname FROM staffs";
              $sql = "SELECT * FROM ticketInfo";
              $result = mysqli_query($con,$sql);
              if(mysqli_num_rows($result) > 0){
                  while ($row = mysqli_fetch_assoc($result)){
                                  
                  $ticketnum=$row['TicketNum'];
                  $ticketSender = $row['TicketSender'];
                  $prioLvl = $row['PrioLvl'];
                  $Stat = $row['Stat'];
                  $date = $row['Date'];
                  $ticketname = substr($ticketSender, 0, 10);
                  //$message = $row['Message'];
                  //$disMessage = substr($message, 0, 30);
                  $subject = $row['Subject'];

                  if($prioLvl == "Resolved"){
            ?>
                  <div class="col-lg-3 col-md-3 col-sm-3" onclick="AssignedFunction();">
                    <div class="card card-stats">
                      <div class="card-body ">
                        <div class="row">
                          <div class="col-md-auto" >
                            <div class="icon-small text-center icon-warning">
                              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="" class="icon-simple">
                            </div>
                          </div>
                          <div class="col-md-auto">
                            <div class="numbers">
                              <h4 class="box-title"><?php echo $ticketname; ?><span class="status"></span><?php echo $date; ?></h4> 
                              <h6 class="box-ticket">#<?php echo $ticketnum; ?></h6>
                              <!-- <h5 class="box-title"><?php echo $disMessage; ?></h5>  -->
                              <!-- <h5 class="box-title"><?php echo $subject; ?></h5>  -->
                              <h3 class="box-status"><span class="status blue"></span>
                                <?php echo $prioLvl; ?> &nbsp; &nbsp;
                                <?php 
                                  if($Stat == "Urgent"){
                                    echo"<span class='status red'></span>";
                                    echo $Stat;"</h3>";
                                  }elseif($Stat == "High"){
                                    echo"<span class='status orange'></span>";
                                    echo $Stat;"</h3>";
                                  }elseif ($Stat =="Normal"){
                                    echo"<span class='status green'></span>";
                                    echo $Stat;"</h3>";
                                  }else{
                                    echo"<span class='status blue'></span>";
                                    echo $Stat;"</h3>";
                                  }
                                ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card-footer ">
                        <hr>
                      </div>
                    </div>
                  </div>
            <?php
                  }
                }
              }
                                  
            ?>
            
          </div>
        </div>
    </div>
  </div>
</body>
<?php
  }else{ 
    header('refresh: 1, url = Login.php');
  }
  ?>