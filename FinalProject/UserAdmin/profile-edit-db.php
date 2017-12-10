<?php
	session_start();
 	$_SESSION['username'];
	require('Menu-side-Admin.php');
	$connect = mysqli_connect("localhost","root","","hotelsupport");
	$sql = 'update user set U_username="'.$_POST['username'].'", U_company_name="'.$_POST['company'].'", U_address="'.$_POST['address'].'", U_tell="'.$_POST['tell'].'" where U_id="'.$_SESSION['username'].'"';
	$result = mysqli_query($connect,$sql);
	if(!$result){
		echo" <script language='javascript'>
				$(function() { 
					$('#notify1').click();
				});

			  </script>

		";




	}else{
		echo" <script language='javascript'>
				$(function() { 
					$('#notify').click();
				});

			  </script>

		";
	}

	mysqli_close($connect);
?>

<input type="hidden" id="notify" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal1">
<input type="hidden" id="notify1" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal2">
			<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal1">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">×</span>
								<span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Edit Profile</h4>
						</div>
						<div class="modal-body">
							<p><i class="glyphicon glyphicon-ok-sign"></i> Edit Profile Complete!</p>
							
						</div>
						<div class="modal-footer">
							<a href="/FinalProject/UserAdmin/profile.php"><button type="button" class="btn btn-default" >Back</button></a>
							
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
							<h4 class="modal-title">Edit Profile</h4>
						</div>
						<div class="modal-body">
							<p><i class="glyphicon glyphicon-remove"></i> Can't Edit Profile!</p>
							
						</div>
						<div class="modal-footer">
							<a href="/FinalProject/UserAdmin/profile.php"><button type="button" class="btn btn-default" >Back</button></a>
							
							
						</div>
					</div> 
				</div> 
			</div> 