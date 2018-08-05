<!DOCTYPE html>
<?php include("includes/db.php");?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body bgcolor ="skyblue">
	
<form action="insert_product.php" method="post" enctype="multipart/form-data">
	


	<table align="center" width="750px" border="2px" bgcolor="orange">

	     <!-- Row 1-->
		<tr align="center">
		     <td colspan="8"> <h2>Insert new Post here</h2></td>
		</tr>

		<!--Row 2-->
        <tr>
           
           <td align="right">Product Title:</td>
            <td><input type="text" name="product_title" size="60" required /></td>

        </tr>

        <!--Row 3-->
        <tr>
           
           <td align="right"><b>Product Category:</b></td>
            <td>
            <select name="product_cat" id="" required>
            	<option>Select A Category</option>
            	<?php 
                  $get_cats="select * from categories";
                  $run_cats=mysqli_query($con,$get_cats);
                  while ($row_cats=mysqli_fetch_array($run_cats)) {
  	                    # code...
  	                    $cat_id=$row_cats['cat_id'];
  	                    $cat_title=$row_cats['cat_title'];
                        echo "<option value='$cat_id'>$cat_title</option>";

                         } 

            	 ?>
             </select>
            </td>

        </tr>

        <!--Row 4-->
        <tr>
           
           <td align="right"><b>Product Brand:</b></td>
            <td>
            <select name="product_brand" id="" >
            	<option>Select A Brand</option>
            	<?php 
                  $get_brands="select * from brands";
                  $run_brands=mysqli_query($con,$get_brands);
                  while ($row_brands=mysqli_fetch_array($run_brands)) {
  	                    # code...
  	                    $brand_id=$row_brands['brand_id'];
  	                    $brand_title=$row_brands['brand_title'];
                        echo "<option value='$brand_id'>$brand_title</option>";

                         } 

            	 ?>
             </select>
            </td>

        </tr>


        <!--Row 5-->
        <tr>
           
           <td align="right"><b>Product Image:</b></td>
            <td><input type="file" name="product_image" ></td>

        </tr>

        <!--Row 6-->
        <tr>
           
           <td align="right"><b>Product Price:</b></td>
            <td><input type="text" name="product_price" required  ></td>

        </tr>

        <!--Row 7-->
        <tr>
           
           <td align="right"><b>Product Description:</b></td>
            <td><textarea name="product_desc" cols="20" rows="" ></textarea></td>

        </tr>


        <!--Row 8-->
        <tr>
           
           <td align="right"><b>Product Keywords:</b></td>
            <td><input type="text" name="product_keywords" required ></td>

        </tr>
        


        <!--Row 9-->
        <tr align="center">
           
            <td colspan="8"><input type="submit" name="insert_post" value="Insert Product Now"></td>

        </tr>

		
	</table>
</form>

</body>
</html>

<?php
if (isset($_POST['insert_post'])) {

	#getting text data from the field
	$product_title=$_POST['product_title'];
	$product_cat=$_POST['product_cat'];
	$product_brand=$_POST['product_brand'];
	$product_price=$_POST['product_price'];
	$product_desc=$_POST['product_desc'];
	$product_keywords=$_POST['product_keywords'];
     
     #getting files
	$product_image=$_FILES['product_image']['name'];
	$product_image_tmp=$_FILES['product_image']['tmp_name'];


    #lets upload the image into a local folder
    move_uploaded_file($product_image_tmp, "product_images/$product_image");

	$insert_product="insert into products(product_cat,product_brand,product_title,product_des,product_image,product_keywords)
	values('$product_cat','$product_brand','$product_title','$product_desc','$product_image','$product_keywords')";



    
    $insert_pro=mysqli_query($con,$insert_product);
    if ($insert_pro) {
    	# code...
    	echo "<script>alert('Product Inserted')</script>";
    	echo "<script>window.open('insert_product.php','_self')</script>";
    }


}
?>