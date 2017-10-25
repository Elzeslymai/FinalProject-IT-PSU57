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
    <link rel="stylesheet" type="text/css" href="/FinalProject/css/style1.css">

	<link rel="shortcut icon" href="/FinalProject/images/icon.png" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	
</head>
<body >
 	<?php 
 		require('Menu-side-Supply.php');
 	?>
 	<br>
 	<h1><span class="glyphicon glyphicon-apple col-sm-offset-1"></span> Product Detail</h1>

 		<div class="wrap col-sm-offset-2">
            <div class="cont span_2_of_3">
                <div class="labout span_1_of_a1">
                <!-- start product_slider -->
                    <ul id="etalage">
                            <li>
                                <a href="optionallink.html">
                                    <img class="" src="/FinalProject/images/banner1.jpg"/>
                                    <img class="" src="/FinalProject/images/banner2.jpg"/>
                                    
                                </a>
                            </li>
                            

                    </ul>
                </div>
                    
                    
            <!-- end product_slider -->
            <div class="cont1 span_2_of_a1">
                <h3 class="m_3">เนื้อแซลม่อน</h3>
                
                <div class="price_single">
                              <span class="reducedfrom">฿150.00</span>
                              <span class="actual">฿120.00</span>
                <ul class="options">
                    <h4 class="m_9">Grad :</h4>
                    <li><a href="#" >A</a></li>
                    
                    <div class="clear"></div>
                </ul>
                <div class="btn_form">
                   <form>
                     <input type="submit" value="Add to cart" title="">
                  </form>
                </div>
                
                <p class="m_desc">********************************************************************************************************************
                ********************************************************************************************************************
                ********************************************************************************************************************</p>
                
                <!--<div class="social_single"> 
                   <ul> 
                      <li class="fb"><a href="#"><span> </span></a></li>
                      <li class="tw"><a href="#"><span> </span></a></li>
                      <li class="g_plus"><a href="#"><span> </span></a></li>
                      <li class="rss"><a href="#"><span> </span></a></li>       
                   </ul>
                </div>-->
            </div>
            <div class="clear"></div>
     
        
             <div class="toogle">
                <h3 class="m_3">Product Details</h3>
                <p class="m_text">******************************************************************************************************************************
                ******************************************************************************************************************************
                ******************************************************************************************************************************
            </p>
             </div>                
     </div>
     <div class="col-sm-1">
                 <a href="product.php"><button type="button" class="btn" style="width: 90px; margin-right: 0px"><span class="glyphicon glyphicon-triangle-left"></span>Back</button></a>
             </div>
     <div class="clear"></div>
     </div>
 </body>
 </html>