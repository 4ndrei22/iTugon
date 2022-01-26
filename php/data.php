<?php
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM ticketinfo WHERE (ticketsender_id = {$row['unique_id']}
                OR ticketreceiver_id = {$row['unique_id']}) AND (ticketreceiver_id = {$outgoing_id} 
                OR ticketsender_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($con, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No message available";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['ticketreceiver_id'])){
            ($outgoing_id == $row2['ticketreceiver_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }
        ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
        ($outgoing_id == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";

        $output .= '
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-auto" >
                                        <div class="icon-small text-center icon-warning">
                                        <img src="Super Admin/images/'. $row['img'] .'" alt="" class="icon-simple">
                                        </div>
                                    </div>
                                    <div class="col-md-auto">
                                        <div class="numbers">
                                            <!-- <p class="card-category text-white">Open</p>
                                            <p class="card-title text-white">54<p> -->
                                            <h4 class="box-title">'. $row['firstname']. " " . $row['lastname'] .'<span class="status"></span></h4> 
                                            <h6 class="box-ticket">#'.$row['ticket_id'].'</h6>
                                            <p>'. $you . $msg .'</p>
                                            <h3 class="box-status"><span class="status bg-dark"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                            </div>
                        </div>
                    </div>'
                    ;
    }
?>