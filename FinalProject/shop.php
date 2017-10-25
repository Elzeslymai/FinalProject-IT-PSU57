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
<title>Hotel Support</title>
<link rel="shortcut icon" href="images/icon.png" />
</head>
<body>
  	<?php
  		require('header.php');
  		require('Menu-side.php');

  		$check = @$_POST['supplylist'];
        $check1 = @$_POST['productlist'];
        $check2 = @$_POST['grade'];
        $check4 = @$_POST['tsearch'];
        $check3 = @$_POST['sort'];
  	?>
       
		<div class="cont span_2_of_3">
		 	<div class="form-control" style="width: 93%">
		        <div class="col-sm-4">

               	</div>
               	<div class="col-sm-4 col-sm-offset-4">
		       			 
	            </div>
			</div>   		

			    
			    	<?php
			    			//echo '<input type="hidden" name="test" value="'.$_POST['supplylist'].'">';

                            $connect = mysqli_connect("localhost","root","","hotelsupport");
                            $sql = 'select * from product order by P_price ASC';


                            if($check3 != ""){
                            	
	                            if($check4 != ""){
		                            $sql = 'select * from product where P_name ="'.$_POST['tsearch'].'" order by P_price '.$_POST['sort'].' ';
		                        }else{
		                        	if($check == "" && $check == "" && $check == ""){
		                            	$sql = 'select * from product order by P_price '.$_POST['sort'].'';
		                            }
		                            if($check == "*" && $check == "*" && $check == "*"){
		                            	$sql = 'select * from product order by P_price '.$_POST['sort'].'';
		                            }
		                            if($check != "*" && $check != ""){
		                            	$sql = 'select * from product where U_company_name ="'.$_POST['supplylist'].'" order by P_price '.$_POST['sort'].'';
		                            }
		                            if($check1 != "*" && $check1 != ""){
		                            	$sql = 'select * from product where P_catagories ="'.$_POST['productlist'].'" order by P_price '.$_POST['sort'].'';
		                            }
		                            if($check2 != "*" && $check2 != ""){
		                            	$sql = 'select * from product where P_grade ="'.$_POST['grade'].'" order by P_price '.$_POST['sort'].'';
		                            }
		                            if($check != "*" and $check1 != "*" && $check != "" && $check1 != ""){
		                            	$sql = 'select * from product where U_company_name ="'.$_POST['supplylist'].'" and P_catagories ="'.$_POST['productlist'].'" order by P_price '.$_POST['sort'].'';
		                            }
		                            if($check1 != "*" and $check2 != "*" && $check1 != "" && $check2 != ""){
		                            	$sql = 'select * from product where P_catagories ="'.$_POST['productlist'].'" and P_grade ="'.$_POST['grade'].'" order by P_price '.$_POST['sort'].'';
		                            }
		                            if($check != "*" and $check2 != "*" && $check != "" && $check2 != ""){
		                            	$sql = 'select * from product where U_company_name ="'.$_POST['supplylist'].'" and P_grade ="'.$_POST['grade'].'" order by P_price '.$_POST['sort'].'';
		                            }
		                            if($check != "*" and $check1 != "*" and $check2 != "*" && $check != "" && $check1 != "" && $check2 != ""){
		                            	$sql = 'select * from product where U_company_name ="'.$_POST['supplylist'].'" and P_catagories ="'.$_POST['productlist'].'" and P_grade ="'.$_POST['grade'].'" order by P_price '.$_POST['sort'].'';
		                            }
		                        
		                        }

                            }else{
                            	if($check4 != ""){
		                            $sql = 'select * from product where P_name ="'.$_POST['tsearch'].'"';
		                        }else{
		                        	if($check == "" && $check == "" && $check == ""){
		                            	$sql = 'select * from product';
		                            }
		                            if($check == "*" && $check == "*" && $check == "*"){
		                            	$sql = 'select * from product';
		                            }
		                            if($check != "*" && $check != ""){
		                            	$sql = 'select * from product where U_company_name ="'.$_POST['supplylist'].'" ';
		                            }
		                            if($check1 != "*" && $check1 != ""){
		                            	$sql = 'select * from product where P_catagories ="'.$_POST['productlist'].'" ';
		                            }
		                            if($check2 != "*" && $check2 != ""){
		                            	$sql = 'select * from product where P_grade ="'.$_POST['grade'].'" ';
		                            }
		                            if($check != "*" and $check1 != "*" && $check != "" && $check1 != ""){
		                            	$sql = 'select * from product where U_company_name ="'.$_POST['supplylist'].'" and P_catagories ="'.$_POST['productlist'].'"';
		                            }
		                            if($check1 != "*" and $check2 != "*" && $check1 != "" && $check2 != ""){
		                            	$sql = 'select * from product where P_catagories ="'.$_POST['productlist'].'" and P_grade ="'.$_POST['grade'].'"';
		                            }
		                            if($check != "*" and $check2 != "*" && $check != "" && $check2 != ""){
		                            	$sql = 'select * from product where U_company_name ="'.$_POST['supplylist'].'" and P_grade ="'.$_POST['grade'].'"';
		                            }
		                            if($check != "*" and $check1 != "*" and $check2 != "*" && $check != "" && $check1 != "" && $check2 != ""){
		                            	$sql = 'select * from product where U_company_name ="'.$_POST['supplylist'].'" and P_catagories ="'.$_POST['productlist'].'" and P_grade ="'.$_POST['grade'].'"';
		                            }
		                        
		                        }
                            }


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
                                        	</font></p>
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
		
	     	<?php 
	     		require('footer.php');
	     	?>
</body>
</html>