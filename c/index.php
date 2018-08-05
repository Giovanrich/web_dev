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
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
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
include_once("cchs/insert.php");
include_once("cchs/subscribe.php");
//include_once("admin/login.php");
?>
<?php

?>
<body>

<section id="ext_menu-0">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">
            
            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <span class="navbar-logo"><span class="socicon socicon-buffer mbr-iconfont mbr-iconfont-menu"></span></span>
                        <a class="navbar-caption" href="#">C.C.P & S</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                      <li class="nav-item"><a class="nav-link link" href="index.php#header1-3">HOME</a></li>
                      <li class="nav-item"><a class="nav-link link" href="index.php#about_us">ABOUT US</a></li>
					  <li class="nav-item"><a class="nav-link link" href="index.php#news">NEWS & UPDATES</a></li>
                      <li class="nav-item">
                       <div class="dropdown">
                       <a data-target="#" href="" class="nav-link link" data-toggle="dropdown" class="dropdown-toggle">GALLERY <b class="caret"></b></a>
                       <ul class="dropdown-menu">
                         <li><a href="index.php#slider-p"  class="nav-link link">PRIMARY</a></li>
                          <li><a href="index.php#slider-s"  class="nav-link link">SECONDARY</a></li>
                        </ul>   
                       </div>
                      </li>
                      <li class="nav-item"><a class="nav-link link" href="index.php#contacts2-3">CONTACT</a></li>
					  <li class="nav-item"><button class="btn btn-primary btn-lg"  ><a href="admin/admin_login.php">LOGIN</a></button></li>
                     <!-- <li class="nav-item"><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#donations">DONATE</button></li>-->
                     <!-- <li class="nav-item"><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#proceed">DONATE</button></li> -->      
                    </ul>

                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>
<!--login modal-->
<div class="modal fade" id="login" tabindex="-1" role="dialog" 
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
                   Head Login
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
       <div class="panel panel-default">
                            
                            <div class="panel-body">
                                <form  action="index.php" method="POST"  ><br/>
								<?php

//testing login....
$username = "";
$password = "";
$msg_error = "";

$msg = "";
$count=0;

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if((!$username) || (!$password)){
        $msg_error = "<p style='color: #ffffff; font-weight: bold;'>Wrong email or password!</p>";
    }
    else
    {
        //$email = mysql_real_escape_string($email);
        $password = md5($password);
        include('conn/connect.php');
        $sql="SELECT * FROM users where username='$username' and password='$password'";


        if($query_run=mysql_query($sql))
        {
            while($row=mysql_fetch_assoc($query_run))
            {
                
                $s_username=$row['username'];
                $s_pass=$row['password'];

               
                $_SESSION['username']=$s_username;
                $_SESSION['password']=$s_pass;
                


            }
        }

        else{
            $msg_error = "<p style='color: #ffffff; font-weight: bold;'>Wrong email or password sql!</p>";
        }
    }
}

?>
								

                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-md"  ></i></span>
                                            <input type="text" name="username" id="donor_name" required class="form-control" pattern="[a-zA-Z\s]+"placeholder="Your Name" />
                                            <span class="help-block" id="error"></span>
											
                                        </div>
										
										 <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-md"  ></i></span>
                                            <input type="password" name="password" id="pass" required class="form-control" pattern="[a-zA-Z\s]+"placeholder="Password" />
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
<!-- Modal -->
<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" 
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
                   Confirm
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
               <h6> Do you want us to contact you later?</h6>
                  
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_donations">
                    <input type="hidden" name="business" value="seremwez@magu.com">
                    <input type="hidden" name="lc" value="AD">
                    <input type="hidden" name="item_name" value="css">
                    <input type="hidden" name="no_note" value="0">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
                    <button type="submit" class ="btn btn-primary">No</button>

                </form>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register" data-dismiss="modal">
                    Yes
                </button>
            </div>
        </div>
    </div>
</div>
<!--modal for donations-->
<div class="modal fade" id="donations" tabindex="-1" role="dialog" 
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
                   Contacts for Donations
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
               <h4> Use these contacts if you want to donate</h4>
                 The Salvation Army<br>
                 Charles Clack Primary School<br>
                 P.O Box 132<br>
                 Magunje<br>
				 Email:<br>
				 Phone: +263 77 776 9844<br><br>
				 
				 The Salvation Army<br>
                 Charles Clack High School<br>
                 P.O Box 49<br>
                 Magunje<br>
				 Email:<br>
				 Phone: +263 77 776 9844<br><br><br>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
              
                <button type="button" class="btn btn-primary" data-toggle="modal"  data-dismiss="modal">
                    Thank you
                </button>
            </div>
        </div>
    </div>
