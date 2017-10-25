<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		body,footer{margin:0;padding:0;border:0;vertical-align:baseline;}
		footer{display: block;}
		ol,ul{list-style:none;margin:0;padding:0;}

		

		/*--footer--*/
		.footer-top{
			background:#08080b;
			padding: 5px 0;
		}
		.col_1_of_footer-top:first-child {
			margin-left: 0;
		}
		.span_1_of_footer-top {
			width: 30.7%;
		}
		ul.f_list img{
			vertical-align:middle; 
			float:left;
			margin-right:2%;
		}
		span.delivery{
			color:#fff;
			font-size:0.8125em;
		}
		.col_1_of_footer-top {
			display: block;
			float: left;
			margin:0 0 0 3.6%; 
		}
		span.orange{
			color:#FFAF02;
		}
	</style>
</head>
<body>
	<div class="footer">
       	  <div class="footer-top">
       		<div class="wrap">
       			   <div class="col_1_of_footer-top span_1_of_footer-top">
				  	 <ul class="f_list">
				  	 	<li><img src="images/f_icon.png" alt=""/><span class="delivery">Hotel Support</span></li>
				  	 </ul>
				   </div>
				   <div class="col_1_of_footer-top span_1_of_footer-top">
				  	<ul class="f_list">
				  	 	<li><img src="images/f_icon1.png" alt=""/><span class="delivery">Customer Service :<span class="orange"> (800) 000-2587 (freephone)</span></span></li>
				  	 </ul>
				   </div>
				   <div class="col_1_of_footer-top span_1_of_footer-top">
				  	<ul class="f_list">
				  	 	<li><img src="images/f_icon2.png" alt=""/><span class="delivery">Fast delivery & free returns</span></li>
				  	 </ul>
				   </div>
				  <div class="clear"></div>
			 </div>
       	 </div>
       	
       	 
       <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>

</html>