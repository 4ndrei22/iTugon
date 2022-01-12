<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="./Image Files/Logo/BulSU.png">
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
  <script src="./JS Files/ActiveTicket(onClick).js"></script>
  <script src="./JS Files/Reopened(onClick).js"></script>
  <script src="./JS Files/Pending(onClick).js"></script>
  <script src="./JS Files/Resolved(onClick).js"></script>
  <script src="./JS Files/Closed(onClick).js"></script>
  <script src="./JS Files/core/jquery.min.js"></script>
  <script src="./JS Files/core/popper.min.js"></script>
  <script src="./JS Files/core/bootstrap.min.js"></script>
  <script src="./JS Files/core/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chart JS -->
  <script src="./JS Files/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./JS Files/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./JS Files/Staff_Dashboard.min.js" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="./JS Files/demo/demo.js"></script>
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
          Super Admin
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active">
            <a href="./Dashboard(super).php">
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
                <a href="./Super Admin/Ticket(open).php">Open</a>
                <a href="./Super Admin/Ticket(Pending).php">Pending</a>
                <a href="./Super Admin/Ticket(reopened).php">Reopened</a>
              </div>
          </li>
          <li>
            <a href="./Super Admin/FAQs(create).php">
              <i class="fa fa-book"></i>
              <p>Knowledgebase</p>
            </a>
          </li>
          <li class="">
            <a href="./Super Admin/AdminCreation.php">
              <i class="fa fa-plus"></i>
              <p style="font-size: 10px;">Create Employee Account</p>
            </a>
          </li>
          <li>
            <a href="./Super Admin/user.php">
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
                  <a class="dropdown-item" href="./Super Admin/ChangeUsername.php">Change Username</a>
                  <a class="dropdown-item" href="./Super Admin/ChangePassword.php">Change Password</a>
                  <a class="dropdown-item" href="./Super Admin/truncateUser.php">Logout</a>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <!-- Tickets -->
        <div class="row" id="tickets" >
          <!-- Open ticket -->
		      <div class=" col"id="ActiveTicket" onclick="ActiveFunction();">
            <div class="card card-stats" style="background-color:#5cb85c;">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4" >
                    <div class="icon-big text-center icon-warning">
                      <i class="fa fa-ticket text-white"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category text-white">Open</p>
                      <p class="card-title text-white">54<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <!-- <i class="fa fa-ticket"></i>
                  Tickets Unopened -->
                </div>
              </div>
            </div>
          </div>
          <!-- Pending ticket -->
          <div class=" col"id="ActiveTicket" onclick="pendingFunction();">
            <div class="card card-stats" style="background-color:#d9534f;">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4" >
                    <div class="icon-big text-center icon-warning">
                      <img src="../icons/Onprocess.png" alt="" >
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category text-white">Pending</p>
                      <p class="card-title text-white">13<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <!-- <i class="fa fa-ticket"></i>
                  Tickets Unopened -->
                </div>
              </div>
            </div>
          </div>
          <!-- Reopen ticket -->
          <div class=" col"id="ActiveTicket" onclick="ReopenFunction();">
            <div class="card card-stats" style="background-color:#f0ad4e;">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4" >
                    <div class="icon-big text-center icon-warning">
                      <img src="../icons/Open.png" alt="" >
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category text-white">Reopened</p>
                      <p class="card-title text-white">25<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <!-- <i class="fa fa-ticket"></i>
                  Tickets Unopened -->
                </div>
              </div>
            </div>
          </div>
          <!-- Resolved ticket -->
          <div class="col "id="ActiveTicket" onclick="resolvedFunction();">
            <div class="card card-stats" style="background-color:#5bc0de;">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4" >
                    <div class="icon-big text-center icon-warning">
                      <img src="../icons/Resolved.png" alt="" >
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category text-white">Resolved</p>
                      <p class="card-title text-white">45<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <!-- <i class="fa fa-ticket"></i>
                  Tickets Unopened -->
                </div>
              </div>
            </div>
          </div>
          <!-- Closed ticket -->
          <div class=" col"id="ActiveTicket" onclick="closedFunction();">
            <div class="card card-stats" style="background-color:#292b2c;">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4" >
                    <div class="icon-big text-center icon-warning">
                      <img src="../icons/Closed.png" alt="">
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category text-white">Closed</p>
                      <p class="card-title text-white">67<p>
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
        <!-- Ticket Status, Ticket Concern, Satisfaction -->
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Ticket Status</h5>
                <p class="card-category">&nbsp;</p>
              </div>
              <div class="card-body ">
                <canvas id="piechart" class="pie"></canvas>
              </div>
              <div class="card-footer ">
                <div class="legend">
                  
                </div>
                <hr>
                <div class="stats">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">Ticket Received per concern</h5>
                <p class="card-category"></p>
              </div>
              <div class="card-body">
                <canvas id="barGraph" width="350" height="100"></canvas>
              </div>
              <div class="card-footer">
                <div class="chart-legend">
                  <i class="fa fa-circle " style="color: #d9534f"></i> Admission
                  <i class="fa fa-circle " style="color: #5cb85c"></i> Enrollment
                  <i class="fa fa-circle " style="color: #5bc0de"></i> Grade
                  <i class="fa fa-circle " style="color: #f0ad4e"></i> Document
                </div>
                <hr />
                <div class="card-stats">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="card-title">User Satisfaction</h5>
            </div>
            <div class="card-body">
                <h4 id="satisfy" class="small font-weight-bold">Very Satisfied <span
                        class="float-right">40%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%"
                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 id="satisfy" class="small font-weight-bold">Satisfied <span
                        class="float-right">30%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 30%"
                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 id="satisfy" class="small font-weight-bold">Good<span
                        class="float-right">15%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 15%"
                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 id="satisfy" class="small font-weight-bold">Unsatisfied <span
                        class="float-right">10%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 10%"
                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 id="satisfy" class="small font-weight-bold">Very Unsatisfied<span
                        class="float-right">5%</span></h4>
                <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 5%"
                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
          </div>
          
        </div>
        <!-- Staff summary -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <a class="card-title" href="./Super Admin/tables.php" style="font-size: 26px; color: #000;"> 
                  Staff Ticket Summary </a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Name</th>
                      <th>Ticket Assigned</th>
                      <th>Ticket Resolved</th>
                      <th>Ticket Closed</th>
                    </thead>
                    <tbody>
                    <?php
                      include "connect.php";
                      $sql = "SELECT * FROM staff_tickets WHERE accessLVL ='Staff'";
                      $result = $con->query($sql);
                      if ($result->num_rows > 0) {
                      // output data of each row
                        while($row = $result->fetch_assoc()) {
                          echo "<tr><td>" . $row["Staff_Name"]. "</td><td>" . $row["TicketAssigned"] . "</td><td>" . $row["TicketResolved"] .
                              "</td><td>" . $row["TicketClosed"] ."</td></tr>";
                        }
                      echo "</table>";
                      } else { echo "0 results"; }
                      $con->close();
                      ?>
                      
                    </tbody>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Ticket Report -->
        <div class="row">
          <div class="col-md-12">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-title">Ticket Report: Monthly</h5>
                <p class="card-category">Bar Chart</p>
              </div>
              <div class="card-body">
                <canvas id="Monthly barGraph" width="400" height="100"></canvas>
              </div>
              <div class="card-footer">
                <div class="chart-legend">
                </div>
                <hr />
                <div class="card-stats">
                </div>
              </div>
            </div>
          </div>
        </div>
        
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
    var xValues = ["Reopened", "Pending", "Resolved", "Closed"];
    var yValues = [3, 2, 15, 20];
    var barColors = [
      "#0275d8",
      "#f0ad4e",
      "#d9534f",
      "#5bc0de",
    ];
    
    new Chart("piechart", {
      type: "doughnut",
      data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues,
    hoverOffset: 2
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
  
        });
  </script>
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
  <script>
    var xValues = ["Admission", "Enrollment", "Grade", "Document"];
    var yValues = [55, 49, 44, 24];
    var barColors = ["#d9534f", "#5cb85c","#5bc0de","#f0ad4e"];

    new Chart("barGraph", {
      type: "bar",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        title: {
        display: true,
        text: "",
        fontSize: 16
        }
      }
      });
  </script>
  <script>
    var xValues = ["Jan", "Feb", "Mar", "Apr","May", "Jun", "Jul", "Aug","Sep", "Oct", "Nov", "Dec",];
    var yValues = [20, 39, 44, 24,55, 49, 25, 48,55, 49, 17, 19];
    var barColors = ["skyblue", "skyblue","skyblue","skyblue","skyblue", "skyblue","skyblue","skyblue","skyblue", "skyblue","skyblue","skyblue"];

    new Chart("Monthly barGraph", {
      type: "bar",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        title: {
        display: true,
        text: "",
        fontSize: 16
        }
      }
      });
  </script>
</body>

</html>
