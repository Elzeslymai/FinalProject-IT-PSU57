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

 		$connect = mysqli_connect("localhost","root","","hotelsupport");

        $sql = 'select * from user where U_id="'.$_SESSION['username'].'" ';
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_assoc($result);
        	if($row['U_password'] == $_POST['OldPassword']){
        		$sql1 = 'update user set U_password="'.$_POST['newpassword'].'" where U_id = "'.$_SESSION['username'].'"';
        		$result1= mysqli_query($connect,$sql1);
        		if(!$result1){
        			echo" <script language='javascript'>
								$(function() { 
									$('#notify').click();
								});

							  </script>
						";
        		}
        		else{
        			echo" <script language='javascript'>
								$(function() { 
									$('#notify1').click();
								});

							  </script>
						";
        		}
        	}
        	else{
        		echo" <script language='javascript'>
								$(function() { 
									$('#notify2').click();
								});

							  </script>
						";
        	}
        
        mysqli_close($connect);
 	?>
 	<br>
 	<br>
 	<br>
 	
 	
	

	<input type="hidden" class="btn btn-custom" data-toggle="modal" data-dismiss="modal" data-target="#forgetmodal1" id="notify">
	<input type="hidden" class="btn btn-custom" data-toggle="modal" data-dismiss="modal" data-target="#forgetmodal2" id="notify1">
	<input type="hidden" class="btn btn-custom" data-toggle="modal" data-dismiss="modal" data-target="#forgetmodal3" id="notify2">

	<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal1">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Change password</h4>
			</div>
			<div class="modal-body">
				<p><i class="glyphicon glyphicon-remove-sign"></i>Can't Change Password!!</p>
				
			</div>
			<div class="modal-footer">
				<a href="/FinalProject/UserHotel/edit-password.php"><button type="button" class="btn btn-default" >Back</button></a>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal2">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Change password</h4>
			</div>
			<div class="modal-body">
				<p><i class="glyphicon glyphicon-ok-sign"></i>Password has Change!!</p>
				
			</div>
			<div class="modal-footer">
				<a href="/FinalProject/UserHotel/edit-password.php"><button type="button" class="btn btn-default" >Back</button></a>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal3">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Change password</h4>
			</div>
			<div class="modal-body">
				<p><i class="glyphicon glyphicon-remove-sign"></i>Your Old Password was Wrong!!</p>
				
			</div>
			<div class="modal-footer">
				<a href="/FinalProject/UserHotel/edit-password.php"><button type="button" class="btn btn-default" >Back</button></a>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->



 	
 </body>
 </html>