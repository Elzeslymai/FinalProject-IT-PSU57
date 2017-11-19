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
 	<h1><span class="glyphicon glyphicon-plus-sign col-sm-offset-1"></span> ADD PRODUCT</h1>
 	<form class="form-horizontal" name="form2" method="POST" action="/FinalProject/UserSupply/add-product-db.php" onSubmit="JavaScript:return fncSubmit();">


		<div class="form-group">
		  <label class="col-md-4 control-label" for="ProductDescription">Product Picture (250x160)</label>  
		  <div class="col-md-5">
		  <input type="file" name="fileToUpload" id="fileToUpload" >
		    
		  </div>
		</div>
		<?php
			$connect = mysqli_connect("localhost","root","","hotelsupport");
			$sql = 'select U_company_name from user where U_id = "'.$_SESSION['username'].'"';
			$result = mysqli_query($connect,$sql);
			$row = mysqli_fetch_assoc($result);
			if(!$result){

			}else{
				echo '<input type="hidden" value="'.$row['U_company_name'].'" name="U_company_name">';
			}
			mysqli_close($connect);
		?>

		<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="ProductDescription">Product Name</label>  
	  <div class="col-md-5">
	  <input id="ProductName" name="ProductName" type="text" placeholder="Enter product name" class="form-control input-md" >
	    
	  </div>
	</div>


	<!-- Select Basic -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="selectbasic">Select Catagories</label>
	  <div class="col-md-5">
	    <select id="Catagories" name="Catagories" class="form-control">
			<option value="*">All Product</option>
			<option value="vegetable">ผัก</option>
			<option value="fruit">ผลไม้</option>
			<option value="meat">เนื้อสัตว์</option>
			<option value="canned food">อาหารกระป๋อง</option>
			<option value="Spices and seasonings">เครื่องเทศและเครื่องปรุงรส</option>
			<option value="Dried food">อาหารแห้ง</option>
			<option value="Flour and sugar">แป้งและน้ำตาล</option>
	    </select>
	  </div>
	</div>

	<!-- Select Basic -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="selectbasic">Product Grade</label>
	  <div class="col-md-5">
	    <select id="Grade" name="Grade" class="form-control">
			<option value="none">none</option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
			<option value="other">Other</option>
	    </select>
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="FeaturesOne">Price / Kg.(฿)</label>  
	  <div class="col-md-5">
	  <input id="Price" name="Price" type="text" placeholder="Enter price" class="form-control input-md" >
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="FeaturesTwo">Product Detail</label>  
	  <div class="col-md-5">
	  <input type="textarea" rows="8" cols="80" class="form-control" id="Detail" name="Detail">
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="FeaturesThree">Time to shipment</label>  
	  <div class="col-md-5">
	  <input id="shipment" name="shipment" type="text" placeholder="Enter day to shipment" class="form-control input-md" >
	    
	  </div>
	</div>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="OngoingFee">Service Fee</label>  
	  <div class="col-md-5">
	  <input id="Fee" name="Fee" type="text" placeholder="Sercive Fee" class="form-control input-md">
	    
	  </div>
	</div>

	<script language="javascript">
	                        function fncSubmit()
	                        {   
	 
	                            if(document.form2.ProductName.value == ""){
	                                $(function() { 
								        $('#notify1').click();
								    });
	                            	return false;

	                            }

	                            if(document.form2.Catagories.value=="*"){
	                                $(function() { 
								        $('#notify2').click();
								    });
	                                return false;
	                            } 

	                            if(document.form2.Grade.value=="none"){
	                                $(function() { 
								        $('#notify3').click();
								    });
	                                return false;
	                            }

	                            if(document.form2.Price.value==""){
	                                $(function() { 
								        $('#notify4').click();
								    });
	                                return false;
	                            }

	                            if(document.form2.Detail.value==""){
	                                $(function() { 
								        $('#notify5').click();
								    });
	                                return false;
	                            }


	                            if(document.form2.shipment.value==""){
	                                $(function() { 
								        $('#notify6').click();
								    });
	                                return false;
	                            }

	                            if(document.form2.Fee.value==""){
	                                $(function() { 
								        $('#notify7').click();
								    });
	                                return false;
	                            }

	                            else{
	                            	
	                            	
	                        	}

	                            document.form2.submit();
 
	                        }
	    </script>

	    <div class="form-group">
		  	<div class="col-md-3 col-sm-offset-5">
				<input id="OngoingFee" name="OngoingFee" type="submit" value="Confirm" class="form-control input-md btn-info">
			</div>
		</div>
	

	</form>

	<input type="hidden" id="notify1" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal2">
	<input type="hidden" id="notify2" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal3">
	<input type="hidden" id="notify3" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal4">
	<input type="hidden" id="notify4" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal5">
	<input type="hidden" id="notify5" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal6">
	<input type="hidden" id="notify6" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal7">
	<input type="hidden" id="notify7" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal8">

	<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal2">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">×</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title">Add Product</h4>
				</div>
				<div class="modal-body">
					<p><i class="glyphicon glyphicon-remove"></i> Please Check Product Name!</p>
					
				</div>
				<div class="modal-footer">
					<a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" data-dismiss="modal">close</button></a>
					
				</div>
			</div> 
		</div> 
	</div> 

	<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal3">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">×</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title">Add Product</h4>
				</div>
				<div class="modal-body">
					<p><i class="glyphicon glyphicon-remove"></i> Please Check Catagories!</p>
					
				</div>
				<div class="modal-footer">
					<a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" data-dismiss="modal">close</button></a>
					
				</div>
			</div> 
		</div> 
	</div> 

	<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal4">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">×</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title">Add Product</h4>
				</div>
				<div class="modal-body">
					<p><i class="glyphicon glyphicon-remove"></i> Please Check Product Grade!</p>
					
				</div>
				<div class="modal-footer">
					<a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" data-dismiss="modal">close</button></a>
					
				</div>
			</div> 
		</div> 
	</div> 

	<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal5">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">×</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title">Add Product</h4>
				</div>
				<div class="modal-body">
					<p><i class="glyphicon glyphicon-remove"></i> Please Check Product Price!</p>
					
				</div>
				<div class="modal-footer">
					<a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" data-dismiss="modal">close</button></a>
					
				</div>
			</div> 
		</div> 
	</div> 

	<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal6">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">×</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title">Add Product</h4>
				</div>
				<div class="modal-body">
					<p><i class="glyphicon glyphicon-remove"></i> Please Check Product Detail!</p>
					
				</div>
				<div class="modal-footer">
					<a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" data-dismiss="modal">close</button></a>
					
				</div>
			</div> 
		</div> 
	</div> 

	<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal7">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">×</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title">Add Product</h4>
				</div>
				<div class="modal-body">
					<p><i class="glyphicon glyphicon-remove"></i> Please Check Product Shipment!</p>
					
				</div>
				<div class="modal-footer">
					<a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" data-dismiss="modal">close</button></a>
					
				</div>
			</div> 
		</div> 
	</div> 

	<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal8">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">×</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title">Add Product</h4>
				</div>
				<div class="modal-body">
					<p><i class="glyphicon glyphicon-remove"></i> Please Check Product Fee!</p>
					
				</div>
				<div class="modal-footer">
					<a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" data-dismiss="modal">close</button></a>
					
				</div>
			</div> 
		</div> 
	</div> 

 </body>
 </html>