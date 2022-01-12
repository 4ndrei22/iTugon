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
  <link href="./CSS Files/bootstrap.min.css" rel="stylesheet" />
  <link href="./CSS Files/Staff_Dashboard.css" rel="stylesheet" />
  <link href="./CSS Files/demo.css" rel="stylesheet" />
  <!-- JS Files -->
  <script src="./JS Files/onClick(staff)/StaffAssigned(onClick).js"></script>
  <script src="./JS Files/onClick(staff)/StaffOpenTicket(onClick).js"></script>
  <script src="./JS Files/onClick(staff)/StaffReopened(onClick).js"></script>
  <script src="./JS Files/onClick(staff)/StaffPending(onClick).js"></script>
  <script src="./JS Files/onClick(staff)/StaffResolved(onClick).js"></script>
  <script src="./JS Files/onClick(staff)/StaffClosed(onClick).js"></script>
  <script src="./JS Files/core/jquery.min.js"></script>
  <script src="./JS Files/core/popper.min.js"></script>
  <script src="./JS Files/core/bootstrap.min.js"></script>
  <script src="./JS Files/core/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="./JS Files/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./JS Files/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./JS Files/Staff_Dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="./JS Files/demo.js"></script>
  <script src="./JS Files/openTickets.js"></script>
  <!-- PHP Files -->
  
</head>
<body class="">
  <div class="wrapper ">
  <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="./Image Files/logo-small.png">
          </div>
        </a>
        <a class="simple-text logo-normal">
          Staff Dashboard
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active">
            <a href="./Dashboard(staff).php">
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
                <a href="./Staff/Ticket(open).php">Open</a>
                <a href="./Staff/Ticket(Pending).php">Pending</a>
                <a href="./Staff/Ticket(reopened).php">Reopened</a>
              </div>
          </li>
          <li>
            <a href="./Staff/FAQs(create).php">
              <i class="fa fa-book"></i>
              <p>Knowledgebase</p>
            </a>
          </li>
          <li>
            <a href="./Staff/user.php">
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
                  <a class="dropdown-item" href="./Staff/ChangeUsername.php">Change Username</a>
                  <a class="dropdown-item" href="./Staff/ChangePassword.php">Change Password</a>
                  <a class="dropdown-item" href="./Staff/truncateUser.php">Logout</a>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content" style="margin-top:9%">
        <div class="row">
          
        </div>
        <!-- Stats and Ticket -->
        <div class="row">
          <div class="col-md-4 col-sm-5">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Ticket Coming Due</h5>
              </div>
              <div class="card-body ">
                <canvas id="chart-area"></canvas>
              </div>
              <div class="card-footer ">
                <div class="legend">
                  &nbsp;
                <hr>
                </div>
            </div>
          </div>
          </div>
          <!-- Tickets -->
          <div class="col-md-8 col-sm-5">
            <div class="row">
              <div class="col-md-6 col-sm-5"id="ActiveTicket" onclick="AssignedFunction();">
                <div class="card card-stats ">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-5 col-md-2" >
                      <div class="icon-big text-center icon-warning">

                      <i class="fa fa-user-circle text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Assigned Tickets</p>
                      <p class="card-title">5<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                </div>
                </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-5"id="ActiveTicket" onclick="StaffActiveFunction();">
            <div class="card card-stats" style="background-color:#5cb85c;">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-2" >
                    <div class="icon-big text-center icon-warning">
                      <i class="fa fa-ticket text-white"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category text-white">Open Tickets</p>
                      <p class="card-title text-white">150<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                </div>
              </div>
            </div>
              </div>
              <div class="col-md-6 col-sm-5"id="ActiveTicket" onclick="pendingFunction();">
            <div class="card card-stats" style="background-color:#d9534f;">
              <div class="card-body ">
                <div class="row">
                  <div class="col-3 col-md-2" >
                    <div class="icon-big text-center icon-warning">
                      <img src="../Image Files/icons/Onprocess.png" alt="" >
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category text-white">Pending</p>
                      <p class="card-title text-white">4<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                </div>
              </div>
            </div>
              </div>
              <div class="col-md-6 col-sm-5"id="ActiveTicket" onclick="resolvedFunction();">
            <div class="card card-stats" style="background-color:#5bc0de;">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-2" >
                    <div class="icon-big text-center icon-warning">
                      <img src="../Image Files/icons/Resolved.png" alt="" >
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category text-white">Resolved</p>
                      <p class="card-title text-white">15<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                </div>
              </div>
            </div>
              </div>
              <div class="col-md-6 col-sm-5"id="ActiveTicket" onclick="ReopenFunction();">
            <div class="card card-stats" style="background-color:#f0ad4e;">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-2" >
                    <div class="icon-big text-center icon-warning">
                      <img src="../Image Files/icons/Open.png" alt="" >
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category text-white">Reopened</p>
                      <p class="card-title text-white">1<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                </div>
              </div>
            </div>
              </div>
              <div class="col-md-6 col-sm-5"id="ActiveTicket" onclick="closedFunction();">
            <div class="card card-stats" style="background-color:#292b2c;">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-2" >
                    <div class="icon-big text-center icon-warning">
                      <img src="../Image Files/icons/Closed.png" alt="">
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category text-white">Closed</p>
                      <p class="card-title text-white">20<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                </div>
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
  
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
  <!-- JS Doughnut Chart -->
  <script>
    var config = {
        type: 'doughnut',
        data: {
            labels: ["Due Today", "Due Tomorrow", "Due next 2 days", "Due next 4 days"],
            datasets: [{
                backgroundColor: ['rgb(2, 117, 216)',
                    'rgb(240, 173, 78)',
                    'rgb(217, 83, 79)',
                    'rgb(91, 192, 222)'
                ],
                borderColor: ['rgb(2, 117, 216)',
                    'rgb(240, 173, 78)',
                    'rgb(217, 83, 79)',
                    'rgb(91, 192, 222)'
                ],
                data: [1, 2, 2, 0],
            }]
        },
        options: {
            responsive: true,
            legend: {
                position: 'right',
                labels: {
                    fontColor: "black",
                    boxWidth: 20,
                    padding: 20
                }
            }
        }
    };

    window.onload = function() {
        var ctx = document.getElementById('chart-area').getContext('2d');
        window.myPie = new Chart(ctx, config);
        
    };
  </script>
  
</body>

</html>
