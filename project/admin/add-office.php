<?php
require_once('function/function.php');
get_header();
get_sidebar();
get_bread();
needLogged();
if($_SESSION['u_role']==='1'){


if(!empty($_POST)){
  $address = htmlentities($_POST['address'], ENT_QUOTES);
  $phone = htmlentities($_POST['phone'], ENT_QUOTES);
  $email = htmlentities($_POST['email'], ENT_QUOTES);
  $location = htmlentities($_POST['location'], ENT_QUOTES);

  $query = "INSERT INTO website_detail (Address, add_detail, Phone, Email) VALUES ('$address','$location','$phone','$email')";


  if(!empty($address)){
      if(mysqli_query($conn,$query)){
      echo "Data Inserted Successfully";
      }else{echo "Data Insert Failed".mysqli_error($conn); }
  }else{echo "Enter Your Name".mysqli_error($conn);}
}


?>

  <div class="col-md-12">
  <form class="form-horizontal" action="" method="post">
  <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
                How To Contact With Us:
             </div>
            <div class="clearfix"></div>
        </div>

        <div class="panel-body">
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="address">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Location Details</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="location">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Phone</label>
            <div class="col-sm-8">
              <input type="number" class="form-control" name="phone">
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" name="email">
            </div>
          </div>

          <div class="panel-footer text-center">
            <button class="btn btn-sm btn-primary">Update</button>
          </div>
    </div>

  </form>
</div>


     <?php
      get_footer();
    }else{
        echo "<h1>Sorry,You Dont Have Permission To Perform This Action.</h1>";
    }
     ?>
