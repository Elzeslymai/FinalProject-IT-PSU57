<?php
session_start();
?>
<?php
	require('Menu-side-Admin.php');

 	$target_dir = "uploads/".$_SESSION['username'];
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

	$filename = $_SESSION['username'].basename($_FILES["fileToUpload"]["name"]);

	$connect = mysqli_connect("localhost","root","","hotelsupport");
	$sql = 'insert into user values (null,"'.$_POST['Companyname'].'","'.$_POST['Username'].'","'.$_POST['Password'].'","'.$_POST['typeuser'].'","'.$_POST['email'].'","'.$_POST['Address'].'","'.$_POST['tell'].'","'.date("y-m-d").'","'.$filename.'")';
	$result = mysqli_query($connect,$sql);
	if(!$result){
		echo" <script language='javascript'>
				$(function() { 
					$('#notify1').click();
				});

			  </script>

		";
	}else{

		$strTo = $_POST['email'];

	    $strSubject = "Your Account information.";

	    $strHeader = "Content-type: text/html; charset=UTF-8\n"; // or UTF-8 //

	    $strHeader .= "From: contact.hotelsup@gmail.com\nReply-To: ".$_POST['email']."";

	    $strMessage = "";

	    $strMessage .= "To : ".$_POST['Companyname']."<br><br>";

	    $strMessage .= "สวัสดีครับ ทางเว็บไซต์ HotelSupport ได้ทำการยืนยันการสมัครสมาชิกของท่านเรียบร้อยแล้ว ท่านสามารถเข้าใช้งานเว็บไซต์โดยใช้ Username และ Password ตามที่ได้แสดงไว้ด้านล่างนี้: <br><br><br>";

	    $strMessage .= "Username : ".$_POST['Username']."<br>";

	    $strMessage .= "Password : ".$_POST['Password']."<br><br><br>";
	    
	    $strMessage .= "ท่านสามารถเปลี่ยน Username และ Password ได้หลังจากที่ได้เข้าสู่ระบบครั้งแรก โปรดเก็บข้อมูล Username และ Password ไว้เป็นความลับเพื่อความปลอดภัยในการใช้งานครับ<br>";

	    $strMessage .= "ขอบคุณครับ<br><br>";

	    $strMessage .= "--<br>";

	    $strMessage .= "<b>Best Regards,</b><br>";

	    $strMessage .= "<b>Juggrid Chetwichian (Champ)</b><br>";
	    $strMessage .= "<b>Customer Relationship Management,</b><br>";
	    $strMessage .= "<b>HotelSupport Co.,Ltd</b><br>";
	    $strMessage .= "<b>mobile: 0945966225</b><br>";
	    $strMessage .= "<b>E-mail: ContactHotelSupport@gmail.com</b><br><br>";
	    $strMessage .= "<b>Address: Prince of Songkla University Phuket Campus, College of Computing : Infomation Technology, 80 หมู่ 1 ถ.วิชิตสงคราม ต.กะทู้ อ.กะทู้ จ.ภูเก็ต 83120</b><br>";
	    $strMessage .= "<b>Join our  :</b> https://www.hotelsupport.000webhostapp.com<br><br><br>";
   
    	mail($strTo,$strSubject,$strMessage,$strHeader);

		echo" <script language='javascript'>
				$(function() { 
					$('#notify').click();
				});

			  </script>

		";
	}


	mysqli_close($connect);
?>

<input type="hidden" id="notify" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal1">
<input type="hidden" id="notify1" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal2">
			<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal1">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">×</span>
								<span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Add User</h4>
						</div>
						<div class="modal-body">
							<p><i class="glyphicon glyphicon-ok-sign"></i> Add User Complete!</p>
							
						</div>
						<div class="modal-footer">
							<a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" >Add Other</button></a>
							<a href="/FinalProject/UserAdmin/user-list.php"><button type="button" class="btn btn-info">Go to List</button></a>
						</div>
					</div> 
				</div> 
			</div> 

			<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal2">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">×</span>
								<span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Add User</h4>
						</div>
						<div class="modal-body">
							<p><i class="glyphicon glyphicon-remove"></i> Can't Add user to system!</p>
							
						</div>
						<div class="modal-footer">
							<a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" >Add Other</button></a>
							<a href="/FinalProject/UserAdmin/user-list.php"><button type="button" class="btn btn-info">Go to List</button></a>
							
						</div>
					</div> 
				</div> 
			</div> 
	


