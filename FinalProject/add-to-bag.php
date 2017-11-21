<?php 
 		
 		session_start();
 			if(empty($_SESSION['username'])){
 				echo "<script>alert('Please Login !! ');document.location='/FinalProject/login.php'</script>";
 			}else{
				if($_SESSION['status'] == 'Hotel'){
					
				}else{
					echo "<script>alert('You not have permission');document.location='/FinalProject/login.php'</script>";
				}
			}
?>
<?php 
  	require('header.php');
  	require('Menu-side.php');
	
	$Productid = $_POST['productid'];


	$connect = mysqli_connect("localhost","root","","hotelsupport");
	$sql = 'select * from product where P_id = '.$_POST['productid'].'';
	$result = mysqli_query($connect,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$id = $_SESSION['username'];
		$supplyname = $row['U_company_name'];
		$Pname = $row['P_name'];
		$Pid = $row['P_id'];
		$Pprice = $row['P_price'];
		$Pfee = $row['P_fee'];
		$Pgrad = $row['P_grade'];
		

		$sql1= 'insert into cart values(null,"'.$id.'","'.$supplyname.'","'.$Pid.'","'.$Pname.'","'.$Pgrad.'","'.$Pprice.'","'.$Pfee.'","1","none")';

		$result1 = mysqli_query($connect,$sql1);
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
							<h4 class="modal-title">Add to Cart</h4>
						</div>
						<div class="modal-body">
							<p><i class="glyphicon glyphicon-ok-sign"></i> Add To Cart Complete!</p>
							
						</div>
						<div class="modal-footer">
							<a href="shop.php"><button type="button" class="btn btn-default" >Add Other</button></a>
							<a href="checkout.php"><button type="button" class="btn btn-info">Go to Shopping Bag</button></a>
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