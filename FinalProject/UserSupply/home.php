<?php 
 		
 		session_start();
 			if(empty($_SESSION['username'])){
 				echo "<script>alert('Please Login !! ');document.location='/FinalProject/login.php'</script>";
 			}else{
				if($_SESSION['status'] == 'Supply'){
					
				}else{
					echo "<script>alert('You not have permission :".$_SESSION['status']."');document.location='/FinalProject/login.php'</script>";
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
		.tiles-heading,
		.tiles-body,
		.tiles-footer {
		  -webkit-transition: 0.05s ease-in;
		  -o-transition: 0.05s ease-in;
		  transition: 0.05s ease-in;
		}
		.info-tiles,
		.shortcut-tiles {
		  margin: 0px 0px 20px;
		  display: block;
		  border-radius: 3px;
		}
		a.info-tiles,
		a.shortcut-tiles {
		  background: none;
		}
		.info-tiles .tiles-heading {
		  letter-spacing: 0.1em;
		  padding: 6px 10px;
		  border-top-right-radius: 3px;
		  border-top-left-radius: 3px;
		  text-transform: uppercase;
		  text-align: center;
		  font-size: 12px;
		}
		.info-tiles .tiles-heading .pull-right {
		  -webkit-transition: 0.06s ease-in;
		  -o-transition: 0.06s ease-in;
		  transition: 0.06s ease-in;
		  color: rgba(255, 255, 255, 0.4);
		}
		.info-tiles .tiles-heading .pull-right .sparkline-block {
		  font-size: 0;
		  padding: 2px 0;
		}
		.info-tiles .tiles-body {
		  font-size: 36px;
		  border-bottom-right-radius: 3px;
		  border-bottom-left-radius: 3px;
		}
		.info-tiles .tiles-body .text-centered {
		  position: relative;
		  text-align: center;
		}
		.info-tiles .tiles-body .text-centered .easypiechart {
		  margin: 10px auto;
		  height: 80px;
		  line-height: 80px;
		  width: 80px;
		}
		.info-tiles .tiles-body .text-centered .easypiechart .percent {
		  width: 80px;
		  line-height: 80px;
		  font-size: 17px;
		  font-weight: 300;
		  letter-spacing: 0.1em;
		  text-transform: uppercase;
		  color: #fff;
		}
		.info-tiles .tiles-body .text-centered .info-sparkline {
		  font-size: 0;
		  margin: 15px 0;
		}
		.info-tiles .tiles-body .text-centered i {
		  position: absolute;
		  margin: auto;
		  top: -5px;
		  left: -5px;
		  color: rgba(255, 255, 255, 0.15);
		}
		.info-tiles .tiles-body .text-centered i:hover {
		  color: rgba(255, 255, 255, 0.15);
		}
		.info-tiles .tiles-body .text-centered .info-text {
		  font-size: 36px;
		  height: 50px;
		  line-height: 50px;
		  color: #fff;
		}
		.info-tiles .tiles-body .text-centered .info-text .superscript {
		  position: relative;
		  font-size: 18px;
		  top: -16px;
		  color: rgba(255, 255, 255, 0.7);
		}
		.info-tiles .tiles-body .text-centered .info-text .subscript {
		  position: relative;
		  font-size: 18px;
		  top: 0px;
		  color: rgba(255, 255, 255, 0.7);
		}
		.info-tiles .tiles-body .text-centered .info-text-bottom {
		  font-size: 12px;
		  line-height: 20px;
		  height: 20px;
		  color: rgba(255, 255, 255, 0.7);
		}
		.info-tiles .tiles-body-alt {
		  border-bottom-right-radius: 0;
		  border-bottom-left-radius: 0;
		}
		.info-tiles.has-footer .tiles-body {
		  border-bottom-right-radius: 0;
		  border-bottom-left-radius: 0;
		}
		.info-tiles .tiles-body-alt,
		.info-tiles .tiles-body {
		  padding: 10px 20px;
		  font-weight: 300;
		}
		.info-tiles .tiles-body-alt .subscript,
		.info-tiles .tiles-body .subscript {
		  position: relative;
		  font-size: 18px;
		  top: 0px;
		  color: rgba(255, 255, 255, 0.7);
		}
		.info-tiles .tiles-body-alt .sparkline,
		.info-tiles .tiles-body .sparkline {
		  width: 100px;
		  margin: 0 auto;
		  padding: 0px;
		}
		.info-tiles .tiles-body-alt .text-top,
		.info-tiles .tiles-body .text-top {
		  vertical-align: super;
		  font-size: 24px;
		}
		.info-tiles .tiles-body-alt .text-smallcaps,
		.info-tiles .tiles-body .text-smallcaps {
		  font-variant: small-caps;
		}
		.info-tiles .tiles-body-alt i,
		.info-tiles .tiles-body i {
		  font-size: 36px;
		  color: rgba(255, 255, 255, 0.4);
		  -webkit-transition: 0.06s ease-in;
		  -o-transition: 0.06s ease-in;
		  transition: 0.06s ease-in;
		}
		.info-tiles .tiles-body-alt > i,
		.info-tiles .tiles-body > i {
		  position: absolute;
		  font-size: 36px;
		}
		.info-tiles .tiles-body-alt div + small,
		.info-tiles .tiles-body div + small {
		  font-size: 14px;
		  text-align: center;
		  display: block;
		  font-weight: 400;
		  color: rgba(255, 255, 255, 0.7);
		  margin-top: -7px;
		  margin-bottom: 4px;
		}
		.info-tiles .tiles-footer {
		  color: #fff;
		  font-size: 12px;
		  color: rgba(255, 255, 255, 0.4);
		  padding: 6px 10px;
		  border-bottom-right-radius: 3px;
		  border-bottom-left-radius: 3px;
		}
		.info-tiles .tiles-footer .pull-right .sparkline-block {
		  font-size: 0;
		  padding: 2px 0;
		}
		.info-tiles:hover {
		  text-decoration: none;
		}
		.info-tiles:hover i {
		  color: #ffffff;
		}
		.info-tiles:hover .text-sparkline i {
		  color: #ffffff;
		}
		.info-tiles:hover .tiles-footer .percent-change {
		  color: #fff;
		}
		.info-tiles:hover .tiles-heading .pull-right {
		  color: #ffffff;
		}
		.shortcut-tiles .tiles-body {
		  padding: 10px 10px 0px 10px;
		  font-size: 36px;
		  line-height: 35px;
		  border-top-right-radius: 3px;
		  border-top-left-radius: 3px;
		}
		.shortcut-tiles .tiles-body i {
		  font-size: 32px;
		  color: rgba(255, 255, 255, 0.6);
		  -webkit-transition: 0.06s ease-in;
		  -o-transition: 0.06s ease-in;
		  transition: 0.06s ease-in;
		}
		.shortcut-tiles .tiles-body .pull-right {
		  margin-top: -3px;
		  line-height: 0;
		}
		.shortcut-tiles .tiles-body .pull-right .badge {
		  background-color: #000000;
		  background-color: rgba(0, 0, 0, 0.3);
		  zoom: 1;
		  background-color: transparent\9;
		  -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#4d000000, endColorstr=#4d000000)";
		  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#4d000000, endColorstr=#4d000000);
		}
		.shortcut-tiles .tiles-footer {
		  text-transform: none;
		  text-align: right;
		  padding: 7px 10px;
		  letter-spacing: 0.1em;
		  font-size: 12px;
		  text-transform: uppercase;
		  border-bottom-right-radius: 3px;
		  border-bottom-left-radius: 3px;
		}
		.shortcut-tiles:hover {
		  text-decoration: none;
		}
		.shortcut-tiles:hover i {
		  color: #ffffff;
		}
		.info-tiles.tiles-info {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-info .tiles-heading {
		  background: #58cbc2;
		}
		.info-tiles.tiles-info .tiles-body {
		  background: #3bbfb4;
		}
		.info-tiles.tiles-info .tiles-body-alt {
		  background: #3bbfb4;
		}
		.info-tiles.tiles-info .tiles-footer {
		  background: #36afa5;
		}
		.info-tiles.tiles-info:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-info:hover .tiles-heading {
		  background: #40c4b9;
		}
		.info-tiles.tiles-info:hover .tiles-body {
		  background: #35aca2;
		}
		.info-tiles.tiles-info:hover .tiles-body-alt {
		  background: #35aca2;
		}
		.info-tiles.tiles-info:hover .tiles-footer {
		  background: #309c93;
		}
		.info-tiles.tiles-success {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-success .tiles-heading {
		  background: #4cd787;
		}
		.info-tiles.tiles-success .tiles-body {
		  background: #2ecc71;
		}
		.info-tiles.tiles-success .tiles-body-alt {
		  background: #2ecc71;
		}
		.info-tiles.tiles-success .tiles-footer {
		  background: #2abb68;
		}
		.info-tiles.tiles-success:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-success:hover .tiles-heading {
		  background: #33d176;
		}
		.info-tiles.tiles-success:hover .tiles-body {
		  background: #29b765;
		}
		.info-tiles.tiles-success:hover .tiles-body-alt {
		  background: #29b765;
		}
		.info-tiles.tiles-success:hover .tiles-footer {
		  background: #26a75c;
		}
		.info-tiles.tiles-danger {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-danger .tiles-heading {
		  background: #eb6d60;
		}
		.info-tiles.tiles-danger .tiles-body {
		  background: #e74c3c;
		}
		.info-tiles.tiles-danger .tiles-body-alt {
		  background: #e74c3c;
		}
		.info-tiles.tiles-danger .tiles-footer {
		  background: #e53b2a;
		}
		.info-tiles.tiles-danger:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-danger:hover .tiles-heading {
		  background: #e85445;
		}
		.info-tiles.tiles-danger:hover .tiles-body {
		  background: #e43725;
		}
		.info-tiles.tiles-danger:hover .tiles-body-alt {
		  background: #e43725;
		}
		.info-tiles.tiles-danger:hover .tiles-footer {
		  background: #da2d1b;
		}
		.info-tiles.tiles-warning {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-warning .tiles-heading {
		  background: #f3cd36;
		}
		.info-tiles.tiles-warning .tiles-body {
		  background: #f1c40f;
		}
		.info-tiles.tiles-warning .tiles-body-alt {
		  background: #f1c40f;
		}
		.info-tiles.tiles-warning .tiles-footer {
		  background: #dfb50d;
		}
		.info-tiles.tiles-warning:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-warning:hover .tiles-heading {
		  background: #f2c619;
		}
		.info-tiles.tiles-warning:hover .tiles-body {
		  background: #dab10d;
		}
		.info-tiles.tiles-warning:hover .tiles-body-alt {
		  background: #dab10d;
		}
		.info-tiles.tiles-warning:hover .tiles-footer {
		  background: #c7a10c;
		}
		.info-tiles.tiles-primary {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-primary .tiles-heading {
		  background: #57aae1;
		}
		.info-tiles.tiles-primary .tiles-body {
		  background: #3498db;
		}
		.info-tiles.tiles-primary .tiles-body-alt {
		  background: #3498db;
		}
		.info-tiles.tiles-primary .tiles-footer {
		  background: #268fd5;
		}
		.info-tiles.tiles-primary:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-primary:hover .tiles-heading {
		  background: #3d9cdd;
		}
		.info-tiles.tiles-primary:hover .tiles-body {
		  background: #258cd1;
		}
		.info-tiles.tiles-primary:hover .tiles-body-alt {
		  background: #258cd1;
		}
		.info-tiles.tiles-primary:hover .tiles-footer {
		  background: #2280bf;
		}
		.info-tiles.tiles-inverse {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-inverse .tiles-heading {
		  background: #abb8b9;
		}
		.info-tiles.tiles-inverse .tiles-body {
		  background: #95a5a6;
		}
		.info-tiles.tiles-inverse .tiles-body-alt {
		  background: #95a5a6;
		}
		.info-tiles.tiles-inverse .tiles-footer {
		  background: #8a9c9d;
		}
		.info-tiles.tiles-inverse:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-inverse:hover .tiles-heading {
		  background: #9baaab;
		}
		.info-tiles.tiles-inverse:hover .tiles-body {
		  background: #87999a;
		}
		.info-tiles.tiles-inverse:hover .tiles-body-alt {
		  background: #87999a;
		}
		.info-tiles.tiles-inverse:hover .tiles-footer {
		  background: #7c9091;
		}
		.info-tiles.tiles-midnightblue {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-midnightblue .tiles-heading {
		  background: #435d78;
		}
		.info-tiles.tiles-midnightblue .tiles-body {
		  background: #34495e;
		}
		.info-tiles.tiles-midnightblue .tiles-body-alt {
		  background: #34495e;
		}
		.info-tiles.tiles-midnightblue .tiles-footer {
		  background: #2d3f51;
		}
		.info-tiles.tiles-midnightblue:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-midnightblue:hover .tiles-heading {
		  background: #384e65;
		}
		.info-tiles.tiles-midnightblue:hover .tiles-body {
		  background: #2b3c4e;
		}
		.info-tiles.tiles-midnightblue:hover .tiles-body-alt {
		  background: #2b3c4e;
		}
		.info-tiles.tiles-midnightblue:hover .tiles-footer {
		  background: #243240;
		}
		.info-tiles.tiles-sky {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-sky .tiles-heading {
		  background: #a4d4ed;
		}
		.info-tiles.tiles-sky .tiles-body {
		  background: #82c4e6;
		}
		.info-tiles.tiles-sky .tiles-body-alt {
		  background: #82c4e6;
		}
		.info-tiles.tiles-sky .tiles-footer {
		  background: #71bce3;
		}
		.info-tiles.tiles-sky:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-sky:hover .tiles-heading {
		  background: #8ac8e8;
		}
		.info-tiles.tiles-sky:hover .tiles-body {
		  background: #6dbae2;
		}
		.info-tiles.tiles-sky:hover .tiles-body-alt {
		  background: #6dbae2;
		}
		.info-tiles.tiles-sky:hover .tiles-footer {
		  background: #5cb2de;
		}
		.info-tiles.tiles-orange {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-orange .tiles-heading {
		  background: #ea9347;
		}
		.info-tiles.tiles-orange .tiles-body {
		  background: #e67e22;
		}
		.info-tiles.tiles-orange .tiles-body-alt {
		  background: #e67e22;
		}
		.info-tiles.tiles-orange .tiles-footer {
		  background: #db7419;
		}
		.info-tiles.tiles-orange:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-orange:hover .tiles-heading {
		  background: #e7832b;
		}
		.info-tiles.tiles-orange:hover .tiles-body {
		  background: #d67118;
		}
		.info-tiles.tiles-orange:hover .tiles-body-alt {
		  background: #d67118;
		}
		.info-tiles.tiles-orange:hover .tiles-footer {
		  background: #c46816;
		}
		.info-tiles.tiles-indigo {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-indigo .tiles-heading {
		  background: #9180c8;
		}
		.info-tiles.tiles-indigo .tiles-body {
		  background: #7863bc;
		}
		.info-tiles.tiles-indigo .tiles-body-alt {
		  background: #7863bc;
		}
		.info-tiles.tiles-indigo .tiles-footer {
		  background: #6c55b6;
		}
		.info-tiles.tiles-indigo:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-indigo:hover .tiles-heading {
		  background: #7e6abf;
		}
		.info-tiles.tiles-indigo:hover .tiles-body {
		  background: #6951b4;
		}
		.info-tiles.tiles-indigo:hover .tiles-body-alt {
		  background: #6951b4;
		}
		.info-tiles.tiles-indigo:hover .tiles-footer {
		  background: #5f48a9;
		}
		.info-tiles.tiles-green {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-green .tiles-heading {
		  background: #52cda0;
		}
		.info-tiles.tiles-green .tiles-body {
		  background: #37bf8d;
		}
		.info-tiles.tiles-green .tiles-body-alt {
		  background: #37bf8d;
		}
		.info-tiles.tiles-green .tiles-footer {
		  background: #32af81;
		}
		.info-tiles.tiles-green:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-green:hover .tiles-heading {
		  background: #3ac693;
		}
		.info-tiles.tiles-green:hover .tiles-body {
		  background: #31ab7e;
		}
		.info-tiles.tiles-green:hover .tiles-body-alt {
		  background: #31ab7e;
		}
		.info-tiles.tiles-green:hover .tiles-footer {
		  background: #2d9b73;
		}
		.info-tiles.tiles-blue {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-blue .tiles-heading {
		  background: #72a7d3;
		}
		.info-tiles.tiles-blue .tiles-body {
		  background: #5394c9;
		}
		.info-tiles.tiles-blue .tiles-body-alt {
		  background: #5394c9;
		}
		.info-tiles.tiles-blue .tiles-footer {
		  background: #438ac4;
		}
		.info-tiles.tiles-blue:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-blue:hover .tiles-heading {
		  background: #5b99cb;
		}
		.info-tiles.tiles-blue:hover .tiles-body {
		  background: #4088c3;
		}
		.info-tiles.tiles-blue:hover .tiles-body-alt {
		  background: #4088c3;
		}
		.info-tiles.tiles-blue:hover .tiles-footer {
		  background: #397db5;
		}
		.info-tiles.tiles-magenta {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-magenta .tiles-heading {
		  background: #eb6084;
		}
		.info-tiles.tiles-magenta .tiles-body {
		  background: #e73c68;
		}
		.info-tiles.tiles-magenta .tiles-body-alt {
		  background: #e73c68;
		}
		.info-tiles.tiles-magenta .tiles-footer {
		  background: #e52a5a;
		}
		.info-tiles.tiles-magenta:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-magenta:hover .tiles-heading {
		  background: #e8456f;
		}
		.info-tiles.tiles-magenta:hover .tiles-body {
		  background: #e42556;
		}
		.info-tiles.tiles-magenta:hover .tiles-body-alt {
		  background: #e42556;
		}
		.info-tiles.tiles-magenta:hover .tiles-footer {
		  background: #da1b4c;
		}
		.info-tiles.tiles-purple {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-purple .tiles-heading {
		  background: #e667bb;
		}
		.info-tiles.tiles-purple .tiles-body {
		  background: #e044ab;
		}
		.info-tiles.tiles-purple .tiles-body-alt {
		  background: #e044ab;
		}
		.info-tiles.tiles-purple .tiles-footer {
		  background: #dd33a3;
		}
		.info-tiles.tiles-purple:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-purple:hover .tiles-heading {
		  background: #e14daf;
		}
		.info-tiles.tiles-purple:hover .tiles-body {
		  background: #dc2ea1;
		}
		.info-tiles.tiles-purple:hover .tiles-body-alt {
		  background: #dc2ea1;
		}
		.info-tiles.tiles-purple:hover .tiles-footer {
		  background: #d32397;
		}
		.info-tiles.tiles-brown {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-brown .tiles-heading {
		  background: #d44e40;
		}
		.info-tiles.tiles-brown .tiles-body {
		  background: #c0392b;
		}
		.info-tiles.tiles-brown .tiles-body-alt {
		  background: #c0392b;
		}
		.info-tiles.tiles-brown .tiles-footer {
		  background: #af3427;
		}
		.info-tiles.tiles-brown:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-brown:hover .tiles-heading {
		  background: #c83b2d;
		}
		.info-tiles.tiles-brown:hover .tiles-body {
		  background: #ab3326;
		}
		.info-tiles.tiles-brown:hover .tiles-body-alt {
		  background: #ab3326;
		}
		.info-tiles.tiles-brown:hover .tiles-footer {
		  background: #9a2e23;
		}
		.info-tiles.tiles-grape {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-grape .tiles-heading {
		  background: #919bad;
		}
		.info-tiles.tiles-grape .tiles-body {
		  background: #7a869c;
		}
		.info-tiles.tiles-grape .tiles-body-alt {
		  background: #7a869c;
		}
		.info-tiles.tiles-grape .tiles-footer {
		  background: #6e7b93;
		}
		.info-tiles.tiles-grape:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-grape:hover .tiles-heading {
		  background: #808ba0;
		}
		.info-tiles.tiles-grape:hover .tiles-body {
		  background: #6c7991;
		}
		.info-tiles.tiles-grape:hover .tiles-body-alt {
		  background: #6c7991;
		}
		.info-tiles.tiles-grape:hover .tiles-footer {
		  background: #636f85;
		}
		.info-tiles.tiles-toyo {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-toyo .tiles-heading {
		  background: #677fa4;
		}
		.info-tiles.tiles-toyo .tiles-body {
		  background: #556b8d;
		}
		.info-tiles.tiles-toyo .tiles-body-alt {
		  background: #556b8d;
		}
		.info-tiles.tiles-toyo .tiles-footer {
		  background: #4d6180;
		}
		.info-tiles.tiles-toyo:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-toyo:hover .tiles-heading {
		  background: #597093;
		}
		.info-tiles.tiles-toyo:hover .tiles-body {
		  background: #4b5f7d;
		}
		.info-tiles.tiles-toyo:hover .tiles-body-alt {
		  background: #4b5f7d;
		}
		.info-tiles.tiles-toyo:hover .tiles-footer {
		  background: #445570;
		}
		.info-tiles.tiles-alizarin {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-alizarin .tiles-heading {
		  background: #e98a72;
		}
		.info-tiles.tiles-alizarin .tiles-body {
		  background: #e36d4f;
		}
		.info-tiles.tiles-alizarin .tiles-body-alt {
		  background: #e36d4f;
		}
		.info-tiles.tiles-alizarin .tiles-footer {
		  background: #e05e3d;
		}
		.info-tiles.tiles-alizarin:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-alizarin:hover .tiles-heading {
		  background: #e47458;
		}
		.info-tiles.tiles-alizarin:hover .tiles-body {
		  background: #e05b39;
		}
		.info-tiles.tiles-alizarin:hover .tiles-body-alt {
		  background: #e05b39;
		}
		.info-tiles.tiles-alizarin:hover .tiles-footer {
		  background: #dd4c27;
		}
		.info-tiles.tiles-facebook {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-facebook .tiles-heading {
		  background: #466ab5;
		}
		.info-tiles.tiles-facebook .tiles-body {
		  background: #3b5998;
		}
		.info-tiles.tiles-facebook .tiles-body-alt {
		  background: #3b5998;
		}
		.info-tiles.tiles-facebook .tiles-footer {
		  background: #355089;
		}
		.info-tiles.tiles-facebook:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-facebook:hover .tiles-heading {
		  background: #3e5d9f;
		}
		.info-tiles.tiles-facebook:hover .tiles-body {
		  background: #344e86;
		}
		.info-tiles.tiles-facebook:hover .tiles-body-alt {
		  background: #344e86;
		}
		.info-tiles.tiles-facebook:hover .tiles-footer {
		  background: #2e4677;
		}
		.info-tiles.tiles-twitter {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-twitter .tiles-heading {
		  background: #17bfff;
		}
		.info-tiles.tiles-twitter .tiles-body {
		  background: #00aced;
		}
		.info-tiles.tiles-twitter .tiles-body-alt {
		  background: #00aced;
		}
		.info-tiles.tiles-twitter .tiles-footer {
		  background: #009dd9;
		}
		.info-tiles.tiles-twitter:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-twitter:hover .tiles-heading {
		  background: #00b3f7;
		}
		.info-tiles.tiles-twitter:hover .tiles-body {
		  background: #0099d4;
		}
		.info-tiles.tiles-twitter:hover .tiles-body-alt {
		  background: #0099d4;
		}
		.info-tiles.tiles-twitter:hover .tiles-footer {
		  background: #008bbf;
		}
		.info-tiles.tiles-dribbble {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-dribbble .tiles-heading {
		  background: #ee71a1;
		}
		.info-tiles.tiles-dribbble .tiles-body {
		  background: #ea4c89;
		}
		.info-tiles.tiles-dribbble .tiles-body-alt {
		  background: #ea4c89;
		}
		.info-tiles.tiles-dribbble .tiles-footer {
		  background: #e83a7d;
		}
		.info-tiles.tiles-dribbble:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-dribbble:hover .tiles-heading {
		  background: #eb558f;
		}
		.info-tiles.tiles-dribbble:hover .tiles-body {
		  background: #e7357a;
		}
		.info-tiles.tiles-dribbble:hover .tiles-body-alt {
		  background: #e7357a;
		}
		.info-tiles.tiles-dribbble:hover .tiles-footer {
		  background: #e5236e;
		}
		.info-tiles.tiles-vimeo {
		  color: #ffffff !important;
		}
		.info-tiles.tiles-vimeo .tiles-heading {
		  background: #badc71;
		}
		.info-tiles.tiles-vimeo .tiles-body {
		  background: #aad450;
		}
		.info-tiles.tiles-vimeo .tiles-body-alt {
		  background: #aad450;
		}
		.info-tiles.tiles-vimeo .tiles-footer {
		  background: #a2d040;
		}
		.info-tiles.tiles-vimeo:hover {
		  color: #ffffff;
		}
		.info-tiles.tiles-vimeo:hover .tiles-heading {
		  background: #aed658;
		}
		.info-tiles.tiles-vimeo:hover .tiles-body {
		  background: #a0cf3c;
		}
		.info-tiles.tiles-vimeo:hover .tiles-body-alt {
		  background: #a0cf3c;
		}
		.info-tiles.tiles-vimeo:hover .tiles-footer {
		  background: #96c631;
		}
		.shortcut-tiles.tiles-info {
		  color: #ffffff !important;
		}
		.shortcut-tiles.tiles-info .tiles-heading,
		.shortcut-tiles.tiles-info .tiles-body,
		.shortcut-tiles.tiles-info .tiles-footer {
		  background: #3bbfb4;
		}
		.shortcut-tiles.tiles-info:hover {
		  color: #ffffff;
		}
		.shortcut-tiles.tiles-info:hover .tiles-heading,
		.shortcut-tiles.tiles-info:hover .tiles-body,
		.shortcut-tiles.tiles-info:hover .tiles-footer {
		  background: #35aca2;
		}
		.shortcut-tiles.tiles-success {
		  color: #ffffff !important;
		}
		.shortcut-tiles.tiles-success .tiles-heading,
		.shortcut-tiles.tiles-success .tiles-body,
		.shortcut-tiles.tiles-success .tiles-footer {
		  background: #2ecc71;
		}
		.shortcut-tiles.tiles-success:hover {
		  color: #ffffff;
		}
		.shortcut-tiles.tiles-success:hover .tiles-heading,
		.shortcut-tiles.tiles-success:hover .tiles-body,
		.shortcut-tiles.tiles-success:hover .tiles-footer {
		  background: #29b765;
		}
		.shortcut-tiles.tiles-danger {
		  color: #ffffff !important;
		}
		.shortcut-tiles.tiles-danger .tiles-heading,
		.shortcut-tiles.tiles-danger .tiles-body,
		.shortcut-tiles.tiles-danger .tiles-footer {
		  background: #e74c3c;
		}
		.shortcut-tiles.tiles-danger:hover {
		  color: #ffffff;
		}
		.shortcut-tiles.tiles-danger:hover .tiles-heading,
		.shortcut-tiles.tiles-danger:hover .tiles-body,
		.shortcut-tiles.tiles-danger:hover .tiles-footer {
		  background: #e43725;
		}
		.shortcut-tiles.tiles-warning {
		  color: #ffffff !important;
		}
		.shortcut-tiles.tiles-warning .tiles-heading,
		.shortcut-tiles.tiles-warning .tiles-body,
		.shortcut-tiles.tiles-warning .tiles-footer {
		  background: #f1c40f;
		}
		.shortcut-tiles.tiles-warning:hover {
		  color: #ffffff;
		}
		.shortcut-tiles.tiles-warning:hover .tiles-heading,
		.shortcut-tiles.tiles-warning:hover .tiles-body,
		.shortcut-tiles.tiles-warning:hover .tiles-footer {
		  background: #dab10d;
		}
		.shortcut-tiles.tiles-primary {
		  color: #ffffff !important;
		}
		.shortcut-tiles.tiles-primary .tiles-heading,
		.shortcut-tiles.tiles-primary .tiles-body,
		.shortcut-tiles.tiles-primary .tiles-footer {
		  background: #3498db;
		}
		.shortcut-tiles.tiles-primary:hover {
		  color: #ffffff;
		}
		.shortcut-tiles.tiles-primary:hover .tiles-heading,
		.shortcut-tiles.tiles-primary:hover .tiles-body,
		.shortcut-tiles.tiles-primary:hover .tiles-footer {
		  background: #258cd1;
		}
		.shortcut-tiles.tiles-inverse {
		  color: #ffffff !important;
		}
		.shortcut-tiles.tiles-inverse .tiles-heading,
		.shortcut-tiles.tiles-inverse .tiles-body,
		.shortcut-tiles.tiles-inverse .tiles-footer {
		  background: #95a5a6;
		}
		.shortcut-tiles.tiles-inverse:hover {
		  color: #ffffff;
		}
		.shortcut-tiles.tiles-inverse:hover .tiles-heading,
		.shortcut-tiles.tiles-inverse:hover .tiles-body,
		.shortcut-tiles.tiles-inverse:hover .tiles-footer {
		  background: #87999a;
		}
		.shortcut-tiles.tiles-midnightblue {
		  color: #ffffff !important;
		}
		.shortcut-tiles.tiles-midnightblue .tiles-heading,
		.shortcut-tiles.tiles-midnightblue .tiles-body,
		.shortcut-tiles.tiles-midnightblue .tiles-footer {
		  background: #34495e;
		}
		.shortcut-tiles.tiles-midnightblue:hover {
		  color: #ffffff;
		}
		.shortcut-tiles.tiles-midnightblue:hover .tiles-heading,
		.shortcut-tiles.tiles-midnightblue:hover .tiles-body,
		.shortcut-tiles.tiles-midnightblue:hover .tiles-footer {
		  background: #2b3c4e;
		}
		.shortcut-tiles.tiles-sky {
		  color: #ffffff !important;
		}
		.shortcut-tiles.tiles-sky .tiles-heading,
		.shortcut-tiles.tiles-sky .tiles-body,
		.shortcut-tiles.tiles-sky .tiles-footer {
		  background: #82c4e6;
		}
		.shortcut-tiles.tiles-sky:hover {
		  color: #ffffff;
		}
		.shortcut-tiles.tiles-sky:hover .tiles-heading,
		.shortcut-tiles.tiles-sky:hover .tiles-body,
		.shortcut-tiles.tiles-sky:hover .tiles-footer {
		  background: #6dbae2;
		}
		.shortcut-tiles.tiles-orange {
		  color: #ffffff !important;
		}
		.shortcut-tiles.tiles-orange .tiles-heading,
		.shortcut-tiles.tiles-orange .tiles-body,
		.shortcut-tiles.tiles-orange .tiles-footer {
		  background: #e67e22;
		}
		.shortcut-tiles.tiles-orange:hover {
		  color: #ffffff;
		}
		.shortcut-tiles.tiles-orange:hover .tiles-heading,
		.shortcut-tiles.tiles-orange:hover .tiles-body,
		.shortcut-tiles.tiles-orange:hover .tiles-footer {
		  background: #d67118;
		}
		.shortcut-tiles.tiles-indigo {
		  color: #ffffff !important;
		}
		.shortcut-tiles.tiles-indigo .tiles-heading,
		.shortcut-tiles.tiles-indigo .tiles-body,
		.shortcut-tiles.tiles-indigo .tiles-footer {
		  background: #7863bc;
		}
		.shortcut-tiles.tiles-indigo:hover {
		  color: #ffffff;
		}
		.shortcut-tiles.tiles-indigo:hover .tiles-heading,
		.shortcut-tiles.tiles-indigo:hover .tiles-body,
		.shortcut-tiles.tiles-indigo:hover .tiles-footer {
		  background: #6951b4;
		}
		.shortcut-tiles.tiles-green {
		  color: #ffffff !important;
		}
		.shortcut-tiles.tiles-green .tiles-heading,
		.shortcut-tiles.tiles-green .tiles-body,
		.shortcut-tiles.tiles-green .tiles-footer {
		  background: #37bf8d;
		}
		.shortcut-tiles.tiles-green:hover {
		  color: #ffffff;
		}
		.shortcut-tiles.tiles-green:hover .tiles-heading,
		.shortcut-tiles.tiles-green:hover .tiles-body,
		.shortcut-tiles.tiles-green:hover .tiles-footer {
		  background: #31ab7e;
		}
		.shortcut-tiles.tiles-blue {
		  color: #ffffff !important;
		}
		.shortcut-tiles.tiles-blue .tiles-heading,
		.shortcut-tiles.tiles-blue .tiles-body,
		.shortcut-tiles.tiles-blue .tiles-footer {
		  background: #5394c9;
		}
		.shortcut-tiles.tiles-blue:hover {
		  color: #ffffff;
		}
		.shortcut-tiles.tiles-blue:hover .tiles-heading,
		.shortcut-tiles.tiles-blue:hover .tiles-body,
		.shortcut-tiles.tiles-blue:hover .tiles-footer {
		  background: #4088c3;
		}
		.shortcut-tiles.tiles-magenta {
		  color: #ffffff !important;
		}
		.shortcut-tiles.tiles-magenta .tiles-heading,
		.shortcut-tiles.tiles-magenta .tiles-body,
		.shortcut-tiles.tiles-magenta .tiles-footer {
		  background: #e73c68;
		}
		.shortcut-tiles.tiles-magenta:hover {
		  color: #ffffff;
		}
		.shortcut-tiles.tiles-magenta:hover .tiles-heading,
		.shortcut-tiles.tiles-magenta:hover .tiles-body,
		.shortcut-tiles.tiles-magenta:hover .tiles-footer {
		  background: #e42556;
		}
		.shortcut-tiles.tiles-purple {
		  color: #ffffff !important;
		}
		.shortcut-tiles.tiles-purple .tiles-heading,
		.shortcut-tiles.tiles-purple .tiles-body,
		.shortcut-tiles.tiles-purple .tiles-footer {
		  background: #e044ab;
		}
		.shortcut-tiles.tiles-purple:hover {
		  color: #ffffff;
		}
		.shortcut-tiles.tiles-purple:hover .tiles-heading,
		.shortcut-tiles.tiles-purple:hover .tiles-body,
		.shortcut-tiles.tiles-purple:hover .tiles-footer {
		  background: #dc2ea1;
		}
		.shortcut-tiles.tiles-brown {
		  color: #ffffff !important;
		}
		.shortcut-tiles.tiles-brown .tiles-heading,
		.shortcut-tiles.tiles-brown .tiles-body,
		.shortcut-tiles.tiles-brown .tiles-footer {
		  background: #c0392b;
		}
		.shortcut-tiles.tiles-brown:hover {
		  color: #ffffff;
		}
		.shortcut-tiles.tiles-brown:hover .tiles-heading,
		.shortcut-tiles.tiles-brown:hover .tiles-body,
		.shortcut-tiles.tiles-brown:hover .tiles-footer {
		  background: #ab3326;
		}
		.shortcut-tiles.tiles-grape {
		  color: #ffffff !important;
		}
		.shortcut-tiles.tiles-grape .tiles-heading,
		.shortcut-tiles.tiles-grape .tiles-body,
		.shortcut-tiles.tiles-grape .tiles-footer {
		  background: #7a869c;
		}
		.shortcut-tiles.tiles-grape:hover {
		  color: #ffffff;
		}
		.shortcut-tiles.tiles-grape:hover .tiles-heading,
		.shortcut-tiles.tiles-grape:hover .tiles-body,
		.shortcut-tiles.tiles-grape:hover .tiles-footer {
		  background: #6c7991;
		}
		.shortcut-tiles.tiles-toyo {
		  color: #ffffff !important;
		}
		.shortcut-tiles.tiles-toyo .tiles-heading,
		.shortcut-tiles.tiles-toyo .tiles-body,
		.shortcut-tiles.tiles-toyo .tiles-footer {
		  background: #556b8d;
		}
		.shortcut-tiles.tiles-toyo:hover {
		  color: #ffffff;
		}
		.shortcut-tiles.tiles-toyo:hover .tiles-heading,
		.shortcut-tiles.tiles-toyo:hover .tiles-body,
		.shortcut-tiles.tiles-toyo:hover .tiles-footer {
		  background: #4b5f7d;
		}
		.shortcut-tiles.tiles-alizarin {
		  color: #ffffff !important;
		}
		.shortcut-tiles.tiles-alizarin .tiles-heading,
		.shortcut-tiles.tiles-alizarin .tiles-body,
		.shortcut-tiles.tiles-alizarin .tiles-footer {
		  background: #e36d4f;
		}
		.shortcut-tiles.tiles-alizarin:hover {
		  color: #ffffff;
		}
		.shortcut-tiles.tiles-alizarin:hover .tiles-heading,
		.shortcut-tiles.tiles-alizarin:hover .tiles-body,
		.shortcut-tiles.tiles-alizarin:hover .tiles-footer {
		  background: #e05b39;
		}
		.tiles-sparkline {
		  background: #fff;
		  border: 1px solid #dadfe3;
		  border-radius: 3px;
		  position: relative;
		  margin-bottom: 20px;
		  box-shadow: 0 1px 0 0 rgba(0, 0, 0, 0.02);
		}
		.tiles-sparkline .tiles-sparkline-heading {
		  padding: 20px 20px 0;
		  text-transform: uppercase;
		}
		.tiles-sparkline .tiles-sparkline-heading h2 {
		  font-size: 36px;
		  margin: 0;
		  float: none;
		  line-height: 1em;
		}
		.tiles-sparkline .tiles-sparkline-heading .tiles-sparkline-subheading {
		  margin: 5px 0 0;
		  float: none;
		  letter-spacing: 0.1em;
		  line-height: 1em;
		  color: #93a8a8;
		  font-weight: 400;
		  font-size: 12px;
		}
		.tiles-sparkline .tiles-sparkline-heading .label {
		  position: absolute;
		  top: 20px;
		  right: 20px;
		}
		.tiles-sparkline .tiles-sparkline-heading .week {
		  position: absolute;
		  top: 48px;
		  float: none;
		  right: 20px;
		  text-transform: none !important;
		  color: #cbd6d6 !important;
		  font-size: 12px;
		}
		.tiles-sparkline .tiles-sparkline-heading .week i {
		  font-size: 12px !important;
		}
		.tiles-sparkline .tiles-sparkline-body {
		  padding: 20px;
		}
		.tiles-sparkline .tiles-sparkline-body .tabular {
		  margin: 5px 0 0;
		  padding: 0 3px;
		}
		.tiles-sparkline .tiles-sparkline-body .tabular .tabular-cell {
		  width: 14.285714285714285714285714285714%;
		}
		.tiles-sparkline .tiles-sparkline-body .tabular .tabular-cell .week-day {
		  color: #cbd6d6;
		  font-size: 12px;
		  position: relative;
		}
		.tiles-sparkline .tiles-sparkline-body .tabular .tabular-cell .sun {
		  margin-left: -2px;
		  left: 0;
		}
		.tiles-sparkline .tiles-sparkline-body .tabular .tabular-cell .mon {
		  margin-left: -3px;
		  left: 16.67%;
		}
		.tiles-sparkline .tiles-sparkline-body .tabular .tabular-cell .tue {
		  margin-left: -4px;
		  left: 33.33%;
		}
		.tiles-sparkline .tiles-sparkline-body .tabular .tabular-cell .wed {
		  margin-left: -4px;
		  left: 50%;
		}
		.tiles-sparkline .tiles-sparkline-body .tabular .tabular-cell .thu {
		  margin-left: -4px;
		  left: 66.67%;
		}
		.tiles-sparkline .tiles-sparkline-body .tabular .tabular-cell .fri {
		  margin-left: -4px;
		  left: 83.33%;
		}
		.tiles-sparkline .tiles-sparkline-body .tabular .tabular-cell .sat {
		  margin-left: -4px;
		  left: 100%;
		}
		.tiles-sparkline .tiles-sparkline-footer {
		  padding: 20px;
		  background: #fafbfc;
		  font-size: 14px;
		  border-top: 1px solid #e6eaed;
		  border-radius: 0 0 3px 3px;
		}
		.tile-piechart .easypiechart {
		  float: left;
		  display: inline;
		  margin: 0;
		  height: 60px;
		  line-height: 60px;
		}
		.tile-piechart .easypiechart .percent {
		  width: 60px;
		  font-weight: 400;
		  line-height: 60px;
		  font-size: 14px;
		}
		.tile-piechart .tile-info {
		  float: left;
		  margin: 5px 10px 0;
		}
		.tile-piechart .tile-info label {
		  text-transform: uppercase;
		  letter-spacing: 0.1em;
		  display: block;
		  margin-bottom: 5px;
		}
		.info-tiles .tiles-body .easypiechart {
		  margin: 10px auto;
		  height: 80px;
		  line-height: 80px;
		  width: 80px;
		}
		.info-tiles .tiles-body .easypiechart .percent {
		  width: 80px;
		  line-height: 80px;
		  font-size: 20px;
		  font-weight: 300;
		  text-transform: uppercase;
		  color: #fff;
		}

	</style>


</head>
<body >
 	<?php 
 		require('Menu-side-Supply.php');
 	?>
 	<br>
 	<br>
 	<br>
    
    	<div class="col-md-3">
    	    <a class="info-tiles tiles-inverse has-footer" href="product.php">
    		    <div class="tiles-heading">
			        <div class="pull-middle">Product List</div>
			        
			    </div>
			    <div class="tiles-body" align="middle">
			        <div class="text-center"><span class="fa fa-list" style="margin-right: 40px;"></span>2</div>
			    </div>
			    <div class="tiles-footer">
			    	<div class="pull-middle"><br></div>
			    </div>
			</a>
    	</div>
        
        <div class="col-md-3">
        	<a class="info-tiles tiles-green has-footer" href="order-list.php">
			    <div class="tiles-heading">
			        <div class="pull-middle">Orders List</div>
			    </div>
			    <div class="tiles-body">
			        <div class="text-center"><span class="glyphicon glyphicon-list-alt" style="margin-right: 40px;"></span>2</div>
			    </div>
			    <div class="tiles-footer">
			    	<div class="pull-middle"><br></div>
			    </div>
			</a>
    	</div>    
        
        <div class="col-md-3">
        	<a class="info-tiles tiles-blue has-footer" href="order-status.php">
			    <div class="tiles-heading">
			        <div class="pull-middle">Order Status</div>
			    </div>
			    <div class="tiles-body">
			        <div class="text-center"><span class="glyphicon glyphicon-check" style="margin-right: 40px;"></span>2</div>
			    </div>
			    <div class="tiles-footer">
			    	<div class="pull-middle"><br></div>
			    </div>
			</a>
    	</div>
        
        <div class="col-md-3">
        	<a class="info-tiles tiles-midnightblue has-footer" href="order-history.php">
			    <div class="tiles-heading">
			        <div class="pull-middle">Order History</div>
			    </div>
			    <div class="tiles-body">
			        <div class="text-center"><span class="glyphicon glyphicon-time" style="margin-right: 40px;"></span>10</div>
			    </div>
			    <div class="tiles-footer">
			    	<div class="pull-middle"><br></div>
			    </div>
			</a>
    	</div>
	</div>
    
    

    
    
    <div class="tabbable">
		<ul class="nav nav-tabs">
		    <li class="active"><a href="#tab1" data-toggle="tab"></a></li>
		    <!--<li><a href="#tab2" data-toggle="tab">Section 2</a></li>
	  	</ul>
	  	<div class="tab-content">
	    	<div class="tab-pane active" id="tab1">
	      		<p>I'm in Section 1.</p>
	    	</div>
	    	<div class="tab-pane" id="tab2">
	      		<p>I'm in Section 2.</p>
	    	</div>
  		</div>-->
	</div>
               
 	
 </body>
</html>