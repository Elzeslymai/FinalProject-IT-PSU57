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
<?php
	require('Menu-side-hotel.php');
    $connect = mysqli_connect("localhost","root","","hotelsupport");
	$sql = 'update order1 set status="Cancle" where order_id ='.$_POST['deleteorder'].'';
	$result = mysqli_query($connect,$sql);
	if(!$result){
		echo "<script>alert('Can't delete this order !! ');document.location='/FinalProject/UserHotel/order-status.php'</script>";
	}else{
		echo "<script>document.location='/FinalProject/UserHotel/order-status.php'</script>";
	}


	mysqli_close($connect);

?>