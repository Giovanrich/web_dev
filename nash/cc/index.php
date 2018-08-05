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
include_once("insert.php");
include_once("subscribe.php")
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
                      <li class="nav-item"><a class="nav-link link" href="index.html">HOME</a></li>
                      <li class="nav-item"><a class="nav-link link" href="index.html#msg-box8-7">ABOUT US</a></li>
                      <li class="nav-item"><a class="nav-link link" href="index.html#slider-c">GALLERY</a></li>
                      <li class="nav-item"><a class="nav-link link" href="index.html#contacts2-3">CONTACT</a></li>
                      <li class="nav-item"><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal">Donate</button></li>
                             
                    </ul>

                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>


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
<!--<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"> -->
<!-- <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"> -->
</form>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register" data-dismiss="modal">
                    Yes
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
<button type="submit" class ="btn btn-primary">No</button>
<!--<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"> -->
<!-- <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"> -->
</form>
			   </div>
        </div>
    </div>
</div>










<section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-section-with-arrow mbr-after-navbar" 
    id="header1-3" style="background-image: url(assets/images/jumbotron.jpg);">
     <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">

                    <h1 class="mbr-section-title display-1">FULL SCREEN INTRO</h1>
                    <p class="mbr-section-lead lead">Click any text to edit or style it. Click blue "Gear" icon in the top right corner to hide/show buttons, text, title and change the block background. <br> Click red "+" in the bottom right corner to add a new block. Use the top left menu to create new pages, sites and add extensions.</p>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="mbr-arrow mbr-arrow-floating" aria-hidden="true"><a href="#features4-5"><i class="mbr-arrow-icon"></i></a></div>

</section>




<section class="mbr-cards mbr-section mbr-section-nopadding" id="features4-5" style="background-color: rgb(255, 255, 255);">

    

    <div class="mbr-cards-row row">
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 0px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><a href="https://mobirise.com" class="etl-icon icon-phone mbr-iconfont mbr-iconfont-features4" style="color: black;"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">Mission</h4>
                        <h5 class="card-subtitle"></h5>
                        <p class="card-text">Bootstrap 4 has been noted as one of the most reliable and proven frameworks and Mobirise has been equipped to develop websites using this framework.</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 0px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><a href="https://mobirise.com" class="etl-icon icon-edit mbr-iconfont mbr-iconfont-features4" style="color: black;"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">Vision</h4>
                        <h5 class="card-subtitle"></h5>
                        <p class="card-text">One of Bootstrap 4's big points is responsiveness and Mobirise makes effective use of this by generating highly responsive website for you.</p>
                        
                    </div>
                </div>
          </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 0px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><a href="https://mobirise.com" class="etl-icon icon-briefcase mbr-iconfont mbr-iconfont-features4" style="color: black;"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">Values<br></h4>
                        <h5 class="card-subtitle"></h5>
                        <p class="card-text">Google has a highly exhaustive list of fonts compiled into its web font platform and Mobirise makes it easy for you to use them on your website easily and freely.</p>
                        
                    </div>
                </div>
            </div>
        </div>
        
        
        
    </div>
</section>

<section class="mbr-section mbr-parallax-background" id="msg-box8-7" style="background-image: url(assets/images/desert.jpg); padding-top: 120px; padding-bottom: 0px;">

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">ABOUT US</h3>
                <div class="lead"><p>Article header with background image and parallax effect Google has a highly exhaustive list of fonts compiled into its web font platform and Mobirise makes it easy for you to use them on your website easily and freelyArticle header with background image and parallax effect Google has a highly exhaustive list of fonts compiled into its web font platform and Mobirise makes it easy for you to use them on your website easily and freely</p><p><br></p><p>.</p></div>
                
            </div>
        </div>
    </div>

</section>

