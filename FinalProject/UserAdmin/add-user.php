<?php 
 		
 		session_start();
 			if(empty($_SESSION['username'])){
 				echo "<script>alert('Please Login !! ');document.location='/FinalProject/index.php'</script>";
 			}else{
				if($_SESSION['status'] == 'Admin'){
					
				}else{
					echo "<script>alert('You not have permission');document.location='/FinalProject/index.php'</script>";
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
 		require('Menu-side-Admin.php');
 	?>
 	<br>
 	<h1><span class="glyphicon glyphicon-plus-sign col-sm-offset-1"></span> ADD USER</h1>
 	<form class="form-horizontal" name="form1" method="POST" action="/FinalProject/UserAdmin/add-user-db.php" onSubmit="JavaScript:return fncSubmit();" enctype="multipart/form-data">
	

		<div class="form-group">
		  <label class="col-md-4 control-label" for="ProductDescription">Product Picture (150x200)</label>  
		  <div class="col-md-5">
		  <input type="file" name="fileToUpload" id="fileToUpload">
		    
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label" for="ProductDescription">Company Name</label>  
		  <div class="col-md-5">
		  	<input  type="text" name="Companyname" id="Companyname" placeholder="Company Name" class="form-control input-md" >
		    
		  </div>
		</div>

		<!-- Text input-->
		<?php
			$username = "";
		    $charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
		    
		    for($i = 0; $i < 8; $i++)
		    {
		        $random_int = mt_rand();
		        $username .= $charset[$random_int % strlen($charset)];
		   }
		   echo'<input  type="hidden" name="Username" value="'.$username.'">';
		?>
		<?php
			$password = "";
		    $charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		    
		    for($i = 0; $i < 8; $i++)
		    {
		        $random_int = mt_rand();
		        $password .= $charset[$random_int % strlen($charset)];
		   }
		   echo'<input  type="hidden" name="Password" value="'.$password.'">';
		?>
		

		<!-- Select Basic -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="selectbasic">Type of User</label>
		  <div class="col-md-5">
		    <select id="typeuser" name="typeuser" class="form-control">
				<option value="Hotel">Hotel</option>
				<option value="Supply">Supply</option>
				<option value="Admin">Admin</option>
		    </select>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label" for="FeaturesOne">Email</label>  
		  <div class="col-md-5">
		  <input id="email" name="email" type="email" placeholder="Example@example.com" class="form-control input-md" >
		    
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label" for="FeaturesOne">Tell</label>  
		  <div class="col-md-5">
		  <input id="tell" name="tell" type="tell" placeholder="076415223" class="form-control input-md" >
		    
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label" for="ProductDescription">Address</label>  
		  <div class="col-md-5">
		  	<input  type="text" name="Address" placeholder="Address" class="form-control input-md" >
		    
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label" for="ProductDescription">Country</label>  
		  <div class="col-md-5">
		  	<input  type="text" name="Country" placeholder="Country" class="form-control input-md" >
		    
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label" for="ProductDescription">Province</label>  
		  <div class="col-md-5">
		  	<input  type="text" name="Province" placeholder="Province" class="form-control input-md" >
		    
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-4 control-label" for="ProductDescription">Zip Code</label>  
		  <div class="col-md-5">
		  	<input  type="text" name="ZipCode" placeholder="Zip Code" class="form-control input-md" >
		    
		  </div>
		</div>

		<script language="javascript">
	                        function fncSubmit()
	                        {   
	 
	                            if(document.form1.Companyname.value == ""){
	                                $(function() { 
								        $('#notify1').click();
								    });
	                            	return false;

	                            }

	                            if(document.form1.Username.value==""){
	                                $(function() { 
								        $('#notify2').click();
								    });
	                                return false;
	                            } 

	                            if(document.form1.Password.value==""){
	                                $(function() { 
								        $('#notify3').click();
								    });
	                                return false;
	                            }

	                            if(document.form1.typeuser.value==""){
	                                alert("typeuser");
	                                return false;
	                            }

	                            if(document.form1.email.value==""){
	                                $(function() { 
								        $('#notify4').click();
								    });
	                                return false;
	                            }


	                            if(document.form1.tell.value==""){
	                                $(function() { 
								        $('#notify5').click();
								    });
	                                return false;
	                            }

	                            if(document.form1.Address.value==""){
	                                $(function() { 
								        $('#notify6').click();
								    });
	                                return false;
	                            }

	                            if(document.form1.Country.value==""){
	                                $(function() { 
								        $('#notify7').click();
								    });
	                                return false;
	                            }

	                            if(document.form1.Province.value==""){
	                                $(function() { 
								        $('#notify8').click();
								    });
	                                return false;
	                            }

	                            if(document.form1.ZipCode.value==""){
	                                $(function() { 
								        $('#notify9').click();
								    });
	                                return false;

	                            }
	                            else{
	                            	
	                            	
	                        	}

	                            document.form1.submit();
 
	                        }
	    </script>


			<div class="form-group">
			  
			  <div class="col-md-3 col-sm-offset-5">
			  <input id="OngoingFee" name="OngoingFee" type="submit" value="Confirm" class="form-control input-md btn-info" >
			  
			  </div>
			</div>
			
			
	</form>

	<input type="hidden" id="notify" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal1">
	<input type="hidden" id="notify1" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal2">
	<input type="hidden" id="notify2" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal3">
	<input type="hidden" id="notify3" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal4">
	<input type="hidden" id="notify4" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal5">
	<input type="hidden" id="notify5" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal6">
	<input type="hidden" id="notify6" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal7">
	<input type="hidden" id="notify7" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal8">
	<input type="hidden" id="notify8" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal9">
	<input type="hidden" id="notify9" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal10">

	<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal1">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">×</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title">Add User</h4>
				</div>
				<div class="modal-body">
					<p><i class="glyphicon glyphicon-ok-sign"></i> Add User Complete!</p>
					
				</div>
				<div class="modal-footer">
					<a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" data-dismiss="modal">Add Other</button></a>
					<a href="/FinalProject/UserAdmin/user-list.php"><button type="button" class="btn btn-info">Go to List</button></a>
				</div>
			</div> 
		</div> 
	</div> 

	<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal2">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">×</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title">Add User</h4>
				</div>
				<div class="modal-body">
					<p><i class="glyphicon glyphicon-remove"></i> Please Check Company Name!</p>
					
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
					<h4 class="modal-title">Add User</h4>
				</div>
				<div class="modal-body">
					<p><i class="glyphicon glyphicon-remove"></i> Please Check Username!</p>
					
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
					<h4 class="modal-title">Add User</h4>
				</div>
				<div class="modal-body">
					<p><i class="glyphicon glyphicon-remove"></i> Please Check Password!</p>
					
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
					<h4 class="modal-title">Add User</h4>
				</div>
				<div class="modal-body">
					<p><i class="glyphicon glyphicon-remove"></i> Please Check Email!</p>
					
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
					<h4 class="modal-title">Add User</h4>
				</div>
				<div class="modal-body">
					<p><i class="glyphicon glyphicon-remove"></i> Please Check Tell!</p>
					
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
					<h4 class="modal-title">Add User</h4>
				</div>
				<div class="modal-body">
					<p><i class="glyphicon glyphicon-remove"></i> Please Check Address!</p>
					
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
					<h4 class="modal-title">Add User</h4>
				</div>
				<div class="modal-body">
					<p><i class="glyphicon glyphicon-remove"></i> Please Check Country!</p>
					
				</div>
				<div class="modal-footer">
					<a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" data-dismiss="modal">close</button></a>
					
				</div>
			</div> 
		</div> 
	</div> 

	<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal9">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">×</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title">Add User</h4>
				</div>
				<div class="modal-body">
					<p><i class="glyphicon glyphicon-remove"></i> Please Check Province!</p>
					
				</div>
				<div class="modal-footer">
					<a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" data-dismiss="modal">close</button></a>
					
				</div>
			</div> 
		</div> 
	</div> 

	<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal10">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">×</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title">Add User</h4>
				</div>
				<div class="modal-body">
					<p><i class="glyphicon glyphicon-remove"></i> Please Check Zip Code!</p>
					
				</div>
				<div class="modal-footer">
					<a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" data-dismiss="modal">close</button></a>
					
				</div>
			</div> 
		</div> 
	</div> 

 </body>
 </html>