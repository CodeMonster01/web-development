<?php
require_once('function/function.php');

get_header();
get_sidebar();
get_bread();
needLogged();

$id = $_GET['e'];
$select = "SELECT * FROM add_user_table WHERE user_id = '$id'";
$query = mysqli_query($conn,$select);
$data = mysqli_fetch_assoc($query);

if(!empty($_POST)){
  $name = htmlentities($_POST['name'], ENT_QUOTES);
  $phone = htmlentities($_POST['cell-phone'], ENT_QUOTES);
  $email = htmlentities($_POST['email'], ENT_QUOTES);


  $edit = "UPDATE add_user_table SET Name= '$name', Phone= '$phone', Email= '$email' WHERE user_id='$id'";


  if(!empty($name)){
      if(mysqli_query($conn,$edit)){
        header('Location: all-user.php?v='.$id);}
  }else{echo "Enter Your Name";}

}

?>


  <div class="col-md-12">
	<form class="form-horizontal" action="" method="POST">
	<div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
                Update User Information
             </div>
             <div class="col-md-3 text-right">
             	<a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All User </a>
            </div>
            <div class="clearfix"></div>
        </div>

      <div class="panel-body">
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="name" value="<?= $data['Name']; ?>">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Phone</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" name="cell-phone" value="<?= $data['Phone'];?>">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-8">
              <input type="email" class="form-control"  name="email" value="<?= $data['Email'];?>">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">User Role</label>
            <div class="col-sm-4">
              <select class="form-control select_cus">
                  <option value="">Select Role</option>
                  <option value="1">Super Admin</option>
                  <option value="2">Admin</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Text Area</label>
            <div class="col-sm-8">
              <textarea class="form-control" rows="3"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Radio</label>
            <div class="col-sm-8">
              <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="" value="1">
                    Male
                  </label>
                  <label>
                    <input type="radio" name="optionsRadios" id="" value="2">
                    Female
                  </label>
                </div>
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Upload</label>
            <div class="col-sm-8">
              <input type="file" name="">
            </div>
          </div>
      </div>
      <div class="panel-footer text-center">
        <button class="btn btn-sm btn-primary">Update Information</button>
      </div>
    </div>
    </form>
   </div><!--col-md-12 end-->

     <?php

      get_footer();

     ?>
