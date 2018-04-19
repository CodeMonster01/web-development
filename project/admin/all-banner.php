<?php
require_once('function/function.php');

get_header();
get_sidebar();
get_bread();
needLogged();
?>

<div class="col-md-12">
<div class="panel panel-primary">
<div class="panel-heading">
<div class="col-md-9 heading_title">
Banner Information
</div>
<div class="col-md-3 text-right">
	<a href="add-banner.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add Banner </a>
</div>
<div class="clearfix"></div>
</div>
<div class="panel-body">

<table class="table table-responsive table-striped table-hover table_cus">
	<thead class="table_head">
	<tr>
    	  <th>Banner Title</th>
        <th>Banner Sub-Title</th>
        <th>Banner Button Text</th>
    		<th>Banner Button URL</th>
    		<th>Banner Image</th>
        <th>Manage</th>
    </tr>
</thead>
<tbody>
    <?php
        $show = "SELECT * FROM  cit_banner ORDER BY ban_id DESC";
        $query = mysqli_query($conn,$show);
       while ($data = mysqli_fetch_assoc($query)) {
    ?>
	<tr>
    	  <td><?= $data['ban_title']; ?></td>
        <td><?= substr($data['ban_sub_title'],0,50); ?>...</td>
        <td><?= $data['ban_btn_text']; ?></td>
        <td><?= $data['ban_btn_url']; ?></td>
				<td>
					<img height="50" src="uploads/<?= $data['ban_image']; ?>" alt="<?= $data['ban_title']; ?>"/>
				 </td>
        <td>
          <a href="view-user.php?v=<?= $data['ban_id'] ?>"><i class="fa fa-plus-square fa-lg"></i></a>
          <a href="edit-user.php?e=<?= $data['ban_id'] ?>"><i class="fa fa-pencil-square fa-lg"></i></a>
          <a href="delete-user.php?d=<?= $data['ban_id'] ?>"><i class="fa fa-trash fa-lg"></i></a>
    
        </td>
  </tr>
        <?php } ?>
  </tbody>
</table>
</div>
</div>
</div>


<div class="col-md-12">
<div class="panel panel-primary">
<div class="panel-heading">
<div class="col-md-9 heading_title">
All Social Media
</div>
<div class="col-md-3 text-right">
    <a href="social-media.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Social Media </a>
</div>
<div class="clearfix"></div>
</div>
<table class="table table-responsive table-striped table-hover table_cus">
    <thead class="table_head">
    <tr>
        <th>twitter</th>
        <th>facebook</th>
        <th>linked-in</th>
        <th>youtube</th>
        <th>Manage</th>
    </tr>
</thead>
<tbody>
  <?php
$select = "SELECT * FROM cit_social_media WHERE id = '1'";
$query = mysqli_query($conn,$select);
$data = mysqli_fetch_assoc($query);

if(!empty($_POST)){
  $facebook = htmlentities($_POST['sm_tw'], ENT_QUOTES);
  $twitter = htmlentities($_POST['sm_fb'], ENT_QUOTES);
  $linkedin = htmlentities($_POST['sm_li'], ENT_QUOTES);
  $youtube = htmlentities($_POST['sm_yt'], ENT_QUOTES);


    $edit = "UPDATE cit_social_media SET sm_fb= '$facebook', sm_li= '$linkedin', sm_tw= '$twitter', sm_yt = '$youtube' WHERE id='1'";


  if(!empty($facebook)){
      if(mysqli_query($conn,$edit)){
        header('Location: all-banner.php');}
  }else{echo "Please enter facebook link!";}
     }

 ?>

    <tr>
        <td><?= $data['sm_tw']; ?></td>
        <td><?= $data['sm_fb']; ?></td>
        <td><?= $data['sm_li']; ?></td>
        <td><?= $data['sm_yt']; ?></td>
        <td>
            <a href="social-media.php?"><i class="fa fa-plus-square fa-lg"></i></a>
                    <?php if($_SESSION['u_role']==='1'){ ?>
            <a href="edit-user.php?<?= $data['id']?>"><i class="fa fa-pencil-square fa-lg"></i></a>
                    <?php } ?>
        </td>
              
    </tr>


</tbody>
</table>
</div>
</div>

<?php

get_footer();

?>
