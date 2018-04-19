<?php
require_once('function/function.php');
get_header();
get_sidebar();
get_bread();
needLogged();
if($_SESSION['u_role']==='1'){


if(!empty($_POST)){
  $name = htmlentities($_POST['name'], ENT_QUOTES);
  $phone = htmlentities($_POST['cell-phone'], ENT_QUOTES);
  $email = htmlentities($_POST['email'], ENT_QUOTES);
  $u_name =htmlentities($_POST['user_name'],ENT_QUOTES);
  $password =md5(htmlentities($_POST['pass'], ENT_QUOTES));
  $con_password =md5(htmlentities($_POST['con_pass'], ENT_QUOTES));
  $role = htmlentities($_POST['role'], ENT_QUOTES);
  $image = $_FILES['pic'];
  $Image_Name = 'user-'.time().'-'.rand(10000,100000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);

  $query = "INSERT INTO add_user_table (Name, Phone, Email, User_Name, Password, role_id, user_photos) VALUES ('$name','$phone','$email','$u_name','$password','$role', '$Image_Name')";


  if(!empty($name)){
    if($password === $con_password){
      if(mysqli_query($conn,$query)){
        move_uploaded_file($image['tmp_name'],'uploads/'.$Image_Name);
      echo "Data Inserted Successfully";
      }else{echo "Data Insert Failed".mysqli_error($conn); }
    }else{echo "Password did not match".mysqli_error($conn); }
  }else{echo "Enter Your Name".mysqli_error($conn);}


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
             	<a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All User </a>
            </div>
            <div class="clearfix"></div>
        </div>

      <div class="panel-body">
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="name">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Phone</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" name="cell-phone">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" name="email">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">User Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="user_name">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" name="pass">
            </div>
          </div>

           <div class="form-group">
            <label for="" class="col-sm-3 control-label">Confirm Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" name="con_pass">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">User Role</label>
            <div class="col-sm-4">
              <select class="form-control select_cus" name="role">
                  <option value="">Select Role</option>

                  <?php
                  $sel = "SELECT * FROM user_role";
                  $q   = mysqli_query($conn,$sel);
                  while($data= mysqli_fetch_assoc($q)){
                  ?>

                  <option value="<?= $data['role_id'] ?>"> <?= $data['role_name'] ?> </option>

                  <?php
                    }
                  ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Text Area</label>
            <div class="col-sm-8">
              <textarea class="form-control" rows="3" name="text"></textarea>
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
            <label for="" class="col-sm-3 control-label">Checkbox</label>
            <div class="col-sm-8">
              <div class="checkbox-inline">
                  <label>
                    <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                  </label>
               </div>
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
            <button class="btn btn-sm btn-primary">REGISTRATION</button>
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
