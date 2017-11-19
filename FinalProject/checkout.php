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
?>
<!DOCTYPE>
<html>
<head>
<title>Hotel Support</title>
<link rel="shortcut icon" href="images/icon.png" />
<link rel="stylesheet" type="text/css" href="css/style3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
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
                        <?php 
                                    $connect = mysqli_connect("localhost","root","","hotelsupport");
                                    $sql = 'select * from cart where U_id="'.$_SESSION['username'].'"';
                                    $result = mysqli_query($connect,$sql);
                                    $totalprice =0;
                                    $eachprice = 0;
                                    while($row = mysqli_fetch_assoc($result)){
                                        $eachprice = $row['P_price'] * $row['C_qty'];
                                        $totalprice = $totalprice + $eachprice;
                                        
                                    }

                                    mysqli_close($connect);
                                    echo'
                                            <h3>Price Details</h3>
                                            <span>Total</span>
                                            <span class="total1">'.$totalprice.'</span>
                                            <span>Discount</span>
                                            <span class="total1">10%</span>
                                            <span>Delivery Charges</span>
                                            <span class="total1">00.00</span>
                                            <div class="clearfix"></div>                 
                                        </div>
                                        <hr class="featurette-divider">
                                        <ul class="total_price">
                                           <li class="last_price"> <h4>TOTAL</h4></li>  
                                           <li class="last_price"><span>'.$totalprice.'฿ </span></li>
                                           <div class="clearfix"> </div>
                                        </ul> 
                                    ';
                                ?>
                        <div class="clearfix"></div>
                        <a class="order" href="#" id="makeInvoice">Make invoice</a>

                    </div>

                    <div class="col-md-9 cart-items">
                        <h1>My Shopping Bag</h1>
                        
                       <!--Panel 1 -->
                   

                            <?php 
                                $count = 0;
                                $connect = mysqli_connect("localhost","root","","hotelsupport");
                                $sql1 = 'select DISTINCT Supply_name from cart where U_id="'.$_SESSION['username'].'"';
                                $result1 = mysqli_query($connect,$sql1);
                                $id = 0;
                                $id1 = 1;
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

                                                            <input type="text" class="form-control" id="'.$id.'" title="กำหนดวันรับสินค้า">
                                                        <div class="input-group-addon ">
                                                            <a href="#" ><span ">confirm</span></a>
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
                                                                    <li><p>Price each : ฿'.$row['P_price'].'</p></li>
                                                                    
                                                                        <div class="col-sm-1 col-sm-offset-7">
                                                                            <div class="input-group number-spinner">
                                                                                <span class="input-group-btn data-dwn">
                                                                                    <button type="submit" form="qty'.$row['cart_id'].'" id="minus'.$row['cart_id'].'" class="btn btn-warning btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                                                                </span>
                                                                                <form action="update-cart.php" method="post" id="qty'.$row['cart_id'].'">
                                                                                    <input type="text" class="form-control text-center" value="'.$row['C_qty'].'" min="1" max="40" style="width:50px;" disabled>
                                                                                    <input type="hidden" name="'.$row['cart_id'].'" class="form-control text-center" value="'.$row['C_qty'].'" min="1" max="40" style="width:50px;" >

                                                                                </form>
                                                                                <span class="input-group-btn data-up">
                                                                                    <button type="submit" form="qty'.$row['cart_id'].'" id="plus'.$row['cart_id'].'" class="btn btn-warning btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                                                                </span>
                                                                            </div>
                                                                        
                                                                        </div>                                                                 
                                                        
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
                                            $count++;
                                            $id1++;
                                        }


                                   
                                    echo '</div></div>';
                                    $id--;
                                    
                                }
                                echo '<input type="hidden" id="count" value="'.$count.'">';
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

    <script type="text/javascript">
        $(function() {
    var action;
    $(".number-spinner button").mousedown(function () {
        btn = $(this);
        input = btn.closest('.number-spinner').find('input');
        btn.closest('.number-spinner').find('button').prop("disabled", false);

        if (btn.attr('data-dir') == 'up') {
            action = setInterval(function(){
                if ( input.attr('max') == undefined || parseInt(input.val()) < parseInt(input.attr('max')) ) {
                    input.val(parseInt(input.val())+1);
                }else{
                    btn.prop("disabled", true);
                    clearInterval(action);
                }
            }, 50);
        } else {
            action = setInterval(function(){
                if ( input.attr('min') == undefined || parseInt(input.val()) > parseInt(input.attr('min')) ) {
                    input.val(parseInt(input.val())-1);
                }else{
                    btn.prop("disabled", true);
                    clearInterval(action);
                }
            }, 50);
        }
    }).mouseup(function(){
        clearInterval(action);
    });
});
    </script>
</body>
</html>