<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>C.S.S</title>
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <!--Bootstrap Core CSS-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!--Custom CSS-->
	
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="includes/css/style.css">
</head>
<body>
	

	 <!--start the navigation bar-->
     <div class="navbar navbar-inverse navbar-fixed-top">
     	<div class="container">
     		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
     			<span class="icon-bar"></span>
     			<span class="icon-bar"></span>
     			<span class="icon-bar"></span>
     			<span class="icon-bar"></span>
     		</button>

            <a href="#" class="navbar-brand"> Chitimbe Sec School</a>

            <div class="navbar-collapse collaspe">
            	<ul class="nav navbar-nav navbar-left">
            	<li class="active"><a href="#" class=""><i class="icon-home"></i></a></li>
            	<li class=""><a href="#about" class="">About</a></li>
            	<li class=""><a href="#gallery" class="">Gallery</a></li>
            	<li class=""><a href="#news" class="">News</a></li>
            	<li class=""><a href="sign_in.php" class="">Sign In</a></li>
            	<li class=""><a href="#contact_us" class="">Contact Us</a></li>

            	</ul>
            </div><!--end nav bar elements-->

     	</div><!--end container-->
     </div><!--End the nav bar-->


     




     <!--Carousel-->
      <div class="container">
      	<div class="carousel slide" id="myCarousel" data-ride="carousel" data-interval="1000">
      		<ol class="carousel-indicators">
      			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      			<li data-target="#myCarousel" data-slide-to="1"></li>
      			<li data-target="#myCarousel" data-slide-to="2"></li>
      		</ol><!--end carousel indicators-->


      		<div class="carousel-inner">

      			<div class="item active">
      				<img src="images/carousel_large_01.jpg" alt="Image">
      				 <div class="carousel-caption">	
                       <h2 id="carousel_header">First Image caption</h2>
      				 </div>
      			</div><!--end carousel item 1-->

      			<div class="item">
      				<img src="images/carousel_large_02.jpg" alt="Image">
      				<div class="carousel-caption">	
                       <h2 id="carousel_header">Second Image caption</h2>
      				 </div>
      			</div><!--end carousel item 2-->

      			<div class="item">
      				<img src="images/carousel_large_03.jpg" alt="Image">
      				<div class="carousel-caption">	
                       <h2 id="carousel_header">Third Image caption</h2>
      				 </div>
      			</div><!--end carousel item 3-->

      		</div><!--end carousel-inner-->

      		<!--Carousel controls here-->
      		<a href="#myCarousel" class="left carousel-control" role="button" data-slide="prev">
      			<span class="glyphicon glyphicon-chevron-left"></span>
      		</a>
      		<a href="#myCarousel" class="right carousel-control" role="button" data-slide="next">
      			<span class="glyphicon glyphicon-chevron-right"></span>
      		</a>
      	</div><!--end carousel-->
      </div><!--end container-->


   <!-- =====================================================================ABOUT US SECTION ========================================================================== -->
		<div class="container" id="about" name="about">
			<div class="row white">
			<br>
				<h1 class="centered">A LITTLE ABOUT CHITIMBE </h1>
				<hr>
				
				<div class="col-lg-6">
					<p>We believe ideas come from everyone, everywhere. In fact, at BlackTie, everyone within our agency walls is a designer in their own right. And there are a few principles we believe—and we believe everyone should believe—about our design craft. These truths drive us, motivate us, and ultimately help us redefine the power of design. We’re big believers in doing right by our neighbors. After all, we grew up in the Twin Cities and we believe this place has much to offer. So we do what we can to support the community we love.</p>
				</div><!-- col-lg-6 -->
				
				<div class="col-lg-6">
					<p>Over the past four years, we’ve provided more than $1 million in combined cash and pro bono support to Way to Grow, an early childhood education and nonprofit organization. Other community giving involvement throughout our agency history includes pro bono work for more than 13 organizations, direct giving, a scholarship program through the Minneapolis College of Art & Design, board memberships, and ongoing participation in the Keystone Club, which gives five percent of our company’s earnings back to the community each year.</p>
				</div><!-- col-lg-6 -->
			</div><!-- row -->
		</div><!-- container -->




    <!--CONTACT US SECTION-->
    <div class="container" id="contact_us" name="contact_us">
			<div class="row">
			<br>
				<h1 class="centered">THANKS FOR VISITING US</h1>
				<hr>
				<br>
				<br>
				<div class="col-lg-4">
					<h3>Contact Information</h3>
					<p><span class="icon icon-home"></span> Some Address 987, ZM<br/>
						<span class="icon icon-phone"></span> +263 777 777<br/>
						<span class="icon icon-mobile"></span> +263 777 777 <br/>
						<span class="icon icon-envelop"></span> <a href="#"> info@css.ac.zw</a> <br/>
						<span class="icon icon-twitter"></span> <a href="#"> @css_tm </a> <br/>
						<span class="icon icon-facebook"></span> <a href="#"> Chitimbe Facebook Like </a> <br/>
					</p>
				</div><!-- col -->
				
				<div class="col-lg-4">
					<h3>Newsletter</h3>
					<p>Register to our newsletter and be updated with the latests information regarding our services, offers and much more.</p>
					<p>
						<form class="form-horizontal" role="form">
						  <div class="form-group">
						    <label for="inputEmail1" class="col-lg-4 control-label"></label>
						    <div class="col-lg-10">
						      <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="text1" class="col-lg-4 control-label"></label>
						    <div class="col-lg-10">
						      <input type="text" class="form-control" id="text1" placeholder="Your Name">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-lg-10">
						      <button type="submit" class="btn btn-lg btn-success btn-block">Sign in</button>
						    </div>
						  </div>
					   </form><!-- form -->
					</p>
				</div><!-- col -->
				
				<div class="col-lg-4">
					<h3>Support Us</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <a href="#">More...</a></p>
					<button class="btn btn-lg btn-success btn-block" type="submit">DONATE</button>
				</div><!-- col -->

			</div><!-- row -->
		
		</div><!-- container -->


        <!-- BEGIN FOOTER -->
        <br>
            <br>
		<footer>

                <div class="container">
                    <div class="row">
                     <div class="col-lg-4"></div>
                     <div class="col-lg-4"><p>&copy 2016 - Chitimbe Secondary School</p></div>
                     <div class="col-lg-4"></div>
                    </div>
                    </div>
                </div>
            </footer>
        <!-- END FOOTER -->


	<!--Java Script-->
	<script src="includes/js/jquery-1.8.2.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>