<?php 
	session_start();
	$connect = mysqli_connect("localhost","root","","hotelsupport");
    $sql = 'select * from invoice where U_id="'.$_SESSION['username'].'"';
    $result = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_assoc($result)){
   		$invoicenumber = str_pad($row['invoice_id'], 7, "0", STR_PAD_LEFT);

   		$sql1 = 'insert into order1 values(null,"'.$row['U_id'].'","'.$row['date'].'","Wait for Accept","'.$row['Supply_name'].'","'.$invoicenumber.'")';
		$result1 = mysqli_query($connect,$sql1);
		if(!$result1){
			echo "<script>alert('Something wrong !!!');";
		}else{
			
		}

    }
    mysqli_close($connect);

    $connect = mysqli_connect("localhost","root","","hotelsupport");
    $sql = 'delete from invoice where U_id="'.$_SESSION['username'].'"';
    $result = mysqli_query($connect,$sql);
	if(!$result){
		echo "<script>alert('Something wrong !!!');";
	}else{
		echo "<script>document.location='/FinalProject/UserHotel/order-status.php'</script>";
	}
?>