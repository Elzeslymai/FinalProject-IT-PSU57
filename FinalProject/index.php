<!DOCTYPE html>
<html>
<head>
	<title>Hotel Support</title>
	<link rel="shortcut icon" href="images/icon.png" />
	<link rel="stylesheet" href="css/bootstrap.css" >

	<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<style type="text/css">
		#login {
		    padding-top: 50px
		}
		#login .form-wrap {
		    width: 30%;
		    margin: 0 auto;
		}
		#login h1 {
		    color: #1fa67b;
		    font-size: 18px;
		    text-align: center;
		    font-weight: bold;
		    padding-bottom: 20px;
		}
		#login .form-group {
		    margin-bottom: 25px;
		}
		#login .checkbox {
		    margin-bottom: 20px;
		    position: relative;
		    -webkit-user-select: none;
		    -moz-user-select: none;
		    -ms-user-select: none;
		    -o-user-select: none;
		    user-select: none;
		}
		#login .checkbox.show:before {
		    content: '\e013';
		    color: #1fa67b;
		    font-size: 17px;
		    margin: 1px 0 0 3px;
		    position: absolute;
		    pointer-events: none;
		    font-family: 'Glyphicons Halflings';
		}
		#login .checkbox .character-checkbox {
		    width: 25px;
		    height: 25px;
		    cursor: pointer;
		    border-radius: 3px;
		    border: 1px solid #ccc;
		    vertical-align: middle;
		    display: inline-block;
		}
		#login .checkbox .label {
		    color: #6d6d6d;
		    font-size: 13px;
		    font-weight: normal;
		}
		#login .btn.btn-custom {
		    font-size: 14px;
			margin-bottom: 20px;
		}
		#login .forget {
		    font-size: 13px;
			text-align: center;
			display: block;
		}

		/*    --------------------------------------------------
			:: Inputs & Buttons
			-------------------------------------------------- */
		.form-control {
		    color: #212121;
		}
		.btn-custom {
		    color: #fff;
			background-color: #1fa67b;
		}
		.btn-custom:hover,
		.btn-custom:focus {
		    color: #fff;
		}

		/*    --------------------------------------------------
		    :: Footer
			-------------------------------------------------- */
		#footer {
		    color: #6d6d6d;
		    font-size: 12px;
		    text-align: center;
		}
		#footer p {
		    margin-bottom: 0;
		}
		#footer a {
		    color: inherit;
		}
	</style>

	<script type="text/javascript">
		function showPassword() {
    
		    var key_attr = $('#password').attr('type');
		    
		    if(key_attr != 'text') {
		        
		        $('.checkbox').addClass('show');
		        $('#password').attr('type', 'text');
		        
		    } else {
		        
		        $('.checkbox').removeClass('show');
		        $('#password').attr('type', 'password');
		        
		    }
		    
		}
	</script>
</head>
<body background="\FinalProject\images\login3.jpg" >
	<br><br><br><br><br>
	<section id="login">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
        	    <br>
                <h1>Log in to website for get more feature</h1>
                    <form action="Checkuser.php" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <p><span class="glyphicon glyphicon-user"></span> Username</p>
                            <input type="username" name="username" class="form-control" placeholder="Username or Email">
                        </div>
                        <div class="form-group">
                            <p><span class="glyphicon glyphicon-lock"></span> Password</p>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Show password</span>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                    </form>
                    <a href="javascript:;" class="forget" data-toggle="modal" data-target="#forgetmodal">Forgot your password?</a>
                    <hr>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal">
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
				<p>your username</p>
				<input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
				<p>Type your email account</p>
				<input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-custom" data-toggle="modal" data-dismiss="modal" data-target="#forgetmodal1">Recovery</button>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

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
				<p><i class="glyphicon glyphicon-ok-sign"></i>link to reset password send to your email</p>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a href="https://www.hotmail.com"><button type="button" class="btn btn-custom">Go to Email</button></a>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>Hotel Support © - 2017</p>
                <p>Powered by <strong><a href="http://leaderphotograph.azurewebsites.net/" target="_blank">Bigbody</a></strong></p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>