<?php 
 		
 		session_start();
 			if(empty($_SESSION['username'])){
 				echo "<script>alert('Please Login !! ');document.location='/FinalProject/login.php'</script>";
 			}else{
				if($_SESSION['status'] == 'Hotel'){
					
				}else{
					echo "<script>alert('You not have permission');document.location='/FinalProject/login.php'</script>";
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
 		require('Menu-side-hotel.php');
 	?>
 	<br>
    <h1><span class="glyphicon glyphicon-check col-sm-offset-1"></span>  YOUR INVOICE BILL</h1>

        <div class="col-sm-12">
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
                                    SUPPLYIER   
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
                        $sql = 'select * from order1 where U_id="'.$_SESSION['username'].'"';
                        $result = mysqli_query($connect,$sql);
                        while($row = mysqli_fetch_assoc($result)){
                            if($row['status'] != "Cancle" && $row['status'] != "Wait for Accept" && $row['status'] != "Complete"){
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
                                        <div class="col-sm-3">
                                            <b>
                                                '.$row['date'].'       
                                            </b>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="row">
                                                    STATUS : 
                                                        <button type="button" class="btn btn-success" style="width: 120px; margin-right: 0px" disabled>'.$row['status'].'</button>
                                                        &nbsp;&nbsp;
                                                        
                                            </div>
                                        </div>
                                        <div>&nbsp;</div>';
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