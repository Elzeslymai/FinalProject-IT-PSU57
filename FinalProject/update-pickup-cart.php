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
    $sql1 = 'select DISTINCT Supply_name from cart where U_id="'.$_SESSION['username'].'"';
    $result1 = mysqli_query($connect,$sql1);
	while($row1 = mysqli_fetch_assoc($result1)){
		$name = $row1['Supply_name'];
		$date1 = @$_POST[$name];
		if($date1 != ""){
			$supplyname = $row1['Supply_name'];
			$date = $date1;
		}

	}
	mysqli_close($connect);


	$connect = mysqli_connect("localhost","root","","hotelsupport");
    $sql1 = 'update cart set Pick_up_date="'.$date.'" where Supply_name="'.$supplyname.'" and U_id="'.$_SESSION['username'].'"';
	$result1 = mysqli_query($connect,$sql1);
		if(!$result1){
			echo "<script>alert('Something wrong !!!');document.location='checkout.php'</script>";
		}else{
			echo "<script>document.location='checkout.php'</script>";
		}
	mysqli_close($connect);
?>