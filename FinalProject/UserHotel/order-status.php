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
	<link rel="stylesheet" type="text/css" href="/FinalProject/css/style2.css">
	<link rel="shortcut icon" href="/FinalProject/images/icon.png" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	
</head>
<body >
 	<?php 
 		require('Menu-side-hotel.php');
 	?>
 	<br>
    <h1><span class="glyphicon glyphicon-check col-sm-offset-1"></span>  ORDER STATUS</h1>
 	<div class="container">

        <div class="row">
            <br>

            <div class="col-md-12">
                <div class="col-md-10 col-sm-offset-1 ">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-default">
                        <div class="panel-heading text-center"><h4>Order Status</h4></div>
                        <div class="panel-body">
                           <table class="table borderless">
                            <thead>

                            </thead>
                            <tbody>
                                <!-- foreach ($order->lineItems as $line) or some such thing here -->

                                <?php
                                    $connect = mysqli_connect("localhost","root","","hotelsupport");
                                    /*$sql = 'select O_id, O_data_recieve, U_company_name, P_name, P_grade, P_price, O_qty, O_price_total, O_status from order, product, user where order.U_id = user.U_id and order.P_id = product.P_id';*/
                                    $sql = 'select U_id from user';
                                    $result1 = mysqli_query($connect,$sql);
                                    while($row = mysqli_fetch_assoc($result1)){
                                        echo $row['U_id'];
                                        /*echo '<tr>
                                                <td >
                                                    <div align="center">
                                                        <a href="#"><img src="http://prod.static9.net.au/_/media/TV/T/Travel-Guides/Phuket/Logos/logo.png" style="height: 50px;">
                                                            <h5><u>';
                                        echo $row['O_id'];
                                        echo '</u></h5>
                                            </a> 
                                            </div>
                                            </td>';*/
                                    }
                                     mysqli_close($connect);                
                                ?>

                                
                                    <td >
                                        <p><b style="color: #d93c21;">Phuket Andaman Co., Ltd.</b></p>
                                        <p>เวลาส่งสินค้า 9.00-17.00</p>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td >
                                        <b style="color: #d93c21;">วันรับสินค้า</b>
                                                <div class="input-group date" data-provide="datepicker">
                                                    <input type="text" value="20/04/2017" disabled="disabled" class="form-control" title="กำหนดวันรับสินค้า">
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-th"></span>
                                                    </div>
                                                </div>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td class="col-md-3">
                                        <div class="media">
                                             <a class="thumbnail pull-left" href="#"> <img class="media-object" src="/FinalProject/images/banner1.jpg" style="width: 72px; height: 72px;"> </a>
                                             <div class="media-body">
                                                 <h5 class="media-heading">&nbsp; เนื้อปลาแซลม่อน</h5>
                                                 <h5 class="media-heading">&nbsp; Grade : A</h5>
                                             </div>
                                        </div>
                                    </td>
                                    <td class="text-center">฿150.00</td>
                                    <td class="text-center">10</td>
                                    <td class="text-right">฿1500.00</td>
                                    <td class="text-right"><button type="button" class="btn btn-danger" style="width: 90px;">Cancle</button></td>
                                </tr>
                                <tr>
                                    <td class="col-md-3">
                                        <div class="media">
                                             <a class="thumbnail pull-left" href="#"> <img class="media-object" src="/FinalProject/images/banner2.jpg" style="width: 72px; height: 72px;"> </a>
                                             <div class="media-body">
                                                 <h5 class="media-heading">&nbsp; ไข่ปลาแซลม่อน</h5>
                                                 <h5 class="media-heading">&nbsp; Grad : B</h5>
                                             </div>
                                        </div>
                                    </td>
                                    <td class="text-center">฿250.</td>
                                    <td class="text-center">5</td>
                                    <td class="text-right"> ฿1250.00</td>
                                    <td class="text-right"><button type="button" class="btn btn-warning" style="width: 90px;">Payment</button></td>
                                </tr>
                                <tr><td></td><td></td><td></td><td></td><td></td></tr>
                                <tr>
                                    <td >
                                        <div align="center">
                                            <a href="#"><img src="https://pura-77ngm3fmcluyxz.stackpathdns.com/wp-content/uploads/2017/01/Pura-Logo-400-by-284.gif" style="height: 50px;"> 
                                            <h5><u>HS0002</u></h5>
                                            </a>
                                        </div>
                                    </td>
                                    <td >
                                        <p><b style="color: #d93c21;">Pura Organic Co., Ltd.</b></p>
                                        <p>เวลาส่งสินค้า 8.00-18.00 </p>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td >
                                        <b style="color: #d93c21;">วันรับสินค้า</b>
                                                <div class="input-group date" data-provide="datepicker">
                                                    <input type="text" value="15/05/2017" disabled="disabled" class="form-control" title="กำหนดวันรับสินค้า">
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-th"></span>
                                                    </div>
                                                </div>
                                    </td>
                                    
                                </tr>
                            
                                <tr>
                                    <td class="col-md-3">
                                        <div class="media">
                                             <a class="thumbnail pull-left" href="#"> <img class="media-object" src="/FinalProject/images/banner1.jpg" style="width: 72px; height: 72px;"> </a>
                                             <div class="media-body">
                                                 <h5 class="media-heading">&nbsp; ไข่ปลาแซลม่อน</h5>
                                                 <h5 class="media-heading">&nbsp; Grad : B</h5>
                                             </div>
                                        </div>
                                    </td>
                                    <td class="text-center">฿250.</td>
                                    <td class="text-center">5</td>
                                    <td class="text-right"> ฿1250.00</td>
                                    <td class="text-right"><button type="button" class="btn btn-info" style="width: 90px;">Shipment</button></td>
                                </tr>
                                <tr>
                                    <td class="col-md-3">
                                        <div class="media">
                                             <a class="thumbnail pull-left" href="#"> <img class="media-object" src="/FinalProject/images/banner2.jpg" style="width: 72px; height: 72px;"> </a>
                                             <div class="media-body">
                                                 <h5 class="media-heading">&nbsp; ไข่ปลาแซลม่อน</h5>
                                                 <h5 class="media-heading">&nbsp; Grad : B</h5>
                                             </div>
                                        </div>
                                    </td>
                                    <td class="text-center">฿250.</td>
                                    <td class="text-center">5</td>
                                    <td class="text-right"> ฿1250.00</td>
                                    <td class="text-right"><button type="button" class="btn btn-success" style="width: 90px;">Complete</button></td>
                                </tr>
                                <tr><td></td><td></td><td></td><td></td><td></td></tr>
                            </tbody>
                        </table> 
                        </div>
                    </div>
                    <!--SHIPPING METHOD END-->
                </div>
                </div>
                </div>
</div>
 </body>
 </html>