<?php
require_once('function/function.php');
get_header();
get_sidebar();
get_bread();
needLogged();

  if(!empty($_POST)){
  $showcase_name = htmlentities($_POST['heads'], ENT_QUOTES);
  $showcase_detail = htmlentities($_POST['details'], ENT_QUOTES);
  $showcase_link = htmlentities($_POST['links'], ENT_QUOTES);
  $image = $_FILES['pic'];
  $Image_Name = 'user-'.time().'-'.rand(10000,100000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
  
  $query = "INSERT INTO add_product_showcase (head, details, link, image) VALUES ('$showcase_name','$showcase_detail','$showcase_link', '$Image_Name')";


  if(!empty($showcase_name)){
    if(!empty($showcase_detail)){
      if(mysqli_query($conn,$query)){
      move_uploaded_file($image['tmp_name'],'uploads/'.$Image_Name);
      echo "Data Inserted Successfully";
      }else{echo "Data Insert Failed!".mysqli_error($conn); }
    }else{echo "Insert service name".mysqli_error($conn); }
  }else{echo "Insert service link!".mysqli_error($conn);}


}?>

  <div class="col-md-12">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
                Project Showcase 
             </div>
             <div class="col-md-3 text-right">
              <a href="all-showcase.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Project Showcase </a>
            </div>
            <div class="clearfix"></div>
        </div>

      <div class="panel-body">
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Product Showcase Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="heads">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Product Showcase Detail</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="details">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Product Showcase Link</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="links">
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
