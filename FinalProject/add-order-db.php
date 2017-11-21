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
    $sql = 'select DISTINCT Supply_name,U_id,Pick_up_date from cart where U_id="'.$_SESSION['username'].'"';
    $result = mysqli_query($connect,$sql);
	while($row = mysqli_fetch_assoc($result)){
		$sql1 = 'insert into invoice values(null,"'.$row['U_id'].'","'.$row['Supply_name'].'","'.date("m-d-y").'","'.$row['Pick_up_date'].'")';
		$result1 = mysqli_query($connect,$sql1);
		if(!$result1){
			echo "<script>alert('Something wrong !!!');";
		}else{
			echo "<script>document.location='add-order-db1.php'</script>";
		}
	}
	mysqli_close($connect);

?>