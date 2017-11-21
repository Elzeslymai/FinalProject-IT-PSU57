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
    $sql = 'delete from cart where U_id="'.$_SESSION['username'].'"';
    $result = mysqli_query($connect,$sql);
	if(!$result){
		echo "<script>alert('Something wrong !!!');";
	}else{
		echo "<script>document.location='invoice1.php'</script>";
	}

	mysqli_close($connect);
?>