
<!DOCTYPE>
<html>
<head>
<title>Hotel Support</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style1.css">
<link rel="shortcut icon" href="images/icon.png" />
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
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
					  	<?php 
							if($_SESSION['status'] == 'Admin'){
								echo'<li><a href="UserAdmin/home.php">Dashboard</a></li>';
							}
							if($_SESSION['status'] == 'Hotel'){
								echo'<li><a href="UserHotel/home.php">Dashboard</a></li>';
							}
							if($_SESSION['status'] == 'Supply'){
								echo'<li><a href="UserSupply/home.php">Dashboard</a></li>';
							}
						?>
						<?php 
							if($_SESSION['status'] == 'Admin'){
								echo'<li><a href="UserAdmin/edit-password.php">Change Password</a></li>';
							}
							if($_SESSION['status'] == 'Hotel'){
								echo'<li><a href="UserHotel/edit-password.php">Change Password</a></li>';
							}
							if($_SESSION['status'] == 'Supply'){
								echo'<li><a href="UserSupply/edit-password.php">Change Password</a></li>';
							}
						?>
		                <li><a href="index.php">Logout</a></li>
		                <li class="divider"></li>
		                <li><br></li>

		              </ul>                
		            </li>
			 <li><a href="shop.php">Shopping</a></li> 
			 <li><a href="checkout.php">CheckOut</a></li> 
			 <li><a href="checkout.php"></a></li>
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
			 <li><a href="logout.php">Logout</a></li>
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
									<input class="form-control" name="tsearch" value="" placeholder="Find Someting You Want">
								</div>
							
								<div class="col-sm-1">
									<input class="btn btn-outline-secondary" type="submit" id="search" value="Search">
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
									<div class="col-sm-4">
								        	<label>Sort By</label>
								            <select name="sort">
								                <option value="">All</option>
								                <option value="DESC">Price : High to Low</option>
								                <option value="ASC">Price : Low to Hight</option>
								            </select>
					               	</div>
									
								</div>  
							</div>
								
						</div>	
						
					</ul> 
					<div class="clear"></div>
					
			    </div>


			</form>
       </div>
 	
 </body>

