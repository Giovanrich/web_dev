<?php

$con=mysqli_connect("localhost","root","","ecommerce");

//getting the categories
function getCats(){
global $con;
$get_cats="select * from categories";
$run_cats=mysqli_query($con,$get_cats);
while ($row_cats=mysqli_fetch_array($run_cats)) {
  	# code...
  	$cat_id=$row_cats['cat_id'];
  	$cat_title=$row_cats['cat_title'];
echo "<li><a href='#'>$cat_title</a></li>";

  }  
}


function getBrands(){
global $con;
$get_brands="select * from brands";
$run_brands=mysqli_query($con,$get_brands);
while ($row_brands=mysqli_fetch_array($run_brands)) {
  	# code...
  	$brand_id=$row_brands['brand_id'];
  	$brand_title=$row_brands['brand_title'];
echo "<li><a href='#'>$brand_title</a></li>";

  }  
}

function getPro(){
	global $con;
	$get_pro="select * from products order by rand() limit 0,6";
	$run_pro=mysqli_query($con,$get_pro);
	while($row__pro=mysqli_fetch_array($run_pro)){

      $pro_id=$row__pro['product_id'];
      $pro_cat=$row__pro['product_cat'];
      $pro_brand=$row__pro['product_brand'];
      $pro_title=$row__pro['product_title'];
      $pro_price=$row__pro['product_price'];
      $pro_image=$row__pro['product_image'];
      echo "

      <div id='single_product'>
       <h3>$pro_title</h3>
       <img src='admin_area/product_images/$pro_image' width='180' height='80'>
       <p><b>$$pro_price</b></p>
       <a href='details.php' style='float:left;'> Details</a>
       <a href='index.php'> <button style='float:right;'> Add to Cart</button></a>  
      </div>
      ";	

  }
}
?>