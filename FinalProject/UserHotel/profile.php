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
<!DOCTYPE>
<html>
<head>
	<title>Hotel Support</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="shortcut icon" href="/FinalProject/images/icon.png" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<style type="text/css">
 		#my_profile.single_page #heading {
		  background-image: none;
		}

		#my_profile .user_profile h2 {
		  width: 100%;
		  display: block;
		  margin-bottom: 10px;
		  border-bottom: 3px solid #1ab7ea;
		}

		#my_profile .user_profile p {
		  width: 100%;
		  display: block;
		  float: left;
		}

		#my_profile .user_profile label {
		  width: 120px;
		  float: left;
		  display: inline-block;
		  font-weight: bold;
		  line-height: 40px;
		}

		#my_profile .user_profile .current_profile h2 .edit-toggle {
		  float: right;
		  padding-top: 10px;
		  font-size: 15px;
		  font-weight: normal;
		  vertical-align: middle;
		}

		#my_profile .user_profile .current_profile h2 .edit-toggle:before {
		  font-family: 'FontAwesome';
		  content: "\f040";
		  padding-right: 5px;
		}

		#my_profile .user_profile .current_profile h2 .edit-toggle:hover {
		  cursor: pointer;
		}

		#my_profile .user_profile .current_profile label,
		#my_profile .user_profile .current_profile .current_data {
		  line-height: 30px;
		}

		#my_profile .user_profile .edit_profile {
		  display: none;
		}

		#my_profile .user_profile .address_input,
		#my_profile .user_profile .option_placeholder {
		  width: 320px;
		  height: 40px;
		  display: inline-block;
		  float: left;
		  padding: 0 10px;
		  font-size: 15px;
		  color: #999;
		  font-style: italic;
		  border: 1px solid #ccc;
		  -o-border-radius: 4px;
		  border-radius: 4px;
		  -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.15) inset;
		  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.15) inset;
		}

		#my_profile .user_profile .address_input:after,
		#my_profile .user_profile .option_placeholder:after {
		  font-family: 'FontAwesome';
		  font-size: 18px;
		  font-weight: bold;
		  content: "\F107";
		  color: #999;
		  float: right;
		  margin-top: -25px;
		  z-index: 0;
		}

		#my_profile .user_profile .address_input:focus,
		#my_profile .user_profile .option_placeholder:focus {
		  color: #555;
		  font-style: normal;
		}

		#my_profile .user_profile .address_input:hover:after,
		#my_profile .user_profile .option_placeholder:hover:after {
		  color: #09f;
		}

		#my_profile .user_profile .address_input.fixed_value,
		#my_profile .user_profile .option_placeholder.fixed_value {
		  font-style: italic;
		  color: #999;
		  background-color: #eee;
		  -webkit-box-shadow: none;
		  box-shadow: none;
		}

		#my_profile .user_profile .address_input.text_area,
		#my_profile .user_profile .option_placeholder.text_area {
		  min-height: 100px;
		}

		#my_profile .user_profile .address_input .option_list,
		#my_profile .user_profile .option_placeholder .option_list {
		  height: 30px;
		  margin-top: 5px;
		  padding: 0;
		  background: none;
		  border: none;
		  position: relative;
		  z-index: 2;
		  -webkit-appearance: menulist-text;
		  -moz-appearance: menulist-text;
		  appearance: menulist-text;
		  -o-border-radius: 0;
		  border-radius: 0;
		  -webkit-box-shadow: none;
		  box-shadow: none;
		}

		#my_profile .user_profile .option_placeholder {
		  font-style: normal;
		}

		#my_profile .user_profile .btn-edit,
		#my_profile .user_profile .btn-save,
		#my_profile .user_profile .btn-cancel {
		  margin-right: 15px;
		  padding: 10px 20px;
		  font-size: 15px;
		  color: #fff;
		  background-color: #1AB7EA;
		  border: 1px solid #1AB7EA;
		  -o-border-radius: 4px;
		  border-radius: 4px;
		}

		#my_profile .user_profile .btn-edit:focus,
		#my_profile .user_profile .btn-save:focus,
		#my_profile .user_profile .btn-cancel:focus {
		  outline: none;
		}

		#my_profile .user_profile .btn-edit:hover,
		#my_profile .user_profile .btn-save:hover {
		  cursor: pointer;
		  background-color: #1ab7ea;
		  border: 1px solid #1ab7ea;
		  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
		  -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.5);
		  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.5);
		}

		#my_profile .user_profile .btn-cancel {
		  background-color: #999;
		  border-color: #999;
		}

		#my_profile .user_profile .btn-cancel:hover {
		  cursor: pointer;
		  background-color: #777;
		  border: 1px solid #666;
		  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
		  -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.5);
		  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.5);
		}

		#my_profile .user_profile .btn-edit {
		  background-color: #999;
		  border-color: #999;
		}

		.th_lang #my_profile .btn-edit,
		.th_lang #my_profile .btn-save,
		.th_lang #my_profile .btn-cancel {
		  font-size: 120%;
		  padding: 7px 20px;
		}

		.th_lang #my_profile .current_profile h2 .edit-toggle {
		  font-size: 18px;
		}
 	</style>
