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
				<?php 
					$connect = mysqli_connect("localhost","root","","hotelsupport");
					$sql1 = 'select P_id from product';
					    $result1 = mysqli_query($connect,$sql1);
						while($row1 = mysqli_fetch_assoc($result1)){
							$id = 'P'.$row1['P_id'];
							$id1 = @$_POST[$id];
							
							if($id1 != ""){
								$Pid = $id1;

							}
						}

					$sql2 = 'select P_filename from product where P_id="'.$Pid.'" ';
					$result2 = mysqli_query($connect,$sql2);
					$row2 = mysqli_fetch_assoc($result2);

					echo '
						<img class="" src="UserSupply/uploads/'.$row2['P_filename'].'"/ style="height: 250px; width: 270px;">
					';
				?>		
					
				</div>
					
					
				<div class="cont1 span_2_of_a1">
					<?php
						$connect = mysqli_connect("localhost","root","","hotelsupport");
						$sql = 'select * from product where P_id="'.$Pid.'" ';
					    $result = mysqli_query($connect,$sql);
						$row = mysqli_fetch_assoc($result);

						echo '
							<h3 class="m_3"><b>'.$row['P_name'].'</b></h3>
							<div class="price_single">
										  <span class="actual">'.$row['P_price'].' ฿.</span>
										</div>
							<ul class="options">
								<h4 class="m_9">Grad :</h4>
								<li><a href="#">'.$row['P_grade'].'</a></li>
								<div class="clear"></div>
							</ul>
							<div class="btn_form">
							   <form >
								 
								 <button type="submit" value="Add to cart" ">add to cart</button>
							  	
							  	</form>
							</div>
							<p class="m_desc">'.$row['P_detail'].'</p>
	    			
						';
						mysqli_close($connect);
					?>
					
					
						

					
					
					
	    			
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


				<br>
				<br>
				<br>
				<br>
				

	  
		       	<?php
		       		require('footer.php');
		       	?>
			</div>
     	</div>

</body>
</html>