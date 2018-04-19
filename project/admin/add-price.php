<?php
require_once('function/function.php');
get_header();
get_sidebar();
get_bread();
needLogged();



if(!empty($_POST)){
  $price_name = htmlentities($_POST['name'], ENT_QUOTES);
  $price_detail = htmlentities($_POST['detail'], ENT_QUOTES);
  $price_amount = htmlentities($_POST['amount'], ENT_QUOTES);
  $price_link = htmlentities($_POST['link'], ENT_QUOTES);
  $price_list1 = htmlentities($_POST['list1'], ENT_QUOTES);
  $price_list2 = htmlentities($_POST['list2'], ENT_QUOTES);
  
  
  $query = "INSERT INTO add_price (price_name, price_detail, price_amount, price_link, price_list1, price_list2) VALUES ('$price_name','$price_detail', '$price_amount','$price_link','$price_list1','$price_list2')";


  if(!empty($price_name)){
    if(!empty($price_link)){
      if(mysqli_query($conn,$query)){
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
            <label for="" class="col-sm-3 control-label">Price Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="name">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Price Detail</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="detail">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Amount</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="amount">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Link</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="link">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Price List 1</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="list1">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Price List 2</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="list2">
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
