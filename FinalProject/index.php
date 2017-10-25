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
<html >
<head>
<title>Hotel Support</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style1.css">
<link rel="shortcut icon" href="images/icon.png" />
<link rel="stylesheet" href="css/bootstrap.css" >

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script> 
<!-- start menu -->     
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- end menu -->
<!-- top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});

		$(document).ready(function(){
		    $(".dropdown").hover(            
		        function() {
		            $('.dropdown-menu', this).not('.in .dropdown-menu').stop().slideDown("fast");
		            $(this).toggleClass('open');        
		        },
		        function() {
		            $('.dropdown-menu', this).not('.in .dropdown-menu').stop().slideUp("fast");
		            $(this).toggleClass('open');       
		        }
		    );
		});
	</script>
</head>
<body >
  	 <div class="header-top">
	 <div class="wrap"> 
		<div class="logo">
			<a href="index.php"><img src="images/logo.png"></a>
	    </div>
	    <div class="cssmenu">

		   <ul>
		        	<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<span class="caret"></span></a>				
					  <ul class="dropdown-menu" >
					  	<li><a href="UserHotel/home.php">Dashboard</a></li>
		                <li><a href="UserHotel/edit-password.php">Change Password</a></li>
		                <li><a href="login.php">Logout</a></li>
		                <li class="divider"></li>
		                <li><br></li>
		                <li><a href="UserHotel/home.php">Hotel</a></li>
		                <li><a href="UserSupply/home.php">Supply</a></li>
		                <li><a href="UserAdmin/home.php">Admin</a></li>
		              </ul>                
		            </li>
			 <li><a href="shop.php">Shopping</a></li> 
			 <li><a href="checkout.php">CheckOut</a></li> 
			 <li>
				<a href="checkout.php">
				<?php 
						$connect = mysqli_connect("localhost","root","","hotelsupport");
						$sql = 'select * from cart where U_id="'.$_SESSION['username'].'"';
						$result = mysqli_query($connect,$sql);
						$totalprice =0;
						$count = 0;
						while($row = mysqli_fetch_assoc($result)){
							$count++;
							$totalprice = $totalprice + $row['P_price'];
							
						}

						mysqli_close($connect);

					
						echo '<span class="simpleCart_total">฿ '.$totalprice.'</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">'.$count.'</span> items)
							<i class="glyphicon glyphicon-shopping-cart"></i></a>';

					?>
					

					
			 </li>
			 <li><a href="login.php">Logout</a></li>
		   </ul>
		</div></div>
		<!--<ul class="icon2 sub-icon2 profile_img">
			<li><a class="active-icon c2" href="#"> </a>
				<ul class="sub-icon2 list">
					<li><h3>Products</h3><a href=""></a></li>
					<li><p>Lorem ipsum dolor sit amet, consectetuer  <a href="">adipiscing elit, sed diam</a></p></li>
				</ul>
			</li>
		</ul>-->
		<div class="clear"></div>
 	</div>
   </div>
       <div class="index-banner">
       	  <div class="wmuSlider example1" style="height: 560px;">
			  <div class="wmuSliderWrapper">
				  		<?php
							  	$connect = mysqli_connect("localhost","root","","hotelsupport");
							  	$sql = 'select * from product order by RAND() LIMIT 4;';
							  	$result = mysqli_query($connect,$sql);
			                        while($row = mysqli_fetch_assoc($result)){
			                            echo '
			                              	<article style="position: relative; width: 100%; opacity: 1;"> 
											   	<div class="banner-wrap">
												   	<div class="slider-left">
														<img src="images/banner1.jpg" alt=""/> 
													</div>
													 <div class="slider-right">
													    <h2>';
					                                        echo $row['P_name'];
					                                        echo' 
					                                    </h2>
					                                    <h3>Price : <font color="red">';
					                                       	echo $row['P_price'];
					                                       	echo'
					                                   	฿</font></h3>
					                                    <h3>Grad : ';
					                                       	echo $row['P_grade'];
					                                       	echo'
					                                   	</h3>
						    							<p> by: ';
						                                    echo $row['U_company_name'];
						                                    echo '
						                                </P>
					                                    <div class="btn"><a href="shop.php">Shop Now</a></div>
													</div>
												 	<div class="clear"></div>
											 	</div>
											</article>
										';
			                            }
			                            

			                            mysqli_close($connect);
			                    ?>			
				</div>

                <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a>
                <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                	<li><a href="#">3</a></li>
                	<li><a href="#">4</a></li>
                  </ul>
                 <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a><ul class="wmuSliderPagination"><li><a href="#" class="wmuActive">0</a></li><li><a href="#" class="">1</a></li><li><a href="#" class="">2</a></li><li><a href="#" class="">3</a></li><li><a href="#" class="">4</a></li></ul></div>
            	 <script src="js/jquery.wmuSlider.js"></script> 
				 <script type="text/javascript" src="js/modernizr.custom.min.js"></script> 
						<script>
       						 $('.example1').wmuSlider();         
   						</script> 	           	      
             </div>
             <div class="header-bottom">
			    <form action="shop.php" method="post">
			   	<div class="wrap" align="middle" >
			   		<!-- start header menu -->

					<ul class="">
						<div class="row">
							<div class="col-sm-12">
								<div class="col-sm-2 col-sm-offset-2">
									<select class="form-control" name="supplylist" style="width: 200px;">
										<option value="*">All Supplier</option>
										<?php 
											$connect = mysqli_connect("localhost","root","","hotelsupport");
											$sql = 'select U_company_name from user where u_type="Supply"';
											$result = mysqli_query($connect,$sql);
											while($row = mysqli_fetch_assoc($result)){
												echo '<option value="'.$row['U_company_name'].'">'.$row['U_company_name'].'</option>';
											}
											mysqli_close($connect);
										?>
									</select>
								</div>
								<div class="col-sm-2">
									<select class="form-control" name="productlist" style="width: 200px; color: rgba(0,0,0,.87);" >
										<option value="*">All Product</option>
										<option value="vegetable">ผัก</option>
										<option value="fruit">ผลไม้</option>
										<option value="meat">เนื้อสัตว์</option>
										<option value="canned food">อาหารกระป๋อง</option>
										<option value="Spices and seasonings">เครื่องเทศและเครื่องปรุงรส</option>
										<option value="dried food">อาหารแห้ง</option>
										<option value="Flour and sugar">แป้งและน้ำตาล</option>

				
									</select>
								</div>
								<div class="col-sm-4">
									<input class="form-control" name="tsearch" placeholder="Find Someting You Want">
								</div>
							
								<div class="col-sm-1">
									<input class="btn btn-outline-secondary" type="submit" value="Search">
								</div>
								<div class="col-sm-9" >
									<div class="col-sm-5 col-sm-offset-2">
										<label>Grade : </label>
											<input type="radio" value="A" name="grade"> A
											<input type="radio" value="B" name="grade"> B
											<input type="radio" value="C" name="grade"> C
											<input type="radio" value="D" name="grade"> D
											<input type="radio" value="Other" name="grade"> Other
											<input type="radio" value="*" name="grade" checked> All
									</div>
									
								</div>  
							</div>	
						</div>	
					</ul> 
					<div class="clear"></div>
			    </div>
			</form>
       </div>
       



             <div class="main" style="margin-left: 70px;">
                <div class="wrap">
             	  	<div class="content-top">

				  		<div class="content-bottom">
							<?php
							  	$connect = mysqli_connect("localhost","root","","hotelsupport");
							  	$sql = 'select * from product limit 9';
							  	$result = mysqli_query($connect,$sql);
			                        $i=3;
			                        $j=1;
			                        while($row = mysqli_fetch_assoc($result)){

			                           	if($i==3){
			                            	echo'<div class="box1">';
			                            	$i=1;
			                            }else{
			                            	$i++;
			                            }
			                            echo '
			                              	<div class="col_1_of_single1 span_1_of_single1"><a href="quickProduct.php">
											    <div class="view1 view-fifth1">
												 	<div class="top_box">
													  	<h3 class="m_1">';
					                                        echo $row['P_name'];
					                                        echo' 
					                                    </h3>
					                                    <p class="m_2">Grad : ';
					                                       	echo $row['P_grade'];
					                                       	echo'
					                                   	</p>
						                               	<div class="grid_img">
															<div class="css3"><img src="images/banner2.jpg" alt=""/></div>
															<div class="mask1">
											                    <div class="info">Quick View</div>
													        </div>
											            </div>
										                <div class="price">฿';
						                                    echo $row['P_price'];
						                                    echo '
					                                    </div>
					                       				<p class="m_2"><font color="green">By : ';
					                                        echo $row['U_company_name'];   
					                                        echo'
					                                        </font>
					                                    </p>
													</div></a>
									
									 
										<form name="delete'.$row['P_id'].'" method="post" action="add-to-bag.php">
                                            <input type="hidden" name="productid" value="'.$row['P_id'].'">
                                                
                                            <input type="submit" value="Add To Bag" class="form-control input-md btn-warning">
                                        </form>
									  </div>
								     
								    </div>
											    	';
											if($j==3){
												echo'
												<div class="clear"></div>
						  					</div>';
						  					$j=1;
											}else{
												$j++;
											}
			                            }
			                            

			                            mysqli_close($connect);
			                    ?>








				  <div class="clear"></div>
			    </div>
			  </div>
			 </div>
        </div>
        <?php 
        	require('footer.php');
        ?>
</body>
</html>