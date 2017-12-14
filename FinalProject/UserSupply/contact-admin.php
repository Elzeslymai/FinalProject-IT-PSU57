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
     <h1><span class="glyphicon glyphicon-envelope col-sm-offset-1"></span>  CONTACT ADMIN</h1>
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-sm-offset-1">      
                <table width="37%" border="0">
            <div class="well well-sm">
                <form action="contact-admin-email.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" name="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="General Customer Service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="Product Support">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" name="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        
<div class="container">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-2">
      <h2>Google Map here</h2>
      
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4699.753858798612!2d98.35033397864844!3d7.894421880455643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3050303528303419%3A0x43ed556e96eb7eb8!2z4LiE4LiT4Liw4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li14LmB4Lil4Liw4Liq4Li04LmI4LiH4LmA4LmA4Lin4LiU4Lil4LmJ4Lit4Lih!5e0!3m2!1sth!2s!4v1493064733353" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        
        <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fbootsnipp.com%2Fiframe%2Fb2BWe" class="pull-right" target="_blank">
            
        </a>
    
 </body>
 </html>