<?php 
        
        session_start();
            if(empty($_SESSION['username'])){
                echo "<script>alert('Please Login !! ');document.location='/FinalProject/login.php'</script>";
            }else{
                if($_SESSION['status'] == 'Supply'){
                    
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
	
</head>
<body >
 	<?php 
 		require('Menu-side-Supply.php');
 	?>
 	<br>
 	<h1><span class="glyphicon glyphicon-time col-sm-offset-1"></span> ORDER HISTORY</h1>

 		<div class="col-md-12">
            <div class="col-md-10 col-sm-offset-1 ">
                <div class="panel panel-default">
                    <div class="panel-heading ">
                    	<div class="col-sm-3">
                    		<b>
                			    Product Number			
                    		</b>
                    		
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                			   	Supplier		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                		    	Date			
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                			   	Status			
                    		</b>
                    	</div>
                    	<br>
                    </div>
                    <div class="panel-body">
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0001
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Renaissence phuket hotel		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-success">
                    		<b>
                					Complete
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0002
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Royal city phuket		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-success">
                    		<b>
                					Complete
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0003
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Renaissence phuket hotel		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-success">
                    		<b>
                					Complete
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0004
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Royal city phuket		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-danger">
                    		<b>
                					Cancle
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0005
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Renaissence phuket hotel		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-success">
                    		<b>
                					Complete
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0006
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Royal city phuket		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-danger">
                    		<b>
                					Cancle
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0007
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Renaissence phuket hotel		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-danger">
                    		<b>
                					Cancle
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0008
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Royal city phuket		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-danger">
                    		<b>
                					Cancle
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0009
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Renaissence phuket hotel		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-success">
                    		<b>
                					Complete
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0010
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Royal city phuket		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-danger">
                    		<b>
                					Cancle
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0011
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Renaissence phuket hotel		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-success">
                    		<b>
                					Complete
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0012
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Royal city phuket		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-success">
                    		<b>
                					Complete
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0013
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Renaissence phuket hotel		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-success">
                    		<b>
                					Complete
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0014
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Royal city phuket		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-success">
                    		<b>
                					Complete
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0015
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Renaissence phuket hotel		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-success">
                    		<b>
                					Complete
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0016
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Royal city phuket		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-danger">
                    		<b>
                					Cancle
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0017
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Renaissence phuket hotel		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-success">
                    		<b>
                					Complete
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0018
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Royal city phuket		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-success">
                    		<b>
                					Complete
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0019
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Renaissence phuket hotel		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-success">
                    		<b>
                					Complete
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    	<div class="col-sm-3">
                    		<b>
                    			<u>
                    				<a href="">
                			    		HS0020
                    				</a>
                    			</u>
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				Royal city phuket		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                				20/4/2560		
                    		</b>
                    	</div>
                    	<div class="col-sm-3 btn-danger">
                    		<b>
                					Cancle
                    		</b>
                    	</div>
                    	<div>&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>
 </body>
 </html>