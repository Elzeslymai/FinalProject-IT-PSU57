
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script type="text/javascript">
	    function htmlbodyHeightUpdate(){
			var height3 = $( window ).height()
			var height1 = $('.nav').height()+50
			height2 = $('.main').height()
			if(height2 > height3){
				$('html').height(Math.max(height1,height3,height2)+10);
				$('body').height(Math.max(height1,height3,height2)+10);
			}
			else
			{
				$('html').height(Math.max(height1,height3,height2));
				$('body').height(Math.max(height1,height3,height2));
			}
			
		}
		$(document).ready(function () {
			htmlbodyHeightUpdate()
			$( window ).resize(function() {
				htmlbodyHeightUpdate()
			});
			$( window ).scroll(function() {
				height2 = $('.main').height()
	  			htmlbodyHeightUpdate()
			});
		});
	</script>



	<!--<style type="text/css">
	    body,html{
			height: 100%;
		}

		/* remove outer padding */
		.main .row{
			padding: 0px;
			margin: 0px;
		}

		/*Remove rounded coners*/

		nav.sidebar.navbar {
			border-radius: 0px;
			margin-top: 60px;
		}

		nav.sidebar, .main{
			-webkit-transition: margin 200ms ease-out;
		    -moz-transition: margin 200ms ease-out;
		    -o-transition: margin 200ms ease-out;
		    transition: margin 200ms ease-out;
		}

		/* Add gap to nav and right windows.*/
		.main{
			padding: 10px 10px 0 10px;
		}

		/* .....NavBar: Icon only with coloring/layout.....*/

		/*small/medium side display*/
		@media (min-width: 768px) {

			/*Allow main to be next to Nav*/
			.main{
				position: absolute;
				width: calc(100% - 40px); /*keeps 100% minus nav size*/
				margin-left: 40px;
				float: right;
			}

			/*lets nav bar to be showed on mouseover*/
			nav.sidebar:hover + .main{
				margin-left: 200px;
			}

			/*Center Brand*/
			nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
				margin-left: 0px;
			}
			/*Center Brand*/
			nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
				text-align: center;
				width: 100%;
				margin-left: 0px;
			}

			/*Center Icons*/
			nav.sidebar a{
				padding-right: 13px;
			}

			/*adds border top to first nav box */
			nav.sidebar .navbar-nav > li:first-child{
				border-top: 1px #e5e5e5 solid;
			}

			/*adds border to bottom nav boxes*/
			nav.sidebar .navbar-nav > li{
				border-bottom: 1px #e5e5e5 solid;
			}

			/* Colors/style dropdown box*/
			nav.sidebar .navbar-nav .open .dropdown-menu {
				position: static;
				float: none;
				width: auto;
				margin-top: 0;
				background-color: transparent;
				border: 0;
				-webkit-box-shadow: none;
				box-shadow: none;
			}

			/*allows nav box to use 100% width*/
			nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
				padding: 0 0px 0 0px;
			}

			/*colors dropdown box text */
			.navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
				color: #777;
			}

			/*gives sidebar width/height*/
			nav.sidebar{
				width: 200px;
				height: 100%;
				margin-left: -160px;
				float: left;
				z-index: 8000;
				margin-bottom: 0px;
			}

			/*give sidebar 100% width;*/
			nav.sidebar li {
				width: 100%;
			}

			/* Move nav to full on mouse over*/
			nav.sidebar:hover{
				margin-left: 0px;
			}
			/*for hiden things when navbar hidden*/
			.forAnimate{
				opacity: 0;
			}
		}

		/* .....NavBar: Fully showing nav bar..... */

		@media (min-width: 1330px) {

			/*Allow main to be next to Nav*/
			.main{
				width: calc(100% - 200px); /*keeps 100% minus nav size*/
				margin-left: 200px;
			}

			/*Show all nav*/
			nav.sidebar{
				margin-left: 0px;
				float: left;
			}
			/*Show hidden items on nav*/
			nav.sidebar .forAnimate{
				opacity: 1;
			}
		}

		nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
			color: #CCC;
			background-color: transparent;
		}

		nav:hover .forAnimate{
			opacity: 1;
		}
		section{
			padding-left: 15px;
		}
	   
		/* Top Navigation 
		.top-nav {
		    padding: 0 15px;
		}
		.top-nav>li {
		    display: inline-block;
		    float: left;
		}
		.top-nav>li>a {
		    padding-top: 20px;
		    padding-bottom: 20px;
		    line-height: 20px;
		    color: #fff;
		}*/
	</style>
	-->
	<style type="text/css">
		@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
				@media(min-width:768px) {
			    body {
			        margin-top: 50px;
			    }
			    /*html, body, #wrapper, #page-wrapper {height: 100%; overflow: hidden;}*/
			}

			#wrapper {
			    padding-left: 0;    
			}

			#page-wrapper {
			    width: 100%;        
			    padding: 0;
			    background-color: #fff;
			}

			@media(min-width:768px) {
			    #wrapper {
			        padding-left: 225px;
			    }

			    #page-wrapper {
			        padding: 22px 10px;
			    }
			}

			/* Top Navigation */

			.top-nav {
			    padding: 0 15px;
			}

			.top-nav>li {
			    display: inline-block;
			    float: left;
			}

			.top-nav>li>a {
			    padding-top: 20px;
			    padding-bottom: 20px;
			    line-height: 20px;
			    color: #fff;
			}

			.top-nav>li>a:hover,
			.top-nav>li>a:focus,
			.top-nav>.open>a,
			.top-nav>.open>a:hover,
			.top-nav>.open>a:focus {
			    color: #fff;
			    background-color: #1a242f;
			}

			.top-nav>.open>.dropdown-menu {
			    float: left;
			    position: absolute;
			    margin-top: 0;
			    /*border: 1px solid rgba(0,0,0,.15);*/
			    border-top-left-radius: 0;
			    border-top-right-radius: 0;
			    background-color: #fff;
			    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
			    box-shadow: 0 6px 12px rgba(0,0,0,.175);
			}

			.top-nav>.open>.dropdown-menu>li>a {
			    white-space: normal;
			}

			/* Side Navigation */

			@media(min-width:768px) {
			    .side-nav {
			        position: fixed;
			        top: 60px;
			        left: 225px;
			        width: 225px;
			        margin-left: -225px;
			        border: none;
			        border-radius: 0;
			        border-top: 1px rgba(0,0,0,.5) solid;
			        overflow-y: auto;
			        background-color: #222;
			        /*background-color: #5A6B7D;*/
			        bottom: 0;
			        overflow-x: hidden;
			        padding-bottom: 40px;
			    }

			    .side-nav>li>a {
			        width: 225px;
			        border-bottom: 1px rgba(0,0,0,.3) solid;
			    }

			    .side-nav li a:hover,
			    .side-nav li a:focus {
			        outline: none;
			        background-color: #1a242f !important;
			    }
			}

			.side-nav>li>ul {
			    padding: 0;
			    border-bottom: 1px rgba(0,0,0,.3) solid;
			}

			.side-nav>li>ul>li>a {
			    display: block;
			    padding: 10px 15px 10px 38px;
			    text-decoration: none;
			    /*color: #999;*/
			    color: #fff;    
			}

			.side-nav>li>ul>li>a:hover {
			    color: #fff;
			}

			.navbar .nav > li > a > .label {
			  -webkit-border-radius: 50%;
			  -moz-border-radius: 50%;
			  border-radius: 50%;
			  position: absolute;
			  top: 14px;
			  right: 6px;
			  font-size: 10px;
			  font-weight: normal;
			  min-width: 15px;
			  min-height: 15px;
			  line-height: 1.0em;
			  text-align: left;
			  padding: 2px;
			}

			.navbar .nav > li > a:hover > .label {
			  top: 10px;
			}

			.navbar-brand {
			    padding: 5px 15px;
			}
	</style>