</div>





<!-- Modal Register-->
<div class="modal fade" id="register" tabindex="-1" role="dialog" 
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
                <h5 class="modal-title" id="myModalLabel">
                    Your Contact Details
                </h5>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
       <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Register Yourself </strong>  
                            </div>
                            <div class="panel-body">
                                <form  action="index.php" method="post"  >
<br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-md"  ></i></span>
                                            <input type="text" name="donor_name" id="donor_name" required class="form-control" pattern="[a-zA-Z\s]+"placeholder="Your Name" />
                                            <span class="help-block" id="error"></span>
											<span class="error"><?php echo $nameError;?></span>
                                        </div>

                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-md"  ></i></span>
                                            <input type="text" name="donor_surname" required class="form-control" pattern="[a-zA-Z\s]+"placeholder="Surname" />
                                            <span class="help-block" id="error"></span>
                                        </div>

                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"  ></i></span>
											<input type="tel" id="phone" name="donor_cell" required class="form-control" pattern="[0-9\s]+"placeholder="Phone Number" />
                                            <!--<input id="phone" type="tel" name="donor_cell" />-->
                                            <span class="help-block" id="error"></span>
                                        </div>
                                    
                                         <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                            <input type="email" name="donor_email"required class="form-control" placeholder="Your Email" />
                                            <span class="help-block" id="error"></span>
                                        </div>
										
                                     <button type="submit" class="btn btn-primary" id="submit" data-toggle="modal" >Save</button>
                                    
                                    </form>
                            </div>
                           
                        </div>


              </div>
        </div>
    </div>
</div>
<div class="modal fade" id="proceed" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            
            
            <!-- Modal Body -->
            <div class="modal-body">
     
            

              </div>
			   <div class="modal-footer">
			      <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_donations">
                    <input type="hidden" name="business" value="seremwez@magu.com">
                    <input type="hidden" name="lc" value="AD">
                    <input type="hidden" name="item_name" value="css">
                    <input type="hidden" name="no_note" value="0">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest">
                    <button type="submit" class ="btn ol_h1">continue</button>

                  </form>
			   </div>
        </div>
    </div>
</div>








<!--Home section-->
<section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-section-with-arrow mbr-after-navbar" 
 id="header1-3" style="background-image: url(assets/images/home1.jpg);">
 

    <div class="mbr-arrow mbr-arrow-floating" aria-hidden="true"><a href="#features4-5"><i class="mbr-arrow-icon"></i></a></div>
</section>




<section class="mbr-cards mbr-section mbr-section-nopadding" id="features4-5" style="background-color: rgb(255, 255, 255);">

    <div class="mbr-cards-row row">
        <div class="mbr-cards-col col-xs-12 col-lg-7" style="padding-top: 0px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><a href="" class="etl-icon icon-phone mbr-iconfont mbr-iconfont-features4" style="color: black;"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">Mission</h4>
                        <h5 class="card-subtitle"></h5>
                        <p class="card-text">
                        In partnership with the community and respnosnible authority. Charles Clack Primary and High School christian schools aim to equip
                        students to be confident, responsible and well educated so that they can fulfil positive roles in the society. We strive to achieve
                        this by providing a just, stimulating, caring environment where excellence can develop through high quality learning experience based
                        on individual needs and abilities. Positive ethos is central to the growth of Charles Clack Schools and render it effective.
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><a href="" class="etl-icon icon-edit mbr-iconfont mbr-iconfont-features4" style="color: black;"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">Vision</h4>
                        <h5 class="card-subtitle"></h5>
                        <p class="card-text">
                        A well structured environment, where traditional values of courtesy and cooperation, 
                        enterprise and initiative are emphasized, learning, is enjoyable and stimulating.
                        </p>
                        
                    </div>
                </div>
          </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-2" style="padding-top: 0px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><a href="" class="etl-icon icon-briefcase mbr-iconfont mbr-iconfont-features4" style="color: black;"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">Values<br></h4>
                        <h5 class="card-subtitle"></h5>
                        <p class="card-text">
                        Respect<br>
                        Aspiration<br>
                        Integrity<br>
                        Resilience<br>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
      </div>
</section>


