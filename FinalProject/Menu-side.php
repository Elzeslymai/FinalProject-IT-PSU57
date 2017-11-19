
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

	<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<style>
						button.accordion {
						    background-color: #dcdcdc;
						    color: #444;
						    cursor: pointer;
						    top: 2px;
						    padding: 5px;
						    height: 6%;
						    width: 85%;
						    border: none;
						    text-align: left;
						    outline: none;
						    font-size: 15px;
						    transition: 0.4s;
						}

						button.accordion.active, button.accordion:hover {
						    background-color: #ddd;
						}

						button.accordion:after {
						    content: '\002B';
						    color: #777;
						    font-weight: bold;
						    float: right;
						    margin-left: 5px;
						}

						button.accordion.active:after {
						    content: "\2212";
						}

						div.panel {
						    padding: 0 18px;
						    background-color: white;
						    max-height: 0;
						    overflow: hidden;
						    transition: max-height 0.2s ease-out;
						}
						</style>

</head>
<body>
	<div class="login" style="margin-left: 10px;">
         <div class="wrap">
     	    <div class="rsidebar span_1_of_left" >
				  <div class="check" id="cart1" style="position: fixed;">
		                <div class="container">	 
						  	<div class="col-md-3 cart-total">
		                        <a class="continue" href="shop.php" style="width: 240px;">Continue to basket</a>
		                        <div class="price-details">
		                        <?php 
									$connect = mysqli_connect("localhost","root","","hotelsupport");
									$sql = 'select * from cart where U_id="'.$_SESSION['username'].'"';
									$result = mysqli_query($connect,$sql);
									$totalprice =0;
									$count = 0;
									$eachprice = 0;
									while($row = mysqli_fetch_assoc($result)){
										$count++;
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
		                        <a class="order" href="invoice.php" style="width: 240px;">Make invoice</a>
		                    </div>
                    	</div>
                    </div>
                    
						

				</section>
		</div>

</body>
</html>