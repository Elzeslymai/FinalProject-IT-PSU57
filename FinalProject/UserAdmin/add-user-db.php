
<?php
	require('Menu-side-Admin.php');
 	
	$connect = mysqli_connect("localhost","root","","hotelsupport");
	$sql = 'insert into user values (null,"'.$_POST['Companyname'].'","'.$_POST['Username'].'","'.$_POST['Password'].'","'.$_POST['typeuser'].'","'.$_POST['email'].'","'.$_POST['Address'].'","'.$_POST['tell'].'","'.date("y-m-d").'")';
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
							<h4 class="modal-title">Add User</h4>
						</div>
						<div class="modal-body">
							<p><i class="glyphicon glyphicon-ok-sign"></i> Add User Complete!</p>
							
						</div>
						<div class="modal-footer">
							<a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" >Add Other</button></a>
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
							<p><i class="glyphicon glyphicon-remove"></i> Can't Add user to system!</p>
							
						</div>
						<div class="modal-footer">
							<a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" >Add Other</button></a>
							<a href="/FinalProject/UserAdmin/user-list.php"><button type="button" class="btn btn-info">Go to List</button></a>
							
						</div>
					</div> 
				</div> 
			</div> 
	


