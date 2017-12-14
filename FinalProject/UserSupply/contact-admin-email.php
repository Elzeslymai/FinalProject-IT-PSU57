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

			   	$strTo = "champ_psu@outlook.co.th";

			    $strSubject = $_POST['subject'];

			    $strHeader = "Content-type: text/html; charset=UTF-8\n"; // or UTF-8 //

			    $strHeader .= "From: contact.hotelsup@gmail.com\nReply-To: champ_psu@outlook.co.th";

			    $strMessage = "";

			    $strMessage .= "<b>From : ".$_POST['name']."<br><br></b>";
			    $strMessage .= "<b>To : Website Administrator <br><br></b>";

			    $strMessage .= $_POST['message']."<br><br><br>";

			    
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
        ?>
 	<br>
 	<br>
 	<br>
 	
	<input type="hidden" class="btn btn-custom" data-toggle="modal" data-dismiss="modal" data-target="#forgetmodal1" id="notify">
	
	<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal1">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Contact Admin</h4>
			</div>
			<div class="modal-body">
				<p><i class="glyphicon glyphicon-ok-sign"></i>Message has Sended!!</p>
				
			</div>
			<div class="modal-footer">
				<a href="/FinalProject/UserHotel/contact-admin.php"><button type="button" class="btn btn-default" >Cancel</button></a>
				<a href="/FinalProject/UserHotel/home.php"><button type="button" class="btn btn-custom">Go to Home</button></a>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

 	
 </body>
 </html>