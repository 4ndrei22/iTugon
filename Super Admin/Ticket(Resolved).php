<?php
  session_start();
  if(!isset($_SESSION['U_unique_id'])){
    header('refresh: 1, url = ../Login');
  }
?>
<?php
include "Ticket_header.php";
?>
<body>
  <div class="wrapper">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
          <a class="simple-text logo-mini">
            <div class="logo-image-small">
              <?php 
                include 'connect.php';
                $sql = mysqli_query($con, "SELECT * FROM accountcreation WHERE unique_id = {$_SESSION['U_unique_id']}");
                  if(mysqli_num_rows($sql) > 0){
                  $row = mysqli_fetch_assoc($sql);
                }
                ?>
                <img class="icon-simple" src="images/<?php echo $row['img']; ?>" alt="">
            </div>
          </a>
          <a class="simple-text logo-normal">
            <?php echo $row['firstname']. " "  ?>
          </a>
        </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class=" ">
            <a href="../Dashboard(super)">
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
                <a href="./Ticket(open)">Open</a>
                <a href="./Ticket(Pending)">Pending</a>
                <a href="./Ticket(reopened)">Reopened</a>
              </div>
          </li>
          <li>
            <a href="./FAQs(create)">
              <i class="fa fa-book"></i>
              <p>Knowledgebase</p>
            </a>
          </li>
          <li class="">
            <a href="./AdminCreation">
              <i class="fa fa-plus"></i>
              <p style="font-size: 10px;">Create Employee Account</p>
            </a>
          </li>
          <li>
            <a href="./user">
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
                    <a class="dropdown-item" href="./ChangeUsername">Change Username</a>
                    <a class="dropdown-item" href="./ChangePassword">Change Password</a>
                    <a class="dropdown-item" href="./truncateUser">Logout</a>
                  </div>
                </li>
                
              </ul>
            </div>
          </div>
      </nav>
      <!-- end nav bar -->
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
          <div class="row" id="ticket-list-div">
            <?php
              include 'connect.php';
              //$sql = "SELECT Firstname, Lastname FROM staffs";
              $sql = "SELECT * FROM ticketinfo";
              $result = mysqli_query($con,$sql);
              if(mysqli_num_rows($result) > 0){
                  while ($row = mysqli_fetch_assoc($result)){
                                  
                  $ticketnum=$row['ticket_owner'];
                  $ticketId = $row['ticket_id'];
                  $prioLvl = $row['priority_lvl'];
                  $Stat = $row['status'];
                  //$date = $row['date'];
                  $subj = $row['subject'];
                  if(strlen($subj) > 10){
                      $subs = substr($subj, 0, 12);
                      $subject = $subs." ".'...';
                  }else{
                      $subj;
                  }

                  
                  $sql1 = "SELECT * FROM accountcreation WHERE unique_id = $ticketnum";
                  $result1 = mysqli_query($con,$sql1);
                  if(mysqli_num_rows($result1) > 0 ){
                    while ($row1 = mysqli_fetch_assoc($result1)){
                      $fullname = $row1['firstname'] . ' ' . $row1['lastname'];
                      $ticketname = substr($fullname, 0, 10);
                      $image = $row1['img'];
                    }
                  }
                  if($Stat == "Resolved"){

                    if($prioLvl == "Urgent"){
                    
                        
                      echo "
                              <div class='col-lg-3 col-md-3 col-sm-3' >
                              <a href='Ticket(assigned).php?user_id=$ticketnum' style='text-decoration:none;'>
                                <div class='card card-stats'>
                                  <div class='card-body'>
                                    <div class='row'>
                                      <div class='col-md-auto' >
                                        <div class='icon-small text-center icon-warning'>
                                          <img src='images/$image' alt='' class='icon-simple' width=42px height=42px>
                                        </div>
                                      </div>
                                      <div class='col-md-auto'>
                                        <div class='numbers'>
                                          <h4 class='box-title'>$ticketname...<span class='status'></span>$date</h4> 
                                          <h6 class='box-ticket'>#$ticketnum</h6>
                                          <h6 class='box-msg'>$message<h6>
                                          <h3 class='box-status'><span class='status bg-info'></span>
                                            $Stat &nbsp; &nbsp;
                                            <span class='status red'></span>
                                            $prioLvl
                                          </h3>
                                              
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class='card-footer'>
                                    <hr>
                                  </div>
                                </div>
                                </a>
                              </div>
                            ";
                    }elseif($prioLvl == "High"){
                        
                      echo "
                      <div class='col-lg-3 col-md-3 col-sm-3'>
                        <a href='Ticket(assigned).php?user_id=$ticketnum' style='text-decoration:none;'>
                          <div class='card card-stats'>
                            <div class='card-body'>
                              <div class='row'>
                                <div class='col-md-auto' >
                                  <div class='icon-small text-center icon-warning'>
                                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg' alt='' class='icon-simple'>
                                  </div>
                                </div>
                                <div class='col-md-auto'>
                                  <div class='numbers'>
                                    <!-- <p class='card-category text-white'>Open</p>
                                    <p class='card-title text-white'>54<p> -->
                                    <h4 class='box-title'>$ticketname...<span class='status'></span>$date</h4> 
                                    <h6 class='box-ticket'>#$ticketnum</h6>
                                    <h3 class='box-status'><span class='status bg-info'></span>
                                      $Stat &nbsp; &nbsp;
                                      <span class=status orange'></span>
                                      $prioLvl
                                    </h3>
                                        
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class='card-footer'>
                              <hr>
                            </div>
                          </div>
                        </a>  
                      </div>";
                    }elseif($prioLvl == "Normal"){
                      echo "
                      
                        <div class='col-lg-3 col-md-3 col-sm-3'>
                        <a href='Ticket(assigned).php?user_id=$ticketnum' style='text-decoration:none;'>
                          <div class='card card-stats'>
                            <div class='card-body'>
                              <div class='row'>
                                <div class='col-md-auto' >
                                  <div class='icon-small text-center icon-warning'>
                                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg' alt='' class='icon-simple'>
                                  </div>
                                </div>
                                <div class='col-md-auto'>
                                  <div class='numbers'>
                                    <h4 class='box-title'>$ticketname...<span class='status'></span>$date</h4> 
                                    <h6 class='box-ticket'>#$ticketnum</h6>

                                    <h3 class='box-status'><span class='status bg-info'></span>
                                      $Stat &nbsp; &nbsp;
                                      <span class=status green'></span>
                                      $prioLvl
                                    </h3>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class='card-footer'>
                              <hr>
                            </div>
                          </div>
                        </a>
                          </div> ";
                    }else{
                      echo "
                      
                        <div class='col-lg-3 col-md-3 col-sm-3'>
                        <a href='Ticket(assigned).php?user_id=$ticketnum' style='text-decoration:none;'>
                          <div class='card card-stats'>
                            <div class='card-body'>
                              <div class='row'>
                                <div class='col-md-auto' >
                                  <div class='icon-small text-center icon-warning'>
                                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg' alt='' class='icon-simple'>
                                  </div>
                                </div>
                                <div class='col-md-auto'>
                                  <div class='numbers'>
                                    <h4 class='box-title'>$ticketname...<span class='status'></span>$date</h4>  
                                    <h6 class='box-ticket'>#$ticketnum</h6>
                                    <h3 class='box-status'><span class='status bg-info'></span>
                                      $Stat &nbsp; &nbsp;
                                      <span class='status blue'></span>
                                      $prioLvl
                                    </h3>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class='card-footer'>
                              <hr>
                            </div>
                          </div>
                        </a>
                        </div>";
                    }
            
                  }
                }
              }
                                  
            ?>
          </div>
      </div>

    </div>
  </div>
  <!-- <script src="../JS Files/users.js"></script> -->
</body>