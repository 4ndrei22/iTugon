<?php
  session_start();
  if(!isset($_SESSION['U_unique_id'])){
    header('refresh: 1, url = ../Login.php');
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
      <!-- end nav bar -->
      <div class="content">
          <div class="Header pb-4">
            <h2>
              Open Tickets
            </h2>
            <div class="inner-addon right-addon">
              <i class="fa fa-search"></i>
              <input type="text" class="form-control" placeholder="Search..." />
            </div>
          </div>
          <div class="container-lg bg-white p-0" style="height: calc(100vh-42px); display: flex;">
            <div id="convo-list-div" class="col col-md-5 col-lg-4 bg-default bg-opacity-25 row-cols-1" style="height: calc(100vh - 42px) !important;">
              <div class="search col p-4">
                <input id="input-search" type="text" placeholder="Search name" class="col form-control mx-0 border-secondary">
                <button hidden><i class="fas fa-search"></i></button>
              </div>
              <input type="text" value="" id="convoIncomingId" hidden>
              <div class="p-2 overflow-auto" style="height: calc(100vh - 128px) !important;">
                <div class="users-list" id="uList">
                
                </div>
              </div>
            </div>
            <script src="../javascript/ticket_incoming.js"></script>
            <script>
              function showConversation(userid) {
                document.getElementById('chat-box-div').src = "./conversation.php?user_id=" + userid;
                document.getElementById('input-search').value = '';
                document.getElementById('input-search').dispatchEvent(new KeyboardEvent('keydown',  {'keycode':13}));
                document.getElementById('convo-div').classList.remove("d-none");
                document.getElementById('convo-div').classList.remove("d-sm-block");
                document.getElementById('convo-list-div').classList.add("d-none");
                document.getElementById('convo-list-div').classList.add("d-sm-block");
              }
              function goBack() {
                document.getElementById('convo-div').classList.add("d-none");
                document.getElementById('convo-div').classList.add("d-sm-block");
                document.getElementById('convo-list-div').classList.remove("d-none");
                document.getElementById('convo-list-div').classList.remove("d-sm-block");
              }
            </script>
          </div>
      </div>
    </div>
  </div>
  
    
</body>