<!DOCTYPE html>
<html>
<head>
</head>
<?php
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$connect = new mysqli("localhost","root","","hotelsupport");

	$sql = 'select * from user where U_username="'.$username.'" and U_password="'.$password.'"';
	$sql2 = 'select U_type from user where U_username="'.$username.'"';
	
	$query = $connect->query($sql);
	$result = $query->fetch_object();
	$obj = $query->fetch_object();
	session_start();
	$_SESSION['username'] = $id = $result->U_id;



	if(!$result){
		echo "<script>alert('Your username or password is wrong !!!');document.location='index.php'</script>";
	}else{
		$query2 = $connect->query($sql2);
		$result2 = $query2->fetch_object();
		$status = $result2->U_type;
		switch ($status) {
			case "Admin":
				$_SESSION['status'] = $status;
				echo "<script>document.location='/FinalProject/UserAdmin/home.php'</script>";
				break;
			case "Supply":
				$_SESSION['status'] = $status;
				echo "<script>document.location='/FinalProject/UserSupply/home.php'</script>";
				break;
			case "Hotel":
				$_SESSION['status'] = $status;
				echo "<script>document.location='/FinalProject/UserHotel/home.php'</script>";
                //echo $_SESSION['username'];
				break;
			
			default:
				header("Location:index.php");
				break;
		}
		
	}
	mysqli_close($connect);
?>
</html>