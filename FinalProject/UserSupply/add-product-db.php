
<?php
session_start();
echo $_SESSION['username'];
	require('Menu-side-Supply.php');
 	
	$connect = mysqli_connect("localhost","root","","hotelsupport");
	$sql = 'insert into product values (null,"'.$_SESSION['username'].'","'.$_POST['U_company_name'].'","'.$_POST['ProductName'].'","'.$_POST['Catagories'].'","'.$_POST['Grade'].'","'.$_POST['Price'].'","'.$_POST['Detail'].'","'.$_POST['shipment'].'","'.$_POST['Fee'].'","'.date("y-m-d").'")';
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
							<h4 class="modal-title">Add Product</h4>
						</div>
						<div class="modal-body">
							<p><i class="glyphicon glyphicon-ok-sign"></i> Add Product Complete!</p>
							
						</div>
						<div class="modal-footer">
							<a href="/FinalProject/UserSupply/add-product.php"><button type="button" class="btn btn-default" >Add Other</button></a>
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
							<h4 class="modal-title">Add Product</h4>
						</div>
						<div class="modal-body">
							<p><i class="glyphicon glyphicon-remove"></i> Can't Add Product to system!</p>
							
						</div>
						<div class="modal-footer">
							<a href="/FinalProject/UserSupply/add-product.php"><button type="button" class="btn btn-default" >Add Other</button></a>
							<a href="/FinalProject/UserSupply/product.php"><button type="button" class="btn btn-info">Go to List</button></a>
							
						</div>
					</div> 
				</div> 
			</div> 
	


