<?php 
  session_start();
  include_once "connect.php";
  if(!isset($_SESSION['U_unique_id'])){
    header("location: ../Login.php");
  }
?>
<?php 
    if($_GET['user_id']==''){
      if(!(isset($_SESSION['convo_user_id']))){
        header("Location: include/view/no-chats");
      }
      $_GET['user_id'] = $_SESSION['convo_user_id'];
    }
    $_SESSION['convo_user_id'] = $_GET['user_id'];
    $user_id = mysqli_real_escape_string($con, $_SESSION['convo_user_id']);
    $sql = mysqli_query($con, "SELECT * FROM accountcreation WHERE unique_id = {$user_id}");
    if(mysqli_num_rows($sql) > 0){
      $row = mysqli_fetch_assoc($sql);
    }else{
      //header("location: users.php");
    }
?>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#671d1e">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#671d1e">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#671d1e">
    
    <link href="../CSS Files/Staff_Dashboard.css" rel="stylesheet" />
    <link href="../CSS Files/demo.css" rel="stylesheet" />
    <link href="../CSS Files/ActiveTickets.css" rel="stylesheet">

    <title>Chats</title>
    <link rel="icon" type="image/png" href="/icons/sims-favicon.png"/>

</head>
<body style="height: 100vh;">

    <div class="bg-primary bg-opacity-10 d-flex flex-row px-4 py-2">
        <img class="rounded-circle ms-3 align-self-xl-center my-auto" src="<?php echo $row['img']; ?>" width="42px" height="42px">
        <div>
            <p class="text-truncate fs-5 m-0 ms-2 mt-2 lh-1 fw-600"><?php echo $row['firstname']. " " . $row['lastname'] ?></p>
        </div>
    </div>
    <div class="chat-box p-3 overflow-auto d-flex flex-column-reverse " style="height: calc(100vh - 153px) !important;">

    </div>
    <div class="p-3 pb-4 border-top bg-secondary bg-opacity-25 rounded-top">
        <form action="#" class="typing-area">
            <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
            <input type="text" name="message" class="input-field form-control col-11" placeholder="Type a message here..." autocomplete="off">
            <button hidden></button>
        </form>
    </div>

    <script src="../javascript/chat.js"></script>

</body>


</html>