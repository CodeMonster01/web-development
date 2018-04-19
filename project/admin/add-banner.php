<?php
require_once('function/function.php');
get_header();
get_sidebar();
get_bread();
needLogged();
if($_SESSION['u_role']==='1'){


if(!empty($_POST)){
  $ban_title = htmlentities($_POST['title'], ENT_QUOTES);
  $ban_sub_title = htmlentities($_POST['subtitle'], ENT_QUOTES);
  $ban_btn_text = htmlentities($_POST['btn_text'], ENT_QUOTES);
  $ban_btn_url =htmlentities($_POST['btn_url'],ENT_QUOTES);
  $image = $_FILES['pic'];
  $Image_Name = 'user-'.time().'-'.rand(10000,100000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);

  $query = "INSERT INTO  cit_banner (ban_title, ban_sub_title, ban_btn_text, ban_btn_url, ban_image) VALUES ('$ban_title','$ban_sub_title','$ban_btn_text','$ban_btn_url','$Image_Name')";


  if(!empty($ban_title)){
    if(!empty($ban_btn_text)){
      if(mysqli_query($conn,$query)){
        move_uploaded_file($image['tmp_name'],'uploads/'.$Image_Name);
      echo "Data Inserted Successfully";
      }else{echo "Data Insert Failed".mysqli_error($conn); }
     }else{echo "Enter Button Text".mysqli_error($conn); }
  }else{echo "Enter Banner Title".mysqli_error($conn);}


}

?>

  <div class="col-md-12">
	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
	<div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
                Upload Banner
             </div>
             <div class="col-md-3 text-right">
             	<a href="all-banner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Banner </a>
            </div>
            <div class="clearfix"></div>
        </div>

      <div class="panel-body">
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Banner Title</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="title">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Banner Subtitle</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="subtitle">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Banner Button Text</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="btn_text">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Banner Button  URL</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="btn_url">
            </div>
          </div>

        
       <div class="form-group">
              <label for="" class="col-sm-3 control-label">Banner Image</label>
              <div class="col-sm-8">
                <input type="file" name="pic">
              </div>
            </div>
        </div>

          <div class="panel-footer text-center">
            <button class="btn btn-sm btn-primary">Upload</button>
          </div>
        </div>
        </form>
       </div><!--col-md-12 end-->


     <?php

      get_footer();
    }else{
        echo "<h1>Sorry,You Dont Have Permission To Perform This Action.</h1>";
    }

     ?>
