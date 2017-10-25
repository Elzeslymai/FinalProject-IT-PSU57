<?php 
        
        session_start();
            if(empty($_SESSION['username'])){
                echo "<script>alert('Please Login !! ');document.location='/FinalProject/login.php'</script>";
            }else{
                if($_SESSION['status'] == 'Admin' || $_SESSION['status'] == 'Hotel'){
                    
                }else{
                    echo "<script>alert('You not have permission');document.location='/FinalProject/login.php'</script>";
                }
            }
?><!DOCTYPE>
<html>
<head>
<title>Hotel Support</title>
<link rel="shortcut icon" href="images/icon.png" />
<link rel="stylesheet" type="text/css" href="css/style2.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.js"></script>
<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<script src="js/bootstrap-datepicker.min.js"></script>
</head>
<body>
	<?php 
		require('header.php');
	?>
	<div class="check">
                <div class="container">	 
                    <div class="col-md-3 cart-total">
                        <a class="continue" href="shop.php">Continue to basket</a>
                        <div class="price-details">
                            <h3>Price Details</h3>
                            <span>Total</span>
                            <span class="total1">6200.00</span>
                            <span>Discount</span>
                            <span class="total1">10%(Festival Offer)</span>
                            <span>Delivery Charges</span>
                            <span class="total1">150.00</span>
                            <div class="clearfix"></div>				 
                        </div>
                        <hr class="featurette-divider">
                        <ul class="total_price">
                           <li class="last_price"> <h4>TOTAL</h4></li>	
                           <li class="last_price"><span>6150.00</span></li>
                           <div class="clearfix"> </div>
                        </ul> 
                        <div class="clearfix"></div>
                        <a class="order" href="invoice.php">Make invoice</a>
                    </div>

                    <div class="col-md-9 cart-items">
                        <h1>My Shopping Bag</h1>
                        
                       <!--Panel 1 -->
                   

                            <?php 
                                $connect = mysqli_connect("localhost","root","","hotelsupport");
                                $sql1 = 'select DISTINCT Supply_name from cart where U_id="'.$_SESSION['username'].'"';
                                $result1 = mysqli_query($connect,$sql1);
                                while($row1 = mysqli_fetch_assoc($result1)){
                                    echo'
                                    <div class="panel" style="border-color: orange;" id="Po1">
                                        <div class="panel-heading">
                                            <div class="container">
                                                <div class="col-sm-2">
                                                    <img src="http://prod.static9.net.au/_/media/TV/T/Travel-Guides/Phuket/Logos/logo.png" style="height: 50px;"> 
                                                </div>
                                                <div class="col-sm-4">            
                                                    <p><b style="color: #d93c21;">'.$row1['Supply_name'].'</b></p>
                                                    <p>เวลาจัดส่งสินค้า 9.00-17.00 / ขั้นต่ำ 2000 บาท</p>
                                                </div>
                                                <div class="col-sm-2">
                                                    <b style="color: #d93c21;">กำหนดวันรับสินค้า</b>
                                                    <div class="input-group date" data-provide="datepicker">
                                                        <input type="text" class="form-control" title="กำหนดวันรับสินค้า">
                                                        <div class="input-group-addon">
                                                            <span class="glyphicon glyphicon-th"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';

                                        $sql = 'select * from cart where Supply_name="'.$row1['Supply_name'].'" and U_id="'.$_SESSION['username'].'"';
                                        $result = mysqli_query($connect,$sql);
                                        $i = 2;
                                        $j = 0;
                                        while($row = mysqli_fetch_assoc($result)){
                                            if($i == 2){
                                                echo '<div class="panel-body" style="background: #f5f5f5;">';
                                                $i=0;
                                            }else{
                                                $i++;
                                            }
                                                
                                                echo '
                                                    <div class="cart-header" id="order1">
                                                        <div class="close" id="close1">
                                                            <form name="delete'.$row['cart_id'].'" method="post" action="delete-item-cart.php">
                                                                <input type="hidden" name="deleteid" value="'.$row['cart_id'].'">
                                                                    
                                                                <input type="submit" value="Delete" class="form-control input-md btn-warning">
                                                            </form>
                                                            
                                                        </div>
                                                        <div class="cart-sec simpleCart_shelfItem">
                                                            <div class="cart-item">
                                                                <img src="images/banner1.jpg" class="img-responsive" alt="" style="margin-top: 30px;">
                                                            </div>
                                                            <div class="cart-item-info" >
                                                                <ul class="qty" >
                                                                    <li>
                                                                        <p>
                                                                            <b>'.$row['P_name'].'  Grad : '.$row['P_grad'].'
                                                                            </b>
                                                                        </p>

                                                                    </li>

                                                                    <li><p>Qty :'.$row['C_qty'].'
                                                                        <input type="number" value="1" class="" min="1" style="width: 50px; text-align: center;">
                                                                    piece.</p></li>
                                                                    <li><p>Price each : ฿'.$row['P_price'].'</p></li>
                                                                </ul>
                                                                <div class="delivery">               
                                                                    <span>**สั่งล่วงหน้า 1 วัน**</span>
                                                                    <div class="clearfix"></div>
                                                                </div>  
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>

                                                ';
                                            if($j == 2){
                                                echo ' </div>';
                                                $j=0;
                                            }else{
                                                $j++;
                                            }
                                        }


                                   
                                echo '</div>';
                                }

                                mysqli_close($connect);

                            ?>

                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    <?php 
		require('footer.php');
	?>
</body>
</html>