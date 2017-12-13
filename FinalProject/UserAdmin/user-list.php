<?php 
        
        session_start();
            if(empty($_SESSION['username'])){
                echo "<script>alert('Please Login !! ');document.location='/FinalProject/index.php'</script>";
            }else{
                if($_SESSION['status'] == 'Admin'){
                    
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
 		require('Menu-side-Admin.php');
 	?>
 	<br>
 	<h1><span class="glyphicon glyphicon-time col-sm-offset-1"></span> User LIST</h1>
    
 		<div class="col-md-12">
            <div class="col-md-10 col-sm-offset-1 ">
                <div class="panel panel-default">
                    <div class="panel-heading ">
                    	<div class="col-sm-2">
                    		<b>
                			    User ID			
                    		</b>
                    		
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                			   	Name		
                    		</b>
                    	</div>
                    	<div class="col-sm-3">
                    		<b>
                			   	Type
                    		</b>
                    	</div>
                    	<div class="col-sm-2">
                    		<b>
                		    	Date to add			
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
                            $sql = 'select * from user';
                            $result = mysqli_query($connect,$sql);
                            while($row = mysqli_fetch_assoc($result)){
                                echo '<div class="col-sm-2">
                                        <b>
                                            <u>
                                                <a href="#">';
                                                    echo $row['U_id'];
                                                    echo' 
                                                </a>
                                            </u>
                                        </b>
                                      </div>
                                    <div class="col-sm-3">
                                        <b>';
                                            echo $row['U_company_name'];
                                        echo '</b>
                                    </div>
                                    <div class="col-sm-3">
                                        <b>';
                                            echo $row['U_type'];   
                                        echo'</b>
                                    </div>
                                    <div class="col-sm-2">';
                                        echo $row['Date'];
                                    echo'</div>
                                    <div class="col-sm-2">
                                        <form name="delete'.$row['U_id'].'" method="post" action="delete-user.php">
                                            <input type="hidden" name="userlist" value="'.$row['U_id'].'">
                                                
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

        <input type="hidden" id="notify" class="form-control input-md btn-info" data-toggle="modal" data-target="#forgetmodal1">
        <div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" id="forgetmodal1">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title">Delete User</h4>
                        </div>
                        <div class="modal-body">
                            <p><i class="glyphicon glyphicon-trash"></i> Are you sure to Delete user ?</p>
                            
                        </div>
                        <div class="modal-footer">
                            <a href="/FinalProject/UserAdmin/add-user.php"><button type="button" class="btn btn-default" data-dismiss="modal" >Cancle</button></a>
                            <a href="/FinalProject/UserAdmin/delete-user.php"><button type="button" class="btn btn-info">Accept</button></a>
                        </div>
                    </div> 
                </div> 
            </div> 
 </body>
 </html>