<!--About Us-->
<section class="mbr-section mbr-parallax-background" style="background-color: rgb(255, 255, 255);" id="about_us">

   <div class="mbr-overlay"  style="background-color: green;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h1 class="mbr-section-title display-2" id="og_h1">ABOUT US</h1>
                <div class="lead"><p>
                We are mission schools of the Salvation Army. The primary school was founded in 1926 and the secondary school in 1981.
                We offer a wide a wide curriculum founded on the christian values and benefits with great emphasis on developing sound
                morality and discipline.
                 </p><p><br></p><p></p></div>
                
            </div>
        </div>
    </div>

</section>






<!--NEWS AND UPDATES-->
 <div class="container"  >
<section class="mbr-section mbr-parallax-background" style="background-color: green;" id="news">
<div class="mbr-overlay"  style="background-color: green;">
    </div>
  
<div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                 <h1 class="mbr-section-title display-2" id="og_h1">NEW AND UPDATES</h1>
                 
				 
				 
				 <?php
include 'conn/database_config3.php';

  $sql = "SELECT * FROM news";
   mysql_select_db('cchs');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {?>

<div class="panel-group" id="accordion">
			    <div class="panel panel-default">
				   <div class="panel-heading">
				       <div class="panel-title">
					   
					      <h4><u> <?php echo strtoupper($row['news_title']);?></u><h4>
					   </div><!--end panel title-->
					   
					       <div class="panel-body">
						   <?php echo $row['news_description'];?>
						   </div>
					   
				   </div>
				
				</div>
				
			</div>
   <?php }
   
   
  
?>
				 
				 
				 
				 
				 
        </div>
</div>		
                                  

	
</section>

</div>








<!--Testimonials-->
<section class="mbr-section mbr-background" id="testimonials3-8" style="background-image: url(cchs/header-footer.png); background-repeat:repeat; width:100%;">
 <div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2" id="og_h1">WHAT OUR STUDENTS SAY</h3>
                        
                    </div>
                </div>
            </div>
        </div>


    <div class="mbr-testimonials mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-lg-4">

                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="card-block">
                        <p>“I have been searching for a place to plant my seed for success and
                           I came to find out that Charles clack high school is the fertile place 
                            where I can put my aims of achieving the best results. Through its good leadership 
                            styles I can be able to focus on my studies without disturbances. 
                            With all our qualified teachers you can achieve all your goals.
                            All can say is that Charles clack high school is a place where success is crafted.”
                          </p></div>
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="assets/images/face2.jpg" class="img-circle"></div>
                            <div class="mbr-author-name">T. Muchinaku.</div>
                            
                        </div>
                    </div>
                </div>
				<div class="col-xs-12 col-lg-4">

                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="card-block"><p>“I have matured a lot and i now know what i want to do with my life and how i can get where i want to be
						 During my time at school, my teachers pushed and challenged me to really take advantage of the opportunity of being at school.
						 I developed in terms of my academic growth and also as a person.If I had to sum up the school in three words they would be 
						 ‘feels like home’”</p></div>
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="assets/images/face1.jpg" class="img-circle"></div>
                            <div class="mbr-author-name">Seremwe N.</div>
                            
                        </div>
                    </div>
                </div>
				<div class="col-xs-12 col-lg-4">

                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="card-block"><p>“At this school, this is where qaulity of education is considered,i matured a lot at this school
						academically as well as socially.I am achieving academic excellence at this school”</p></div>
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="assets/images/nhasi.jpg" class="img-circle"></div>
                            <div class="mbr-author-name">M. Chiremba.</div>
                            
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>




