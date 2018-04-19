<?php
require_once('function/function.php');

get_header();
get_sidebar();
get_bread();
needLogged();
if($_SESSION['u_role']<=2){
?>

<div class="col-md-12">
<div class="panel panel-primary">
<div class="panel-heading">
<div class="col-md-9 heading_title">
All Information View
</div>
<div class="col-md-3 text-right">
	<a href="add-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add Information</a>
</div>
<div class="clearfix"></div>
</div>
<div class="panel-body">

	<div class="col-md-8" style="margin-bottom= 0px; padding= 0px;">
		<form class="form-inline" method="post" action="search-user.php">
			<div class="form-group">
			<input type="text" class="form-control" name="search" placeholder="Search">
		</div>
	<button type="submit" class="btn btn-primary btn-sm">Search Contents</button>
		</form>
		<br>
	</div>
<table class="table table-responsive table-striped table-hover table_cus">
	<thead class="table_head">
	<tr>
    	<th>Name</th>
        <th>Email</th>
        <th>Phone</th>
				<th>User Name</th>
				<th>User Photo</th>
        <th class="hidden-xs">Manage</th>
        <th>User Role</th>


    </tr>
</thead>
<tbody>
    <?php
        $show = "SELECT * FROM  add_user_table NATURAL JOIN user_role ORDER BY user_id DESC";
        $query = mysqli_query($conn,$show);
        while($data=mysqli_fetch_assoc($query)){

    ?>

	<tr>
    	<td><?= $data['Name']; ?></td>
        <td><?= $data['Email']; ?></td>
        <td><?= $data['Phone']; ?></td>
        <td class="hidden-xs"><?= $data['User_Name']; ?></td>
				<td>
					<?php if(!empty($data['user_photos'])){ ?>
					<img height="50" src="uploads/<?= $data['user_photos']; ?>" alt="<?= $data['User_Name']; ?>"/>
					<?php }else{ ?>
					<img height="50" src="images\avatar.png" alt="No Image"/>
					<?php	} ?>
				 </td>
        <td>
        	<a href="view-user.php?v=<?= $data['user_id']?>"><i class="fa fa-plus-square fa-lg"></i></a>
					<?php if($_SESSION['u_role']==='1'){ ?>
            <a href="edit-user.php?e=<?= $data['user_id']?>"><i class="fa fa-pencil-square fa-lg"></i></a>
            <a href="delete_user.php?d=<?= $data['user_id']?>"><i class="fa fa-trash fa-lg"></i></a>
					<?php }	?>
        </td>
				<td><?= $data['role_name']; ?></td>
    </tr>

    <?php  }  ?>
</tbody>
</table>
</div>
<div class="panel-footer">
<div class="col-md-4">
<a href="#" class="btn btn-sm btn-warning">EXCEL</a>
<a href="#" class="btn btn-sm btn-primary">PDF</a>
<a href="#" class="btn btn-sm btn-danger">SVG</a>
<a href="#" class="btn btn-sm btn-success">PRINT</a>
</div>
<div class="col-md-4">
</div>
<div class="col-md-4 text-right">
<nav aria-label="Page navigation">
<ul class="pagination pagina_cus">
<li>
  <a href="#" aria-label="Previous">
    <span aria-hidden="true">&laquo;</span>
  </a>
</li>
<li class="active"><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li>
  <a href="#" aria-label="Next">
    <span aria-hidden="true">&raquo;</span>
  </a>
</li>
</ul>
</nav>
</div>
<div class="clearfix"></div>
</div>
</div>
</div><!--col-md-12 end-->


<?php

get_footer();
}else{
		echo "<h1>Sorry,You Dont Have Permission To Perform This Action.</h1>";
}
?>