</head>
<body background="\FinalProject\images\bg1.png"><!--
 	<nav class="navbar navbar-inverse sidebar" role="navigation">
	    <div class="container-fluid">
			<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class=""><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
					<li ><a href="#">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
					<li ><a href="#">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
						<ul class="dropdown-menu forAnimate" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
					<li><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
					<li ><a href="#">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
					<li ><a href="#">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
						<ul class="dropdown-menu forAnimate" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>-->
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">
                <img src="/FinalProject/images/logo.png" alt="LOGO" style="height: 50px; width: 200px;">
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="add-product.php" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="glyphicon glyphicon-plus-sign"> Add Product</i>
                </a>
            </li>  
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Supply User <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="edit-profile.php"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="edit-password.php"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="/FinalProject/Logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class=""><a href="home.php">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                <li ><a href="profile.php">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
				<li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1">Product <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-apple"></span></a>
                    <ul id="submenu-1" class="collapse">
                        <li><a href="add-product.php">Add Product</a></li>
                        <li><a href="product.php">Product List</a></li>
						
                    </ul>
                </li>
				<li ><a href="order-list.php">Order List<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt"></span></a></li>
				<li ><a href="order-status.php">Order Status<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-check"></span></a></li>
				<li ><a href="invoice-bill.php">Invoice Bill<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-usd"></span></a></li>
               <li class=""><a href="order-history.php">Order History<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-time"></span></a></li>
				<li ><a href="contact-admin.php">Contact Admin<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
				<!--<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>-->
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="profile.php">Edit Profile</a></li>
                        <li><a href="edit-password.php">Change Password</a></li>
						
                    </ul>
                </li>
                <li class=""><a href="/FinalProject/Logout.php">Log out<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-off"></span></a></li>
				
            </ul>
        </div>
        
    </nav>
    		
    
</body>
</html>