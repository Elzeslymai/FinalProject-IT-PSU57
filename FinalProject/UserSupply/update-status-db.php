<?php 
	
	require('Menu-side-Supply.php');

	$orderstatus;
	if(@$_POST['orderprepare'] != ""){
		$orderstatus = @$_POST['orderprepare'];
		
	}
	else if(@$_POST['ordership'] != ""){
		$orderstatus = @$_POST['ordership'];
		
	}
	else if(@$_POST['ordercomplete'] != ""){
		$orderstatus = @$_POST['ordercomplete'];
		
	}


    $connect = mysqli_connect("localhost","root","","hotelsupport");
	$sql = 'update order1 set status="'.$orderstatus.'" where order_id ='.$_POST['orderstatus'].'';
	$result = mysqli_query($connect,$sql);
	if(!$result){
		echo "<script>alert('Can't delete this order !! ');document.location='/FinalProject/UserSupply/order-status.php'</script>";
	}else{
		echo "<script>document.location='/FinalProject/UserSupply/order-status.php'</script>";
	}


	mysqli_close($connect);
?>