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
<?php
	require('Menu-side-Supply.php');
    $connect = mysqli_connect("localhost","root","","hotelsupport");
	$sql = 'update order1 set status="Accept" where order_id ='.$_POST['acceptorder'].'';
	$result = mysqli_query($connect,$sql);
	if(!$result){
		echo "<script>alert('Can't delete this order !! ');document.location='/FinalProject/UserSupply/order-status.php'</script>";
	}else{
		echo "<script>document.location='/FinalProject/UserSupply/order-status.php'</script>";
	}


	mysqli_close($connect);

?>