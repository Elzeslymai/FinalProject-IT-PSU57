<?php 
        
        session_start();
            if(empty($_SESSION['username'])){
                echo "<script>alert('Please Login !! ');document.location='/FinalProject/login.php'</script>";
            }else{
                if($_SESSION['status'] == 'Supply'){
                    
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
 		require('Menu-side-Supply.php');
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
                                <tr>
                                    <td >
                                        <div align="center">
                                            <a href="#"><img src="http://www.weddinghitz.com/wp-content/uploads/old/image/renaissance_01.jpg" style="height: 50px;"> 
                                            <h5><u>HS0001</u></h5></a>
                                        </div>
                                    </td>
                                    <td >
                                        <p><b style="color: #d93c21;">Renaissance phuket hotel</b></p>
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
                                    <td>
                                    	<a href="/FinalProject/UserSupply/update-status.php"><button type="button" class="btn " style="width: 110px; margin-top: 22px;">Update Status</button></a>
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
                                    <td class="text-center" >฿150.00</td>
                                    <td class="text-center">10</td>
                                    <td class="text-right">฿1500.00</td>
                                    <td class="text-right"><button type="button" class="btn btn-info" style="width: 90px;">Shipment</button></td>
                                    <td></td>
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
                                    <td></td>
                                </tr>
                                <tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
                                <tr>
                                    <td >
                                        <div align="center">
                                            <a href="#"><img src="http://www.tripchiangmai.com/images-data/hotel-detail/logo-013572z34d.jpg" style="height: 50px;"> 
                                            <h5><u>HS0002</u></h5></a>
                                        </div>
                                    </td>
                                    <td >
                                        <p><b style="color: #d93c21;">Royal city phuket</b></p>
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
                                    <td>
                                    	<a href="/FinalProject/UserSupply/update-status.php"><button type="button" class="btn " style="width: 110px; margin-top: 22px;">Update Status</button></a>
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
                                    <td></td>
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
                                    <td></td>
                                </tr>
                                <tr><td></td><td></td><td></td><td></td><td></td><td></td></tr>
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