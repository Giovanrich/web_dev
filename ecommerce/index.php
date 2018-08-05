<!DOCTYPE html>

<?php
include("functions/functions.php");
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nash Online Shop</title>
	<link rel="stylesheet" href="styles/style.css" media="all"/>
</head>
<body>

	<div class="main_wrapper">


		<div class="header_wrapper">
			<img id="" src="images/logo.gif " alt="logo"/>
			<img id="" src="images/ad_banner.gif" alt="banner"/>

		</div><!--End header wrapper-->


        <div class="menubar">
             <ul id="menu">
             	<li><a href="">Home</a></li>
             	<li><a href="">All Products</a></li>
             	<li><a href="">My Account</a></li>
             	<li><a href="">Sign Up</a></li>
             	<li><a href="">Shopping Cart</a></li>
             	<li><a href="">Contact</a></li>
             </ul>

             <div id="form">
        	<form maction="results.php>" method="get" enctype="multipart/form_data">
             <input type="text" name="user_query" placeholder="Search  A Product"/>
             <input type="submit" name="search" value="Search"/>

        	</form>
        </div>
        </div><!--End menubar here-->



		<div class="content_wrapper">
		   <div id="sidebar">
		   <div id="sidebar_title"> Categories</div>
		     <ul id="cats">
		    <?php getCats(); ?>
		     </ul>

		     <div id="sidebar_title"> Brands</div>
		     <ul id="cats">
                 <?php getBrands(); ?>
		     </ul>
		   </div>
		    <div id="content_area">
		    	<div id="content_area">
		    		<div class="" id="product_box">
		    			<?php
		    			getPro();
		    			?>
		    		</div>
		    	</div>
		    </div>
		</div><!--End content wrapper-->

		
		<div id="footer">
		<h2 style="text-align:center;padding-top:30px;">&copy; 2016 Nash Inc.</h2></div>
	</div><!--End main wrapper-->
</body>
</html>