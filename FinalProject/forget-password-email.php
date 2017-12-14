<!DOCTYPE>
<html>
<head>
	<title>Hotel Support</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

	<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<link rel="shortcut icon" href="/FinalProject/images/icon.png" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<style type="text/css">
		.btn-custom {
		    color: #fff;
			background-color: #1fa67b;
		}
		.btn-custom:hover,
		.btn-custom:focus {
		    color: #fff;
		}
	</style>
</head>
<body >
 	<?php 

 		$connect = mysqli_connect("localhost","root","","hotelsupport");
 		$check = 0;
        $sql = 'select * from user ';
        $result = mysqli_query($connect,$sql);
        while($row = mysqli_fetch_assoc($result)){
        	if($row['U_username'] == $_POST['recovery-username'] && $row['U_email'] == $_POST['recovery-email']){
        		$check=1;
        		$password = "";
			    $charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
			    
			    for($i = 0; $i < 8; $i++)
			    {
			        $random_int = mt_rand();
			        $password .= $charset[$random_int % strlen($charset)];
			   	}

			   	$strTo = $_POST['recovery-email'];

			    $strSubject = "Your Account information.";

			    $strHeader = "Content-type: text/html; charset=UTF-8\n"; // or UTF-8 //

			    $strHeader .= "From: contact.hotelsup@gmail.com\nReply-To: ".$_POST['recovery-email']."";

			    $strMessage = "";

			    $strMessage .= "To : ".$row['U_company_name']."<br><br>";

			    $strMessage .= "สวัสดีครับ ทางเว็บไซต์ HotelSupport ได้รับคำร้องขอการเปลี่ยนรหัสผ่านใหม่ ท่านสามารถเข้าใช้งานระบบด้วยรหัสผ่านใหม่ที่ปรากฏด้านล่างนี้: <br><br><br>";

			    $strMessage .= "<b>Password : ".$password."<br><br><br></b>";
			    
			    $strMessage .= "หากท่านไม่ได้ทำการร้องขอเปลี่ยนรหัสผ่านกรุณาแจ้งผู้ดูแลโดยด่วนเพื่อความปลอดภัยของข้อขูลของท่าน<br>";

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

		    	$sql1 = 'update user set U_password="'.$password.'" where U_id = "'.$row['U_id'].'"';
        		$result1= mysqli_query($connect,$sql1);
        		if(!$result1){
        			echo" <script language='javascript'>
								$(function() { 
									$('#notify2').click();
								});

							  </script>
						";
						
        		}
        		else{
        			echo" <script language='javascript'>
								$(function() { 
									$('#notify').click();
								});

							  </script>
						";
						
        		}  	
        	}

        }
        if($check==0){
        	echo" <script language='javascript'>
						$(function() { 
							$('#notify1').click();
						});

					  </script>
				";
        }
        
        mysqli_close($connect);
 	?>
 	<br>
 	<br>
 	<br>
 	
	<input type="hidden" class="btn btn-custom" data-toggle="modal" data-dismiss="modal" data-target="#forgetmodal1" id="notify">
	<input type="hidden" class="btn btn-custom" data-toggle="modal" data-dismiss="modal" data-target="#forgetmodal2" id="notify1">
	<input type="hidden" class="btn btn-custom" data-toggle="modal" data-dismiss="modal" data-target="#forgetmodal3" id="notify2">

	<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal1">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Recovery password</h4>
			</div>
			<div class="modal-body">
				<p><i class="glyphicon glyphicon-ok-sign"></i>The New password will send to your email please checked!!</p>
				
			</div>
			<div class="modal-footer">
				<a href="/FinalProject/index.php"><button type="button" class="btn btn-default" >Cancel</button></a>
				<a href="https://www.hotmail.com"><button type="button" class="btn btn-custom">Go to Email</button></a>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal2">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Recovery password</h4>
			</div>
			<div class="modal-body">
				<p><i class="glyphicon glyphicon-remove-sign"></i>Username or Email was wrong!!!</p>
				
			</div>
			<div class="modal-footer">
				<a href="/FinalProject/index.php"><button type="button" class="btn btn-default" >Back</button></a>

			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal3">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Recovery password</h4>
			</div>
			<div class="modal-body">
				<p><i class="glyphicon glyphicon-remove-sign"></i>Can't Recovery password!!!</p>
				
			</div>
			<div class="modal-footer">
				<a href="/FinalProject/index.php"><button type="button" class="btn btn-default" >Back</button></a>

			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
 	
 </body>
 </html>