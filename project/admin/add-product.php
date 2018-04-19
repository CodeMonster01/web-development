<?php
require_once('function/function.php');
get_header();
get_sidebar();
get_bread();
needLogged();



if(!empty($_POST)){
  $product_name = htmlentities($_POST['name'], ENT_QUOTES);
  $product_detail = htmlentities($_POST['detail'], ENT_QUOTES);
  $product_link = htmlentities($_POST['link'], ENT_QUOTES);
  $image = $_FILES['pic'];
  $Image_Name = 'user-'.time().'-'.rand(10000,100000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
  
  $query = "INSERT INTO add_product (pro_name, pro_detail, pro_link, pro_image) VALUES ('$product_name','$product_detail','$product_link', '$Image_Name')";


  if(!empty($product_name)){
    if(!empty($product_link)){
      if(mysqli_query($conn,$query)){
      move_uploaded_file($image['tmp_name'],'uploads/'.$Image_Name);
      echo "Data Inserted Successfully";
      }else{echo "Data Insert Failed!".mysqli_error($conn); }
    }else{echo "Insert service name".mysqli_error($conn); }
  }else{echo "Insert service link!".mysqli_error($conn);}


}

?>

  <div class="col-md-12">
	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
	<div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
                User Registration
             </div>
             <div class="col-md-3 text-right">
             	<a href="all-product.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Products </a>
            </div>
            <div class="clearfix"></div>
        </div>

      <div class="panel-body">
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Product Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="name">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Product Detail</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="detail">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Product Link</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="link">
            </div>
          </div>

          <div class="form-group">
              <label for="" class="col-sm-3 control-label">Upload</label>
              <div class="col-sm-8">
                <input type="file" name="pic">
              </div>
            </div>
        </div>
          
          <div class="panel-footer text-center">
            <button class="btn btn-sm btn-primary">Update</button>
          </div>
        </div>
        </form>
       </div><!--col-md-12 end-->

     <?php

      get_footer();
  

     ?>
