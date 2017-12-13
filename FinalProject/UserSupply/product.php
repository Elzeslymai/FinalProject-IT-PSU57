<?php 
        
        session_start();
            if(empty($_SESSION['username'])){
                echo "<script>alert('Please Login !! ');document.location='/FinalProject/index.php'</script>";
            }else{
                if($_SESSION['status'] == 'Supply'){
                    
                }else{
                    echo "<script>alert('You not have permission');document.location='/FinalProject/index.php'</script>";
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
 	<h1><span class="glyphicon glyphicon-time col-sm-offset-1"></span> PRODUCT LIST</h1>

 		<div class="col-md-12">
            <div class="col-md-10 col-sm-offset-1 ">
                <div class="panel panel-default">
                    <div class="panel-heading ">
                    	<div class="col-sm-2">
                    		<b>
                			    Product Number			
                    		</b>
                    		
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                			   	Product Name		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                			   	Catagories	
                    		</b>
                    	</div>
                    	<div class="col-sm-2">
                    		<b>
                		    	Date			
                    		</b>
                    	</div>
                        <div class="col-sm-2">
                            <b>
                                Action            
                            </b>
                        </div>

                    	<br>
                    </div>
                    <div class="panel-body">
                    	<?php
                            $connect = mysqli_connect("localhost","root","","hotelsupport");
                            $sql = 'select * from product where U_id="'.$_SESSION['username'].'"';
                            $result = mysqli_query($connect,$sql);
                            while($row = mysqli_fetch_assoc($result)){
                                echo '<div class="col-sm-2">
                                        <b>
                                            <u>
                                                <a href="#">';
                                                    echo $row['P_id'];
                                                    echo' 
                                                </a>
                                            </u>
                                        </b>
                                      </div>
                                    <div class="col-sm-3">
                                        <b>';
                                            echo $row['P_name'];
                                        echo '</b>
                                    </div>
                                    <div class="col-sm-3">
                                        <b>';
                                            echo $row['P_grade'];   
                                        echo'</b>
                                    </div>
                                    <div class="col-sm-2">';
                                        echo $row['Date'];
                                    echo'</div>
                                    <div class="col-sm-2">
                                        <form name="delete'.$row['P_id'].'" method="post" action="product-delete-db.php">
                                            <input type="hidden" name="productlist" value="'.$row['P_id'].'">
                                                
                                            <input type="submit" value="Delete" class="form-control input-md btn-info">
                                        </form>
                                    </div>
                                    <div>&nbsp;</div>';
                            }
                            

                            mysqli_close($connect);
                        ?>
                    </div>
                </div>
            </div>
        </div>
 </body>
 </html>