<section class="mbr-section mbr-background" id="testimonials3-8" style="background-image: url(assets/images/landscape2.jpg); padding-top: 0px; padding-bottom: 0px;">

    

        <div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2">WHAT OUR STUDENTS SAY</h3>
                        
                    </div>
                </div>
            </div>
        </div>


    <div class="mbr-testimonials mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-lg-4">

                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="card-block"><p>“its really very amazing app that makes me finish html page in 3 minutes ( that's usually takes more than 1 hours at least from me if i did it from scratch). i hope to have very big library and plugins for this APP thanks again for your nice application”</p></div>
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="assets/images/face3.jpg" class="img-circle"></div>
                            <div class="mbr-author-name">Abanoub S.</div>
                            
                        </div>
                    </div>
                </div><div class="col-xs-12 col-lg-4">

                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="card-block"><p>“First of all hands off to you guys for your effort and nice, super tool. Good work mobirise team. We are expecting the new version soon with advance functionality with full bootstrap design. Great effort and super UI experience with easy drag &amp; drop with no time design bootstrap builder in present web design world.”</p></div>
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="assets/images/face1.jpg" class="img-circle"></div>
                            <div class="mbr-author-name">Seremwe n.</div>
                            
                        </div>
                    </div>
                </div><div class="col-xs-12 col-lg-4">

                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="card-block"><p>“At first view, looks like a nice innovative tool, i like the great focus and time that was given to the responsive design, i also like the simple and clear drag and drop features. Give me more control over the object's properties and ill be using this tool for more serious projects. Regards.”</p></div>
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="assets/images/face2.jpg" class="img-circle"></div>
                            <div class="mbr-author-name">Jhollman C.</div>
                            
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>

<section class="mbr-slider mbr-section mbr-section__container carousel slide mbr-section-nopadding" data-ride="carousel" data-keyboard="false" data-wrap="true" data-pause="false" data-interval="5000" id="slider-c">
    <div>
        <div>
            <div>

                <ol class="carousel-indicators">
                    <li data-app-prevent-settings="" data-target="#slider-c" class="active" data-slide-to="0"></li>
                    <li data-app-prevent-settings="" data-target="#slider-c" data-slide-to="1"></li>
                    <li data-app-prevent-settings="" data-target="#slider-c" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" role="listbox">

                    <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full active" data-bg-video-slide="false" style="background-image: url(assets/images/man-back.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 text-xs-center">
                                        <h2 class="mbr-section-title display-1">FULL SCREEN SLIDER</h2>
                                        <p class="mbr-section-lead lead">
                                        Choose from the large selection of latest pre-made blocks 
                                        - jumbotrons, hero images, parallax scrolling, video backgrounds,
                                         hamburger menu, sticky header and more.
                                         </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="https://www.youtube.com/watch?v=uNCr7NdOJgw">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                             <div class="container-slide container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-1">
                                        <h2 class="mbr-section-title display-1">VIDEO SLIDE</h2>
                                        <p class="mbr-section-lead lead">Slide with youtube video background and color overlay. Title and text are aligned to the left.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mbr-section mbr-section-hero carousel-item dark center mbr-section-full" data-bg-video-slide="false" style="background-image: url(assets/images/sparklers.jpg);">
                        <div class="mbr-table-cell">
                            <div class="mbr-overlay"></div>
                            <div class="container-slide container">
                                
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3 text-xs-right">
                                        <h2 class="mbr-section-title display-1">IMAGE SLIDE</h2>
                                        <p class="mbr-section-lead lead">Choose from the large selection of latest pre-made blocks - jumbotrons, hero images, parallax scrolling, video backgrounds, hamburger menu, sticky header and more.</p>

                                        <div class="mbr-section-btn"><a class="btn btn-lg btn-info" href="https://mobirise.com">FOR WINDOWS</a> <a class="btn btn-lg btn-white btn-white-outline" href="https://mobirise.com">FOR MAC</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-c">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-c">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-md-padding mbr-footer footer2" id="contacts2-3" style="background-color: rgb(46, 46, 46); padding-top: 30px; padding-bottom: 30px;">
    
    <div class="container">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
              <p><strong> Our Address</strong>
              <br>
              The Salvation Army<br>
              Charles Clack High School<br>
              P.O. Box 49<br>
              Magunje
              <br>
              <hr>

             <strong>Contacts</strong>
             <br>
             Email:charlesclackhigh@gmail.com<br>
             Phone: +263 718 684 138<br>
             </p>
            </div>


            <div class="col-xs-12 col-md-5">
                <div class="mbr-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJwd-8ljW1ORkRwVbgc0aDKcQ" allowfullscreen=""></iframe></div>
            </div>

            <div class="mbr-footer-content col-xs-12 col-md-4">
                     
        <div class="thumbnail center well well-sm text-center">
                <h2>Newsletter</h2>
                
                <p>Subscribe to our weekly Newsletter and stay tuned.</p>
                
                <form action="index.php" method="post" role="form">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                      </span>
                      <input class="form-control" type="text" id="" name="subscribeBtn" placeholder="your@email.com">
                    </div>
                    <input type="submit" value="Subscribe" class="btn btn-large btn-primary" />
              </form>
            </div>    
      

            </div>

            
        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-e" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;">
    
    <div class="container">
        <p class="text-xs-center">Copyright (c) 2016 Mobirise.</p>
    </div>
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