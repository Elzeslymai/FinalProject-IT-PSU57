<?php 
        
        session_start();
            if(empty($_SESSION['username'])){
                echo "<script>alert('Please Login !! ');document.location='/FinalProject/index.php'</script>";
            }else{
                if($_SESSION['status'] == 'Supply'){
                    
                }else{
                    echo "<script>alert('You not have permission');document.location='/FinalProject/index.php'</script>";
                }
            }
?>
<!DOCTYPE>
<html>
<head>
	<title>Hotel Support</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="shortcut icon" href="/FinalProject/images/icon.png" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	
</head>
<body >
 	<?php 
 		require('Menu-side-Supply.php');
 	?>
 	<br>
    <h1><span class="glyphicon glyphicon-check col-sm-offset-1"></span>  ORDER STATUS</h1>
    
        <div class="col-md-12">
            <div class="col-md-10 col-sm-offset-1 ">
                <div class="panel panel-default">
                    <div class="panel-heading ">
                        <div class="col-sm-3">
                            <b>
                                PAYMENT NUMBER          
                            </b>
                            
                        </div>
                        <div class="col-sm-3">
                            <b>
                                    BUYER   
                            </b>
                        </div>
                        <div class="col-sm-3">
                            <b>
                                PAYMENT DATE            
                            </b>
                        </div>
                        <div class="col-sm-3">
                            <b>
                                STATUS            
                            </b>
                        </div>
                        <br>
                    </div>
                    <div class="panel-body">
                    <?php
                        $connect = mysqli_connect("localhost","root","","hotelsupport");
                        $sql1 = 'select * from user where U_id="'.$_SESSION['username'].'"';
                        $result1 = mysqli_query($connect,$sql1);
                        $row1 = mysqli_fetch_assoc($result1);

                        $sql = 'select * from order1 where Supply_name="'.$row1['U_company_name'].'"';
                        $result = mysqli_query($connect,$sql);
                        while($row = mysqli_fetch_assoc($result)){

                            $sql2 = 'select * from user where U_id="'.$row['U_id'].'"';
                            $result2 = mysqli_query($connect,$sql2);
                            $row2 = mysqli_fetch_assoc($result2);

                            if($row['status'] != "Cancle" && $row['status'] != "Wait for Accept" && $row['status'] != "Complete"){
                                if($row['status'] == "Accept"){
                                    echo'
                                        <div class="col-sm-3">
                                            <b>
                                                <u>
                                                    <a href="/FinalProject/invoice/'.$row['invoiceNo'].'.pdf">
                                                    '.$row['invoiceNo'].'
                                                    </a>
                                                </u>
                                            </b>
                                        </div>
                                        <div class="col-sm-3">
                                            <b>
                                            '.$row['Supply_name'].'
                                            </b>
                                        </div>
                                        <div class="col-sm-2">
                                            <b>
                                                '.$row['date'].'       
                                            </b>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="row">
                                                    <form id="update'.$row['order_id'].'" method="post" action="update-status.php">
                                                
                                                    <button type="button" class="btn btn-success" style="width: 135px; margin-right: 0px" disabled>'.$row['status'].'</button>
                                                    &nbsp;&nbsp;
                                                    <input type="hidden" name="updatestatusorder" value="'.$row['order_id'].'">
                                                    <button type="submit" form="update'.$row['order_id'].'" class="btn btn-info" style="width: 140px;">UPDATE STATUS</button>
                                                </form>
                                            </div>
                                        </div>';
                                        echo '                     
                                            <div>&nbsp;</div>
                                        ';
                                }
                                if($row['status'] == "Order Preparation"){
                                    echo'
                                        <div class="col-sm-3">
                                            <b>
                                                <u>
                                                    <a href="/FinalProject/invoice/'.$row['invoiceNo'].'.pdf">
                                                    '.$row['invoiceNo'].'
                                                    </a>
                                                </u>
                                            </b>
                                        </div>
                                        <div class="col-sm-3">
                                            <b>
                                            '.$row['Supply_name'].'
                                            </b>
                                        </div>
                                        <div class="col-sm-2">
                                            <b>
                                                '.$row['date'].'       
                                            </b>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="row">
                                                    <form id="update'.$row['order_id'].'" method="post" action="update-status.php">
                                                
                                                    <button type="button" class="btn btn-warning" style="width: 135px; margin-right: 0px" disabled>'.$row['status'].'</button>
                                                    &nbsp;&nbsp;
                                                    <input type="hidden" name="updatestatusorder" value="'.$row['order_id'].'">
                                                    <button type="submit" form="update'.$row['order_id'].'" class="btn btn-info" style="width: 140px;">UPDATE STATUS</button>
                                                </form>
                                            </div>
                                        </div>';
                                        echo '                     
                                            <div>&nbsp;</div>
                                        ';
                                }
                                if($row['status'] == "Shipment"){
                                    echo'
                                        <div class="col-sm-3">
                                            <b>
                                                <u>
                                                    <a href="/FinalProject/invoice/'.$row['invoiceNo'].'.pdf">
                                                    '.$row['invoiceNo'].'
                                                    </a>
                                                </u>
                                            </b>
                                        </div>
                                        <div class="col-sm-3">
                                            <b>
                                            '.$row['Supply_name'].'
                                            </b>
                                        </div>
                                        <div class="col-sm-2">
                                            <b>
                                                '.$row['date'].'       
                                            </b>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="row">
                                                    <form id="update'.$row['order_id'].'" method="post" action="update-status.php">
                                                
                                                    <button type="button" class="btn btn-info" style="width: 135px; margin-right: 0px" disabled>'.$row['status'].'</button>
                                                    &nbsp;&nbsp;
                                                    <input type="hidden" name="updatestatusorder" value="'.$row['order_id'].'">
                                                    <button type="submit" form="update'.$row['order_id'].'" class="btn btn-info" style="width: 140px;">UPDATE STATUS</button>
                                                </form>
                                            </div>
                                        </div>';
                                        echo '                     
                                            <div>&nbsp;</div>
                                        ';
                                }
                                
                            }

                        }

                        mysqli_close($connect);
                    ?>
                        
                    </div>
                </div>
            </div>
        </div>        
 </body>
 </html>