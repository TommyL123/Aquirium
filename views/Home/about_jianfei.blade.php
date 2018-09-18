<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>SFSU-Fulda Software Engineering Project CSC 648-848, Fall 2018. For Demonstration Only</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">

<!-- Favicons -->
<link href="<?php echo asset("public/img/favicon.png"); ?>" rel="icon">
<link href="<?php echo asset("public/img/apple-touch-icon.png"); ?>" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="<?php echo asset("public/lib/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="<?php echo asset("public/lib/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="<?php echo asset("public/css/style.css"); ?>" rel="stylesheet">
</head>

<body>
<div class="container">
	<div class="col-lg-6 col-lg-offset-3">
        <div class="row w">
        
            <!-- navigation at left -->
            <div class="col-md-4">
                <ul class="nav nav-tabs nav-stacked">
                	<li><a href="<?php echo asset("index"); ?>">Return to Home Page</a></li>
                </ul>
                <img class="img-responsive" src="<?php echo asset("public/img/avatar_jianfei.jpg"); ?>" alt="">
                <ul class="nav nav-tabs nav-stacked" id="myTab">
                    <li class="active"><a href="#about">About</a></li>
                    <li><a href="#profile">Profile</a></li>
                </ul>
            </div>
            <!-- navigation at left -->
        
            <!-- content at right -->
            <div class="col-md-8">
            
            	<!-- tab content -->
    			<div class="tab-content">
                
                    <!-- first tab -->
                    <div class="tab-pane active" id="about">
                        <h3>Jianfei Zhao</h3>
                        <h5>Team Lead</h5>
                        <hr>
                        <p>This is the first paragraph of introduction.</p>
                        <p>This is the second paragraph of introduction. This is the second paragraph of introduction. This is the second paragraph of introduction. This is the second paragraph of introduction.</p>
                    </div>
                    <!-- first tab -->
                    
                    <!-- second tab -->
                    <div class="tab-pane" id="profile">
                        <h4>Role In The Team</h4>
                        <p class="sm">
                            <grey>Position: </grey>Back-end<br/>
                            <grey>Programming Languages: </grey>PHP, Javascript<br/>
                        </p>
                        
                        <h4>Personal Info</h4>
                        <p class="sm">
                            <grey>Email: </grey>jzhao11@mail.sfsu.edu<br/>
                            <grey>Nickname: </grey>Christian<br/>
                            <grey>Hobbies: </grey>Soccer, Chess<br/>
                        </p>
                    </div>
                    <!-- second tab -->
                
                </div>
                <!-- tab content -->
                
            </div>
            <!-- content at right -->
            
        </div>
        <!-- row w -->
        
    </div>
    <!-- col-lg-6 -->
    
</div>
<!-- container -->
  
<div class="credits">
CSC 648-848 Fall 2018 Team 08
</div>
<!-- javaScript libraries -->
<script src="<?php echo asset("public/lib/jquery/jquery.min.js"); ?>"></script>
<script src="<?php echo asset("public/lib/bootstrap/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo asset("public/lib/php-mail-form/validate.js"); ?>"></script>

<!-- javascript file for this page -->
<script src="<?php echo asset("public/js/main.js"); ?>"></script>
</body>
</html>