<?php 
    session_start();
    if(isset($_SESSION['U_unique_id'])){
        include_once "connect.php";
        $outgoing_id = $_SESSION['U_unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";
        $sql = "SELECT * FROM ticketinfo LEFT JOIN accountcreation ON accountcreation.unique_id = ticketinfo.ticketreceiver_id
                WHERE (ticketreceiver_id = {$outgoing_id} AND ticketsender_id = {$incoming_id})
                OR (ticketreceiver_id = {$incoming_id} AND ticketsender_id = {$outgoing_id}) ORDER BY msg_id";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['ticketreceiver_id'] === $outgoing_id){
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }else{
                    $output .= '<div class="chat incoming">
                                <img src="Super Admin/images/'.$row['img'].'" alt="">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }else{
        header("location: ../login.php");
    }

?>