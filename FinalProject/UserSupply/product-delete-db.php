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
<?php
	require('Menu-side-Supply.php');
    $connect = mysqli_connect("localhost","root","","hotelsupport");
	$sql = 'delete from product where P_id ='.$_POST['productlist'].'';
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
							<h4 class="modal-title">Delete Product</h4>
						</div>
						<div class="modal-body">
							<p><i class="glyphicon glyphicon-ok-sign"></i> Delete Product Complete!</p>
							
						</div>
						<div class="modal-footer">
							<a href="/FinalProject/UserSupply/product.php"><button type="button" class="btn btn-info">Go to List</button></a>
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
							<h4 class="modal-title">Delete Product</h4>
						</div>
						<div class="modal-body">
							<p><i class="glyphicon glyphicon-remove"></i> Can't delete Product from System!</p>
							
						</div>
						<div class="modal-footer">
							<a href="/FinalProject/UserSupply/product.php"><button type="button" class="btn btn-info">Go to List</button></a>
							
						</div>
					</div> 
				</div> 
			</div> 
