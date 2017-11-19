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
    $sql = 'select cart_id from cart where U_id="'.$_SESSION['username'].'"';
    $result = mysqli_query($connect,$sql);
    
    while($row = mysqli_fetch_assoc($result)){
    	$amout =  $row["cart_id"];
    	$qty1 = @$_POST[$amout];
    	if($qty1 != ""){
    		$cartID = $row["cart_id"];
    		$qty = $qty1;
    	}
    }
    mysqli_close($connect);
    echo $qty;
    echo $cartID;
    $connect = mysqli_connect("localhost","root","","hotelsupport");
    $sql1 = 'update cart set C_qty="'.$qty.'" where cart_id='.$cartID.'';
	$result1 = mysqli_query($connect,$sql1);
		if(!$result1){
			echo "<script>alert('Something wrong !!!');document.location='checkout.php'</script>";
		}else{
			echo "<script>document.location='checkout.php'</script>";
		}
	mysqli_close($connect);

    

	
?>