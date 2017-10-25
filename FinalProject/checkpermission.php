<?php 
 		session_start();
 			if(empty($_SESSION['username'])){
 				echo "<script>alert('Please Login !! ');document.location='/FinalProject/login.php'</script>";
 			}else{
				if($_SESSION['status'] == 'Supply'){
					echo "<script>alert('Welcome: ".$_SESSION['username']."');</script>";
				}else{
					echo "<script>alert('You not have permission0123');document.location='/FinalProject/login.php'</script>";
				}
			}
 	?>