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
	$connect = mysqli_connect("localhost","root","","hotelsupport");
    $sql = 'select * from invoice where U_id="'.$_SESSION['username'].'"';
    $result = mysqli_query($connect,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$sql1 = 'select * from cart where U_id="'.$row['U_id'].'" and Supply_name="'.$row['Supply_name'].'"';
		$result1 = mysqli_query($connect,$sql1);
		while($row1 = mysqli_fetch_assoc($result1)){
			$sql2 = 'insert into item values (null,"'.$row['invoice_id'].'","'.$row['U_id'].'","'.$row1['P_id'].'","'.$row1['P_name'].'","'.$row1['P_grad'].'","'.$row1['P_price'].'","'.$row1['C_qty'].'")';
			$result2 = mysqli_query($connect,$sql2);
			if(!$result1){
				echo "<script>alert('Something wrong !!!');";
			}else{
				echo "<script>document.location='add-order-db2.php'</script>";
			}
		}

	}
	mysqli_close($connect);
?>
