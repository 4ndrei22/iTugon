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
              <div class="col-lg-3 col-md-3 col-sm-3"  onclick="msgResolvedFunction();">
                <div class="card card-stats" >
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-auto" >
                        <div class="icon-small text-center icon-warning">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="" class="icon-simple">
                        </div>
                      </div>
                      <div class="col-md-auto">
                        <div class="numbers">
                          <!-- <p class="card-category text-white">Open</p>
                          <p class="card-title text-white">54<p> -->
                          <h4 class="box-title">Prénom Nom<span class="status"></span> 08/12/2021</h4> 
                          <h6 class="box-ticket">#00018</h6>
                          <h3 class="box-status"><span class="status blue"></span>
                            Resolved &nbsp; &nbsp;
                            <span class="status green"></span>
                            Normal</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card card-stats" >
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-auto" >
                        <div class="icon-small text-center icon-warning">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="" class="icon-simple">
                        </div>
                      </div>
                      <div class="col-md-auto">
                        <div class="numbers">
                          <!-- <p class="card-category text-white">Open</p>
                          <p class="card-title text-white">54<p> -->
                          <h4 class="box-title">Prénom Nom<span class="status"></span> 08/12/2021</h4> 
                          <h6 class="box-ticket">#00017</h6>
                          <h3 class="box-status"><span class="status blue"></span>
                            Resolved &nbsp; &nbsp;
                            <span class="status green"></span>
                            Normal</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card card-stats" >
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-auto" >
                        <div class="icon-small text-center icon-warning">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="" class="icon-simple">
                        </div>
                      </div>
                      <div class="col-md-auto">
                        <div class="numbers">
                          <!-- <p class="card-category text-white">Open</p>
                          <p class="card-title text-white">54<p> -->
                          <h4 class="box-title">Prénom Nom<span class="status"></span> 08/12/2021</h4> 
                          <h6 class="box-ticket">#00016</h6>
                          <h3 class="box-status"><span class="status blue"></span>
                            Resolved &nbsp; &nbsp;
                            <span class="status red"></span>
                            Urgent</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                  </div>
                </div>
              </div>
              <!-- second row -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card card-stats" >
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-auto" >
                        <div class="icon-small text-center icon-warning">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="" class="icon-simple">
                        </div>
                      </div>
                      <div class="col-md-auto">
                        <div class="numbers">
                          <!-- <p class="card-category text-white">Open</p>
                          <p class="card-title text-white">54<p> -->
                          <h4 class="box-title">Prénom Nom<span class="status"></span> 08/12/2021</h4> 
                          <h6 class="box-ticket">#00015</h6>
                          <h3 class="box-status"><span class="status blue"></span>
                            Resolved &nbsp; &nbsp;
                            <span class="status blue"></span>
                            Low</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card card-stats" >
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-auto" >
                        <div class="icon-small text-center icon-warning">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="" class="icon-simple">
                        </div>
                      </div>
                      <div class="col-md-auto">
                        <div class="numbers">
                          <!-- <p class="card-category text-white">Open</p>
                          <p class="card-title text-white">54<p> -->
                          <h4 class="box-title">Prénom Nom<span class="status"></span> 08/12/2021</h4> 
                          <h6 class="box-ticket">#000014</h6>
                          <h3 class="box-status"><span class="status blue"></span>
                            Resolved &nbsp; &nbsp;
                            <span class="status blue"></span>
                            Low</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card card-stats" >
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-auto" >
                        <div class="icon-small text-center icon-warning">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="" class="icon-simple">
                        </div>
                      </div>
                      <div class="col-md-auto">
                        <div class="numbers">
                          <!-- <p class="card-category text-white">Open</p>
                          <p class="card-title text-white">54<p> -->
                          <h4 class="box-title">Prénom Nom<span class="status"></span> 08/12/2021</h4> 
                          <h6 class="box-ticket">#00013</h6>
                          <h3 class="box-status"><span class="status blue"></span>
                            Resolved &nbsp; &nbsp;
                            <span class="status green"></span>
                            Normal</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card card-stats" >
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-auto" >
                        <div class="icon-small text-center icon-warning">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="" class="icon-simple">
                        </div>
                      </div>
                      <div class="col-md-auto">
                        <div class="numbers">
                          <!-- <p class="card-category text-white">Open</p>
                          <p class="card-title text-white">54<p> -->
                          <h4 class="box-title">Prénom Nom<span class="status"></span> 08/12/2021</h4> 
                          <h6 class="box-ticket">#00012</h6>
                          <h3 class="box-status"><span class="status blue"></span>
                            Resolved &nbsp; &nbsp;
                            <span class="status green"></span>
                            Normal</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card card-stats" >
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-auto" >
                        <div class="icon-small text-center icon-warning">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="" class="icon-simple">
                        </div>
                      </div>
                      <div class="col-md-auto">
                        <div class="numbers">
                          <!-- <p class="card-category text-white">Open</p>
                          <p class="card-title text-white">54<p> -->
                          <h4 class="box-title">Prénom Nom<span class="status"></span> 08/12/2021</h4> 
                          <h6 class="box-ticket">#00011</h6>
                          <h3 class="box-status"><span class="status blue"></span>
                            Resolved &nbsp; &nbsp;
                            <span class="status red"></span>
                            Urgent</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                  </div>
                </div>
              </div>
              <!-- third row -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card card-stats" >
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-auto" >
                        <div class="icon-small text-center icon-warning">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="" class="icon-simple">
                        </div>
                      </div>
                      <div class="col-md-auto">
                        <div class="numbers">
                          <!-- <p class="card-category text-white">Open</p>
                          <p class="card-title text-white">54<p> -->
                          <h4 class="box-title">Prénom Nom<span class="status"></span> 08/12/2021</h4> 
                          <h6 class="box-ticket">#00010</h6>
                          <h3 class="box-status"><span class="status blue"></span>
                            Resolved &nbsp; &nbsp;
                            <span class="status blue"></span>
                            Low</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card card-stats" >
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-auto" >
                        <div class="icon-small text-center icon-warning">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="" class="icon-simple">
                        </div>
                      </div>
                      <div class="col-md-auto">
                        <div class="numbers">
                          <!-- <p class="card-category text-white">Open</p>
                          <p class="card-title text-white">54<p> -->
                          <h4 class="box-title">Prénom Nom<span class="status"></span> 08/12/2021</h4> 
                          <h6 class="box-ticket">#00009</h6>
                          <h3 class="box-status"><span class="status blue"></span>
                            Resolved &nbsp; &nbsp;
                            <span class="status blue"></span>
                            Low</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card card-stats" >
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-auto" >
                        <div class="icon-small text-center icon-warning">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="" class="icon-simple">
                        </div>
                      </div>
                      <div class="col-md-auto">
                        <div class="numbers">
                          <!-- <p class="card-category text-white">Open</p>
                          <p class="card-title text-white">54<p> -->
                          <h4 class="box-title">Prénom Nom<span class="status"></span> 08/12/2021</h4> 
                          <h6 class="box-ticket">#00008</h6>
                          <h3 class="box-status"><span class="status blue"></span>
                            Resolved &nbsp; &nbsp;
                            <span class="status green"></span>
                            Normal</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card card-stats" >
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-auto" >
                        <div class="icon-small text-center icon-warning">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="" class="icon-simple">
                        </div>
                      </div>
                      <div class="col-md-auto">
                        <div class="numbers">
                          <!-- <p class="card-category text-white">Open</p>
                          <p class="card-title text-white">54<p> -->
                          <h4 class="box-title">Prénom Nom<span class="status"></span> 08/12/2021</h4> 
                          <h6 class="box-ticket">#00007</h6>
                          <h3 class="box-status"><span class="status blue"></span>
                            Resolved &nbsp; &nbsp;
                            <span class="status green"></span>
                            Normal</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card card-stats" >
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-auto" >
                        <div class="icon-small text-center icon-warning">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="" class="icon-simple">
                        </div>
                      </div>
                      <div class="col-md-auto">
                        <div class="numbers">
                          <!-- <p class="card-category text-white">Open</p>
                          <p class="card-title text-white">54<p> -->
                          <h4 class="box-title">Prénom Nom<span class="status"></span> 08/12/2021</h4> 
                          <h6 class="box-ticket">#00006</h6>
                          <h3 class="box-status"><span class="status blue"></span>
                            Resolved &nbsp; &nbsp;
                            <span class="status green"></span>
                            Normal</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                  </div>
                </div>
              </div>
              <!-- forth row -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card card-stats" >
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-auto" >
                        <div class="icon-small text-center icon-warning">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="" class="icon-simple">
                        </div>
                      </div>
                      <div class="col-md-auto">
                        <div class="numbers">
                          <!-- <p class="card-category text-white">Open</p>
                          <p class="card-title text-white">54<p> -->
                          <h4 class="box-title">Prénom Nom<span class="status"></span> 08/12/2021</h4> 
                          <h6 class="box-ticket">#00005</h6>
                          <h3 class="box-status"><span class="status blue"></span>
                            Resolved &nbsp; &nbsp;
                            <span class="status green"></span>
                            Normal</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card card-stats" >
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-auto" >
                        <div class="icon-small text-center icon-warning">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="" class="icon-simple">
                        </div>
                      </div>
                      <div class="col-md-auto">
                        <div class="numbers">
                          <!-- <p class="card-category text-white">Open</p>
                          <p class="card-title text-white">54<p> -->
                          <h4 class="box-title">Prénom Nom<span class="status"></span> 08/12/2021</h4> 
                          <h6 class="box-ticket">#00004</h6>
                          <h3 class="box-status"><span class="status blue"></span>
                            Resolved &nbsp; &nbsp;
                            <span class="status green"></span>
                            Normal</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card card-stats" >
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-auto" >
                        <div class="icon-small text-center icon-warning">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="" class="icon-simple">
                        </div>
                      </div>
                      <div class="col-md-auto">
                        <div class="numbers">
                          <!-- <p class="card-category text-white">Open</p>
                          <p class="card-title text-white">54<p> -->
                          <h4 class="box-title">Prénom Nom<span class="status"></span> 08/12/2021</h4> 
                          <h6 class="box-ticket">#00003</h6>
                          <h3 class="box-status"><span class="status blue"></span>
                            Resolved &nbsp; &nbsp;
                            <span class="status green"></span>
                            Normal</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card card-stats" >
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-auto" >
                        <div class="icon-small text-center icon-warning">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="" class="icon-simple">
                        </div>
                      </div>
                      <div class="col-md-auto">
                        <div class="numbers">
                          <!-- <p class="card-category text-white">Open</p>
                          <p class="card-title text-white">54<p> -->
                          <h4 class="box-title">Prénom Nom<span class="status"></span> 08/12/2021</h4> 
                          <h6 class="box-ticket">#00002</h6>
                          <h3 class="box-status"><span class="status blue"></span>
                            Resolved &nbsp; &nbsp;
                            <span class="status green"></span>
                            Normal</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="card card-stats" >
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-md-auto" >
                        <div class="icon-small text-center icon-warning">
                          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="" class="icon-simple">
                        </div>
                      </div>
                      <div class="col-md-auto">
                        <div class="numbers">
                          <!-- <p class="card-category text-white">Open</p>
                          <p class="card-title text-white">54<p> -->
                          <h4 class="box-title">Prénom Nom<span class="status"></span> 08/12/2021</h4> 
                          <h6 class="box-ticket">#00001</h6>
                          <h3 class="box-status"><span class="status blue"></span>
                            Resolved &nbsp; &nbsp;
                            <span class="status green"></span>
                            Normal</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer ">
                    <hr>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</body>