<!--Gallery-->
<section class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding" 
    data-ride="carousel" data-keyboard="false" data-wrap="true" data-pause="false" data-interval="5000" id="slider-p">
     <div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2" id="og_h1">Primary Gallery</h3>
                        
                    </div>
                </div>
            </div>
        </div>
    <div>
        <div>
            <div>
                <ol class="carousel-indicators">
                    <li data-app-prevent-settings="" data-target="#slider-p" class="active" data-slide-to="0"></li>
                    <li data-app-prevent-settings="" data-target="#slider-p" data-slide-to="1"></li>
                    <li data-app-prevent-settings="" data-target="#slider-p" data-slide-to="2"></li>
                    <li data-app-prevent-settings="" data-target="#slider-p" data-slide-to="3"></li>
                    <li data-app-prevent-settings="" data-target="#slider-p" data-slide-to="4"></li>
                    <li data-app-prevent-settings="" data-target="#slider-p" data-slide-to="5"></li>
                    <li data-app-prevent-settings="" data-target="#slider-p" data-slide-to="6"></li>
                    <li data-app-prevent-settings="" data-target="#slider-p" data-slide-to="7"></li>
                </ol>

                <div class="carousel-inner" role="listbox">


                  <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full active" data-bg-video-slide="false" 
                      style="background-image: url(assets/images/P1010909.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                   
                                    <div class="col-md-8 col-md-offset-2 text-xs-left">
                                       
                                        <div class="carousel-caption">
                                         <h1 class="carousel_header mbr-section-title display-1" id="og_h1">Grade 1 Class</h1>
                                         <p class="mbr-section-lead lead">
                                         	Teacher with her grade 1 class.

                                         </p>	
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

               
                  <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full " data-bg-video-slide="false" 
                      style="background-image: url(assets/images/P1010928.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                   
                                    <div class="col-md-8 col-md-offset-2 text-xs-left">
                                       
                                        <div class="carousel-caption">
                                         <h1 class="carousel_header mbr-section-title display-1"id="og_h1">Wall Learning</h1>
                                         <p class="mbr-section-lead lead">
                                          Grade 6 class conducting Wall Learning on their free time.
                                          
                                         </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


            
                  <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full " data-bg-video-slide="false" 
                      style="background-image: url(assets/images/P1010941.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                   
                                    <div class="col-md-8 col-md-offset-2 text-xs-left">
                                       
                                        <div class="carousel-caption">
                                         <h1 class="carousel_header mbr-section-title display-1" id="og_h1">Primary School Choir</h1>
                                         <p class="mbr-section-lead lead">
                                          Primary choir class.
                                          
                                         </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



            
            
                  <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full " data-bg-video-slide="false" 
                      style="background-image: url(assets/images/P1010946.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                   
                                    <div class="col-md-8 col-md-offset-2 text-xs-left">
                                       
                                        <div class="carousel-caption">
                                         <h1 class="carousel_header mbr-section-title display-1" id="og_h1">Sports</h1>
                                         <p class="mbr-section-lead lead">
                                          Grade 5 chess pupils.
                                          
                                         </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                  <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full " data-bg-video-slide="false" 
                      style="background-image: url(assets/images/P1010964.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                   
                                    <div class="col-md-8 col-md-offset-2 text-xs-left">
                                       
                                        <div class="carousel-caption">
                                         <h1 class="carousel_header mbr-section-title display-1" id="og_h1">Poultry</h1>
                                         <p class="mbr-section-lead lead">
                                           Poultry.
                                          
                                         </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

             
                  <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="false" 
                      style="background-image: url(assets/images/P1010995.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                   
                                    <div class="col-md-8 col-md-offset-2 text-xs-left">
                                       
                                        <div class="carousel-caption">
                                         <h1 class="carousel_header mbr-section-title display-1" id="og_h1">Care for RU and Disabled Pupils</h1>
                                         <p class="mbr-section-lead lead">
                                          RU pupils from their homestead to school.
                                         </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             


                </div><!--Closing carousel list box-->

                <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-p">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-p">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>



