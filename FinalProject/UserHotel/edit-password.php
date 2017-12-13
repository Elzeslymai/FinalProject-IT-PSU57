<?php 
 		
 		session_start();
 			if(empty($_SESSION['username'])){
 				echo "<script>alert('Please Login !! ');document.location='/FinalProject/index.php'</script>";
 			}else{
				if($_SESSION['status'] == 'Hotel'){
					
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
 		require('Menu-side-hotel.php');
 	?>
 	<br>
 	<br>
 	<br>
 	<div class="container">
 		<div class="row">
 			<div class="col-sm-4 col-sm-offset-4">
 				<div class="modal-header">
					<h3 class="modal-title"><span class="glyphicon glyphicon-lock"></span>Recovery password</h3>
				</div>
				<div class="modal-body">
					<p><span class="glyphicon glyphicon-user"></span> Username</p>
					<input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off" placeholder="example">
					<br><p><span class="glyphicon glyphicon-envelope"></span> Type your email account</p>
					<input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off" placeholder="somebody@example.com">
				</div>
				<div class="col-sm-offset-3">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-custom" data-toggle="modal" data-dismiss="modal" data-target="#forgetmodal1">Recovery</button>
				</div>
 			</div>
 		</div>
 	</div>

 	<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal1">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Recovery password</h4>
			</div>
			<div class="modal-body">
				<p><i class="glyphicon glyphicon-ok-sign"></i>link to reset password send to your email</p>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a href="https://www.hotmail.com"><button type="button" class="btn btn-custom">Go to Email</button></a>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
 </body>
 </html>