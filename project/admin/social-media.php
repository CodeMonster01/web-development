<?php
require_once('function/function.php');
get_header();
get_sidebar();
get_bread();
needLogged();

$select = "SELECT * FROM cit_social_media WHERE id = '1'";
$query = mysqli_query($conn,$select);
$data = mysqli_fetch_assoc($query);


if(!empty($_POST)){
  $facebook = htmlentities($_POST['fb'], ENT_QUOTES);
  $linkedin = htmlentities($_POST['li'], ENT_QUOTES);
  $twitter = htmlentities($_POST['tw'], ENT_QUOTES);
  $youtube =htmlentities($_POST['yt'],ENT_QUOTES);

 $query = "INSERT INTO cit_social_media (sm_fb, sm_li, sm_tw, sm_yt) VALUES ('$facebook','$linkedin','$twitter','$youtube')";

  if(!empty($facebook)){
    if(!empty($linkedin)){
      if(mysqli_query($conn,$query)){
      echo "Data Inserted Successfully";
      }else{echo "Data Update Failed".mysqli_error($conn); }
    }else{echo "Enter Facebook Link Again!".mysqli_error($conn); }
  }else{echo "Enter Twitter Link Again!".mysqli_error($conn);}
}
  ?>

  <div class="col-md-12">
	<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
	<div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
                Upload Social Media Info
             </div>
            
            <div class="clearfix"></div>
        </div>

      <div class="panel-body">

       
  <table class="table table-responsive table-striped table-hover table_cus">
 
<tbody>
  <tr>Manage</tr>
  
  <tr>
        <td>
          <a href="social-media.php?"><i class="fa fa-plus-square fa-lg"></i></a>
          <?php if($_SESSION['u_role']==='1'){ ?>
            <a href="edit-sm.php?"><i class="fa fa-pencil-square fa-lg"></i></a>
            <a href="delete_user.php?"><i class="fa fa-trash fa-lg"></i></a>
          <?php } ?>
        </td>
    </tr>
</tbody>
</table>
          <div class="col-md-6">
            <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-facebook"></i> </div>
                  <input type="text" name="fb" value="<?= $data['sm_fb']; ?>" class="form-control" placeholder="URL">
              </div>
            </div>
         
          
          
            <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-linkedin"></i> </div>
                  <input type="text" name="li" value="<?= $data['sm_li']; ?>" class="form-control" placeholder="URL">
              </div>
            </div>
             </div>
         

           <div class="col-md-6">

            <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-twitter"></i> </div>
                  <input type="text" name="tw" value="<?= $data['sm_tw']; ?>" class="form-control" placeholder="URL">
              </div>
            </div>
          

          
            <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon"><i class="fa fa-youtube"></i> </div>
                  <input type="text" name="yt" value="<?= $data['sm_yt']; ?>" class="form-control" placeholder="URL">
                </div>
            </div>

          </div>
          
          <div class="panel-footer text-center">
            <button class="btn btn-sm btn-primary">Upload</button>
          </div>
        </div>
      </div>
    </form>
 </div><!--col-md-12 end-->

     <?php

      get_footer();
    

     ?>
