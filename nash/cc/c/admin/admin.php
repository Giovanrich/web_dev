<!DOCTYPE html>
<html>
<head>

  <!-- Site made with Mobirise Website Builder v3.8, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.8, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/includes/css/bootstrapValidator.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link href="assets/includes/css/font-awesome.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="build/css/intlTelInput.css">
 <!-- <link rel="stylesheet" href="build/css/demo.css">-->
  
 <style>
 input.btn-primary {
  margin-top: 15px;
}</style>
  
  
</head>


<!--inserting donors information into database-->
<?php
  include_once("adduser.php");
  include_once("adminlogin.php");
?>
<body>

<section id="ext_menu-0">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <span class="navbar-logo"><span class="socicon socicon-buffer mbr-iconfont mbr-iconfont-menu"></span></span>
                        <a class="navbar-caption" href="#">C.S.S</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                     
					  <li class="nav-item"><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#newsletter">Newsletter</button></li>
					  <li class="nav-item"><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#adduser">Add User</button></li>
					  <li class="nav-item"><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#adduser">Donor Contacts</button></li>
        
                    </ul>

                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>
<!-- add user modal-->
<div class="modal fade" id="adduser" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                   Add User
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
       <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <form  action="admin.php" method="post"  >
<br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-md"  ></i></span>
                                            <input type="text" name="username" id="donor_name" required class="form-control" pattern="[a-zA-Z\s]+"placeholder="User Name" />
                                            <span class="help-block" id="error"></span>
											
                                        </div>
										
										 <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-md"  ></i></span>
                                            <input type="password" name="password" id="pass" required class="form-control" pattern="[a-zA-Z\s]+"placeholder="Password" />
                                            <span class="help-block" id="error"></span>
											
                                        </div>
										 <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-md"  ></i></span>
                                            <input type="password" name="password" id="pass" required class="form-control" pattern="[a-zA-Z\s]+"placeholder="Cornfirm Password" />
                                            <span class="help-block" id="error"></span>
											
                                        </div>

                                        
										
                                     <button type="submit" class="btn btn-primary" id="submit" data-toggle="modal" >Save</button>
                                    
                                    </form>
                            </div>
                           
                        </div>


              </div>
            
            <!-- Modal Footer -->
            
        </div>
    </div>
</div>
<!--newsletter modal-->
<div class="modal fade" id="newsletter" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                   Newsletter
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                        <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <form  action="adminlogin.php" method="post"  >
<br/>
                                        <div class="form-group input-group">
										<Textarea required  style="height: 80px; width: 570px;padding: 5px;resize: none;" name="msg" placeholder="Enter  Your Message..." class="text_input" ></textarea>
                                            <span class="help-block" id="error"></span>
											
                                        </div>
										
										 <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-md"  ></i></span>
                                            <input type="email" name="pwd" id="pass" required class="form-control" pattern="[a-zA-Z\s]+"placeholder="emails" />
                                            <span class="help-block" id="error"></span>
											
                                        </div>
										
                                     <button type="submit" class="btn btn-primary" id="submit" data-toggle="modal" >Send</button>
                                    
                                </form>
                            </div>
                           
                        </div>


              </div>
            
            <!-- Modal Footer -->
            
        </div>
    </div>
</div>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-e" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;">
    
    
</footer>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/bootstrap/js/bootstrapValidator.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/jquery-mb-ytplayer/jquery.mb.YTPlayer.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/mobirise-slider-video/script.js"></script>
  <script src="assets/includes/js/jquery-3.1.1.min.js"></script>
  <script src="assets/includes/js/jquery.validate.min.js"></script>
  
  
 
 
  </body>
</html>