</head>
<body >
 	<?php 
 		require('Menu-side-hotel.php');
 	?>
 	<br>
 	 <script type="text/javascript">
		jQuery(document).ready(function ($) {
		    // Edit profile toggle
		   	$('.edit-toggle').each(function () {
	      		$(this).click(function (e) {
					e.preventDefault();
				    $('.current_profile').toggle();
					$('.edit_profile').toggle();
		        });
		    });
		});
	</script>
    

    <div id="my_profile" class="single_page">
    <div id="content">
        <div class="wrapper col-sm-offset-1">
            <h1><span class="glyphicon glyphicon-user"></span>  PROFILE</h1>
            <div class="left_col col-sm-10 col-sm-offset-1">
                <div class="user_profile">
                	<form method="POST" action="profile-edit-db.php" name="form4" onSubmit="JavaScript:return fncSubmit();">
	                    <div id="ContentPlaceHolder1_dvCurrentProfile" class="current_profile " >

	                        <p style="padding-left: 0px; background-color: rgb(51, 153, 102); display: none;" class="profile-updated"></p><h2>&nbsp; <a class="edit-toggle">Edit Profile</a></h2>
	                        <br>
							<p class="col-sm-offset-3"><img src="/FinalProject/images/logo1.png" alt="" ></p>
							<br><br><br><br>
	                        <?php
								$connect = mysqli_connect("localhost","root","","hotelsupport");
								$sql = 'select * from user where U_id="'.$_SESSION['username'].'"';
								$result = mysqli_query($connect,$sql);
								while($row = mysqli_fetch_assoc($result)){
									echo '<p class="col-sm-offset-1"><label>Username.</label><span class="current_data col-sm-offset-1"><span id="ContentPlaceHolder1_litUsername">';
									echo $row['U_username'];
									echo'</span></span></p>
										<p class="col-sm-offset-1"><label>Company name.</label><span class="current_data col-sm-offset-1">';
									echo $row['U_company_name'];
									echo '</span></p>
										<p class="col-sm-offset-1"><label>Address.</label><span class="current_data col-sm-offset-1">';
									echo $row['U_address'];
									echo '</span></p>
										<p class="col-sm-offset-1"><label>Tell.</label><span class="current_data col-sm-offset-1">';
									echo $row['U_tell'];
									echo ' </span></p>';
								}
								 mysqli_close($connect);				
							?>
	                        <p class="btn-placeholder col-sm-offset-2">
	                            <label>&nbsp;</label>
	                            <input name="ctl00$ContentPlaceHolder1$btnEdit" type="button" id="ContentPlaceHolder1_btnEdit" class="buttons btn-edit edit-toggle" value="Edit Profile">
	                        </p>
	                    </div>

	                    <!--edit-->
	                    <div id="ContentPlaceHolder1_dvEditProfile" class="edit_profile">
													<h2>Edit Profile</h2>
													<br>
													<p class="col-sm-offset-3"><img src="/FinalProject/images/logo1.png" alt="" ></p>
													<br><br><br><br>
							<?php
								$connect = mysqli_connect("localhost","root","","hotelsupport");
								$sql = 'select * from user where U_username="'.$_SESSION['username'].'"';
								$result = mysqli_query($connect,$sql);
								while($row = mysqli_fetch_assoc($result)){
									echo '<p class="col-sm-offset-1"><label>Username.</label><input name="username" type="text" value="';
									echo $row['U_username'];
									echo'" id="ContentPlaceHolder1_txtUsername" class="address_input col-sm-offset-1"></p>
	                        			<p class="col-sm-offset-1"><label>Company name.</label><input name="company" type="text" value="';
									echo $row['U_company_name'];
									echo '" id="ContentPlaceHolder1_txtFirstname" class="address_input col-sm-offset-1"></p>
	                        			<p class="col-sm-offset-1"><label>Address.</label><input name="address" type="text" value="';
									echo $row['U_address'];
									echo '" id="ContentPlaceHolder1_txtLastname" class="address_input col-sm-offset-1"></p>
	                        			<p class="col-sm-offset-1"><label>Tell.</label><input name="tell" type="text" value="';
									echo $row['U_tell'];
									echo '" id="ContentPlaceHolder1_txtAddress" class="address_input col-sm-offset-1"></p>';
								}
								 mysqli_close($connect);				
							?>

							<script language="javascript">
		                        function fncSubmit()
		                        {   
		 
		                            if(document.form4.username.value == ""){
		                                $(function() { 
									        $('#notify1').click();
									    });
		                            	return false;

		                            }

		                            if(document.form4.company.value==""){
		                                $(function() { 
									        $('#notify2').click();
									    });
		                                return false;
		                            } 

		                            if(document.form4.address.value==""){
		                                $(function() { 
									        $('#notify3').click();
									    });
		                                return false;
		                            }

		                            if(document.form4.tell.value==""){
		                                $(function() { 
									        $('#notify4').click();
									    });
		                                return false;
		                            }
		                            document.form2.submit();
 
		                        }
		   					</script>

	                        <p class="btn-placeholder col-sm-offset-2">
	                            <label>&nbsp;</label>
	                            <input  type="button" id="ContentPlaceHolder1_btnCancel" class="buttons btn-cancel edit-toggle" value="Cancle">
	                            <input type="submit"  value="Confirm" id="ContentPlaceHolder1_btnSave" class="buttons btn-save">
	                        </p>
	                    </div>
                	</form>
                	<input type="hidden" id="notify1" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal2">
					<input type="hidden" id="notify2" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal3">
					<input type="hidden" id="notify3" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal4">
					<input type="hidden" id="notify4" value="test" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal5">

					<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal2">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">
										<span aria-hidden="true">×</span>
										<span class="sr-only">Close</span>
									</button>
									<h4 class="modal-title">Edit Profile</h4>
								</div>
								<div class="modal-body">
									<p><i class="glyphicon glyphicon-remove"></i> Please Check Username!</p>
									
								</div>
								<div class="modal-footer">
									<a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" data-dismiss="modal">close</button></a>
									
								</div>
							</div> 
						</div> 
					</div> 

					<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal3">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">
										<span aria-hidden="true">×</span>
										<span class="sr-only">Close</span>
									</button>
									<h4 class="modal-title">Edit Profile</h4>
								</div>
								<div class="modal-body">
									<p><i class="glyphicon glyphicon-remove"></i> Please Check Company name!</p>
									
								</div>
								<div class="modal-footer">
									<a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" data-dismiss="modal">close</button></a>
									
								</div>
							</div> 
						</div> 
					</div> 

					<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal4">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">
										<span aria-hidden="true">×</span>
										<span class="sr-only">Close</span>
									</button>
									<h4 class="modal-title">Edit Profile</h4>
								</div>
								<div class="modal-body">
									<p><i class="glyphicon glyphicon-remove"></i> Please Check Address!</p>
									
								</div>
								<div class="modal-footer">
									<a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" data-dismiss="modal">close</button></a>
									
								</div>
							</div> 
						</div> 
					</div> 

					<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal5">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">
										<span aria-hidden="true">×</span>
										<span class="sr-only">Close</span>
									</button>
									<h4 class="modal-title">Edit Profile</h4>
								</div>
								<div class="modal-body">
									<p><i class="glyphicon glyphicon-remove"></i> Please Check Tell!</p>
									
								</div>
								<div class="modal-footer">
									<a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" data-dismiss="modal">close</button></a>
									
								</div>
							</div> 
						</div> 
					</div> 
                </div>

            </div>

            
 </body>
 </html>