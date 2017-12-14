<?php 
 		
 		session_start();
 			if(empty($_SESSION['username'])){
 				echo "<script>alert('Please Login !! ');document.location='/FinalProject/index.php'</script>";
 			}else{
				if($_SESSION['status'] == 'Supply'){
					
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
	<style type="text/css">
		.btn-custom {
		    color: #fff;
			background-color: #1fa67b;
		}
		.btn-custom:hover,
		.btn-custom:focus {
		    color: #fff;
		}
	</style>
</head>
<body >
 	<?php 
 		require('Menu-side-Supply.php');
 	?>
 	<br>
 	<br>
 	<br>
 	<form action="edit-password-db.php" method="post">
	 	<div class="container">
	 		<div class="row">
	 			<div class="col-sm-4 col-sm-offset-4">
	 				<div class="modal-header">
						<h3 class="modal-title"><span class="glyphicon glyphicon-lock"></span>Recovery password</h3>
					</div>
					<div class="modal-body">
						<p><span class="glyphicon glyphicon-lock"></span>Old Password</p>
						<input type="password" name="OldPassword"  class="form-control" placeholder="Old Password">
						<br><p><span class="glyphicon glyphicon-lock"></span> New Password</p>
						<input type="password" name="newpassword" id="recovery-email" class="form-control" placeholder="New Password">
					</div>
					<div class="col-sm-offset-3">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-custom" data-toggle="modal" data-dismiss="modal" data-target="#forgetmodal1">Change Password</button>
					</div>
	 			</div>
	 		</div>
	 	</div>
 	</form>
 </body>
 </html>