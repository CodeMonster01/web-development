 <div class="container-fluid content_full">
        <div class="row">
            <div class="col-md-2 sidebar pd0">
            	<div class="side_user">
                	<img class="img-responsive" src="images/avatar.png"/>
                    <h4> <?=$_SESSION['name']; ?></h4>
                    <span><i class="fa fa-circle"></i> Online</span>
                </div>
                <h2>MAIN NAVIGATION</h2>
                <ul>
                	<li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <?php if($_SESSION['u_role']<=2) {?>
                    <li><a href="all-user.php"><i class="fa fa-user-circle"></i> User </a></li>
                    <?php  }?>
                    <li><a href="all-banner.php"><i class="fa fa-gamepad"></i> Banner</a></li>
                    <li><a href="web_detail.php"><i class="fa fa-gamepad"></i> Website detail</a>
                        <ul>
                          <li><a href="#"><i class="fa fa-gamepad"></i> Recent Projects </a></li>
                          <li><a href="social-media.php"><i class="fa fa-gamepad"></i> Social Media </a></li>
                        </ul>
                    </li>
                    <li><a href=""><i class="fa fa-image"></i> Gallery</a></li>
                    <li><a href="visitors.php"><i class="fa fa-comments"></i> Visitors </a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
            </div>
