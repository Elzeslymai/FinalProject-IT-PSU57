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
    <h1><span class="glyphicon glyphicon-check col-sm-offset-1"></span>  UPDATE STATUS</h1>
    
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

                        $sql = 'select * from order1 where order_id="'.$_POST['updatestatusorder'].'"';
                        $result = mysqli_query($connect,$sql);
                        while($row = mysqli_fetch_assoc($result)){

                            $sql2 = 'select * from user where U_id="'.$row['U_id'].'"';
                            $result2 = mysqli_query($connect,$sql2);
                            $row2 = mysqli_fetch_assoc($result2);

                                echo '
                                    <div class="col-sm-3">
                                        <b>
                                            <u>
                                                <a href="">
                                                '.$row['invoiceNo'].'
                                                </a>
                                            </u>
                                        </b>
                                    </div>
                                    <div class="col-sm-3">
                                        <b>
                                        '.$row2['U_company_name'].'
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
                                                    <button type="button" class="btn btn-warning" style="width: 120px; margin-right: 0px" disabled>'.$row['status'].'</button>
                                                    &nbsp;&nbsp;

                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-sm-3">
                                        &nbsp;
                                    </div>
                                    <div class="col-sm-3">
                                        &nbsp;
                                    </div>
                                    <div class="col-sm-3">
                                        &nbsp;
                                    </div>
                                    <div class="col-sm-3">
                                        &nbsp;
                                    </div>

                                    <div class="col-sm-3">
                                        <p><b style="color: #d93c21;">Choose Status..</b></p>

                                    </div>
                                    <div class="col-sm-3">
                                        &nbsp;
                                    </div>
                                    <div class="col-sm-3">
                                        &nbsp;
                                    </div>
                                    <div class="col-sm-3">
                                        &nbsp;
                                    </div>
                                    <div class="col-sm-3">
                                        &nbsp;
                                    </div>
                                    <div class="col-sm-3">
                                        &nbsp;
                                    </div>
                                    <div class="col-sm-3">
                                        &nbsp;
                                    </div>

                                    <form id="update" method="post" action="update-status-db.php">
                                        <input type="hidden" value="'.$row['order_id'].'" name="orderstatus">
                                        <div class="col-sm-2">
                                            &nbsp;
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="btn btn-warning " >
                                                <input style="" type="checkbox" name="orderprepare"  value="Order Preparation" class=" ">
                                                <strong class="name">ORDER PREPARATION</strong>
                                            </label>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="btn btn-info " >
                                                <input style="" type="checkbox" name="ordership"  value="Shipment" class="">
                                                <strong class="name">SHIPMENT</strong> 
                                            </label>
                                        </div>
                                        <div class="col-sm-3">
                                            <label class="btn btn-success " >
                                                <input style="" type="checkbox" name="ordercomplete"  value="Complete" class="">
                                                <strong class="name">COMPLETE</strong> 
                                            </label>
                                        </div>
                                        
                                        <div class="col-sm-3">
                                            &nbsp;
                                        </div>
                                        <div class="col-sm-2">
                                            &nbsp;
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="submit" form="update" class="btn " style="width: 110px; margin-top: 25px;">CONFIRM</button>
                                        </div>
                                        <div class="col-sm-2">
                                            &nbsp;
                                        </div>
                                        <div class="col-sm-3">
                                            &nbsp;
                                        </div>
                                    </form>


                                    <div>&nbsp;</div>
                                    <div>&nbsp;</div>
                                    <div>&nbsp;</div>';
                                

                        }

                        mysqli_close($connect);
                    ?>
                        
                    </div>
                </div>
            </div>
        </div>   

 </body>
 </html>