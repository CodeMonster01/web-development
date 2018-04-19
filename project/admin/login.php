<?php 
require_once('function/function.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Panel :: Login </title>
        <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"/>
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
    </head>
<body>
<div class="container">
<div id="loginbox" style="margin-top:100px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info" >
        <div class="panel-heading">
            <div class="panel-title">Sign In</div>
            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
        </div>
        <div style="padding-top:30px" class="panel-body" >

            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>


            <form id="loginform" class="form-horizontal" method="post" role="form">
              <?php
                if(!empty($_POST)){
                  $user_name =htmlentities($_POST['username'],ENT_QUOTES);
                  $pass_word = md5($_POST['password']);
                  $sel = "SELECT * FROM add_user_table WHERE User_Name='$user_name'";
                  $q = mysqli_query($conn,$sel);
                  $data = mysqli_fetch_assoc($q);
               
                  $check = $data['Password'] === $pass_word;
                
                  if($check){
                    $_SESSION['u_name'] = $data['User_Name'];
                    $_SESSION['name'] = $data['Name'];
                    $_SESSION['u_role'] = $data['role_id'];
                    header('Location: index.php');
                  }else{
                    echo "Username or Password did not match!";
                  }
                }

              ?>

                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">
                </div>

                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                </div>
                <div class="input-group">
                    <div class="checkbox">
                        <label>
                            <input id="login-remember" type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                </div>

                <div style="margin-top:10px" class="form-group">
                <div class="col-sm-12 controls">
                    <button id="btn-login" class="btn btn-success"> Login  </button>
                </div>
                </div>

            </form>
        </div>
    </div>
</div>
</div>
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
    </body>
</html>