<!--Secondary Gallery-->
<section class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding" 
    data-ride="carousel" data-keyboard="false" data-wrap="true" data-pause="false" data-interval="5000" id="slider-s">

         <div class="mbr-section mbr-section__container mbr-section__container--middle" style="background-color: green">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2" id="og_h1">Secondary Gallery</h3>
                        
                    </div>
                </div>
            </div>
        </div>
    <div>
        <div>
            <div>
                <ol class="carousel-indicators">
                    <li data-app-prevent-settings="" data-target="#slider-s" class="active" data-slide-to="0"></li>
                    <li data-app-prevent-settings="" data-target="#slider-s" data-slide-to="1"></li>
                    <li data-app-prevent-settings="" data-target="#slider-s" data-slide-to="2"></li>
                    <li data-app-prevent-settings="" data-target="#slider-s" data-slide-to="3"></li>
                    <li data-app-prevent-settings="" data-target="#slider-s" data-slide-to="4"></li>
                    <li data-app-prevent-settings="" data-target="#slider-s" data-slide-to="5"></li>
                    <li data-app-prevent-settings="" data-target="#slider-s" data-slide-to="6"></li>
                    <li data-app-prevent-settings="" data-target="#slider-s" data-slide-to="7"></li>
                </ol>

                <div class="carousel-inner" role="listbox">


                  <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full active" data-bg-video-slide="false" 
                      style="background-image: url(assets/images/P1010817.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                   
                                    <div class="col-md-8 col-md-offset-2 text-xs-center">
                                       <div class="carousel-caption">
                                         <h1 class="carousel_header mbr-section-title display-1" id="og_h1"> Our Weather Station</h1>
                                         <p class="mbr-section-lead lead">
                                          Students taking weather records for their practical lesson.
                                         </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                  <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="false" 
                    style="background-image: url(assets/images/P1010827.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right">
                                        <div class="carousel-caption">
                                         <h1 class="carousel_header mbr-section-title display-1" id="og_h1"> Our Gardening</h1>
                                         <p class="mbr-section-lead lead">
                                          Agrigulture students conducting practical lessons in the school garden.
                                         </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



             <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="false" 
              style="background-image: url(assets/images/P1010849.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right">
                                     <div class="carousel-caption">
                                         <h1 class="carousel_header mbr-section-title display-1" id="og_h1">A Level Students</h1>
                                         <p class="mbr-section-lead lead">
                                          Our A level students leaving the school campus.
                                         </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


             <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="false" 
              style="background-image: url(assets/images/P1010879.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right">
                                        <div class="carousel-caption">
                                         <h1 class="carousel_header mbr-section-title display-1" id="og_h1">A level class</h1>
                                         <p class="mbr-section-lead lead">
                                          We promote constructive group discussions.
                                          </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

             <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="false" 
              style="background-image: url(assets/images/P1010880.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right">
                                      <div class="carousel-caption">
                                         <h1 class="carousel_header mbr-section-title display-1" id="og_h1">A level Class</h1>
                                         <p class="mbr-section-lead lead">
                                          Where students help one another.
                                         </p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            

                </div><!--Closing carousel list box-->

                <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-s">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-s">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>



<section class="mbr-section mbr-section-md-padding mbr-footer footer2" id="contacts2-3" style="background-color:#006633; padding-top: 30px; padding-bottom: 30px;">
    
    <div class="container">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Contact Details</strong><br>
                 The Salvation Army<br>
                 Charles Clack Primary School<br>
                 P.O Box 132<br>
                 Magunje<br>
				 Phone: +263 77 776 9844<br><br>
				 
				 The Salvation Army<br>
                 Charles Clack High School<br>
                 P.O Box 49<br>
                 Magunje<br>
				 Email:charlesclackhigh@gmail.com<br>
				 Phone: +263 77 776 9844<br><br><br>
            </div>


            <div class="col-xs-12 col-md-5">
                <div class="mbr-map"><iframe frameborder="0" style="border:0" 
				src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJwd-8ljW1ORkRwVbgc0aDKcQ"
				allowfullscreen=""></iframe></div>
            </div>

            <div class="mbr-footer-content col-xs-12 col-md-4">
                     
        <div class="thumbnail center well well-sm text-center">
                <h2>Newsletter</h2>
                
                <p>Subscribe to our weekly Newsletter and stay tuned.</p>
                
                <form action="index.php" method="post" role="form">
				<div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-user-md"  ></i></span>
                            <input type="text" name="subname" id="donor_name" required class="form-control" pattern="[a-zA-Z\s]+"placeholder="Your Name" />
                            <span class="help-block" id="error"></span>
							<span class="error"><?php echo $nameError;?></span>
                </div>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </span>
                      <input class="form-control" type="email" id="" name="subscribeBtn" placeholder="your@email.com">
                    </div>
                    <input type="submit" value="Subscribe" class="btn btn-large btn-primary" id="btn-subsribe" />
              </form>
            </div>    
      

            </div>

            
        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-e" style="background-image: url(cchs/header-footer.png); background-repeat:repeat; width:100%;">
    
    <div class="container">
        <p class="text-xs-center">Copyright (c) 2016 Eagle Systems.</p>
    </div>
	<img id="logo-main" src="assets/images/footerban.png" width="1250" height="90" alt="Logo Thing main logo">
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
  
  
 <script src="build/js/intlTelInput.js"></script>
  <script>
    $("#phone").intlTelInput({
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: "body",
      // excludeCountries: ["us"],
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // initialCountry: "auto",
      // nationalMode: false,
      // numberType: "MOBILE",
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js"
    });
  </script>
 
  </body>
</html>