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
<!DOCTYPE HTML>
<html>
<head>
	
	<link rel="shortcut icon" href="images/icon.png" />
	
</head>
<body>
	<?php
  		require('header.php');
  		require('Menu-side.php');
  	?>

   		<div class="wrap">
  			<div class="cont span_2_of_3">
			  	<div class="labout span_1_of_a1">
				<!-- start product_slider -->
				    <ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="" src="images/banner1.jpg"/>
									<img class="" src="images/banner2.jpg"/>
									
								</a>
							</li>
							

					</ul>
				</div>
					
					
			<!-- end product_slider -->
			<div class="cont1 span_2_of_a1">
				<h3 class="m_3">Lorem ipsum dolor sit amet</h3>
				
				<div class="price_single">
							  <span class="reducedfrom">$66.00</span>
							  <span class="actual">$12.00</span><a href="#">click for offer</a>
							</div>
				<ul class="options">
					<h4 class="m_9">Grad :</h4>
					<li><a href="#">A</a></li>
					<li><a href="#">B</a></li>
					<li><a href="#">C</a></li>
					<div class="clear"></div>
				</ul>
				<div class="btn_form">
				   <form>
					 <input type="submit" value="Add to cart" title="">
				  </form>
				</div>
				
    			<p class="m_desc">********************************************************************************************************************
    			********************************************************************************************************************
    			********************************************************************************************************************</p>
    			
                <!--<div class="social_single">	
				   <ul>	
					  <li class="fb"><a href="#"><span> </span></a></li>
					  <li class="tw"><a href="#"><span> </span></a></li>
					  <li class="g_plus"><a href="#"><span> </span></a></li>
					  <li class="rss"><a href="#"><span> </span></a></li>		
				   </ul>
			    </div>-->
			</div>
			<div class="clear"></div>
     
     	<h2 class="m_3">สินค้าแนะนำ</h2>
         <ul id="flexiselDemo3">
			<li><img src="images/banner2.jpg" /><div class="grid-flex"><a href="#">ไข่ปลาแซลมอน</a><p>฿480</p></div></li>
			<li><img src="images/banner1.jpg" /><div class="grid-flex"><a href="#">เนื้อปลาแซลมอน</a><p>฿480</p></div></li>
			<li><img src="images/banner2.jpg" /><div class="grid-flex"><a href="#">ไข่ปลาแซลมอน</a><p>฿480</p></div></li>
			<li><img src="images/banner1.jpg" /><div class="grid-flex"><a href="#">เนื้อปลาแซลมอน</a><p>฿480</p></div></li>
			<li><img src="images/banner2.jpg" /><div class="grid-flex"><a href="#">ไข่ปลาแซลมอน</a><p>฿480</p></div></li>
		 </ul>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo1").flexisel();
			$("#flexiselDemo2").flexisel({
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	 <div class="toogle">
     	<h3 class="m_3">Product Details</h3>
     	<p class="m_text">******************************************************************************************************************************
    	******************************************************************************************************************************
    	******************************************************************************************************************************
    </p>
     </div>					
	 <div class="toogle">
     	<h3 class="m_3">Product Reviews</h3>
     	<p class="m_text">
     	******************************************************************************************************************************
    	******************************************************************************************************************************
    	******************************************************************************************************************************
</p>
     </div>
     </div>
     <div class="clear"></div>
	 </div>

	  
       	<?php
       		require('footer.php');
       	?>

</body>
</html>