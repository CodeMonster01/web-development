
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

  $edit = "UPDATE cit_social_media SET sm_fb= '$facebook', sm_li= '$linkedin', sm_tw= '$twitter', sm_yt = '$youtube' WHERE id='1'";


  if(!empty($facebook)){
    if(!empty($linkedin)){
      if(mysqli_query($conn,$query)){
      echo "Data Inserted Successfully";
      }else{echo "Data Update Failed".mysqli_error($conn); }
    }else{echo "Enter Facebook Link Again!".mysqli_error($conn); }
  }else{echo "Enter Twitter Link Again!".mysqli_error($conn);}


  
  if(!empty($facebook)){
      if(mysqli_query($conn,$edit)){
        header('Location: social-media.php');}
  }else{echo "Please enter facebook link!";}
     }

?>
 <div class="col-md-12">
  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
  <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="col-md-9 heading_title">
                Upload Social Media Info
             </div>
             <div class="col-md-3 text-right">
              <a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Social Media Info </a>
            </div>
            <div class="clearfix"></div>
        </div>

      <div class="panel-body">

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