<?php
require_once('function/function.php');

needLogged();
$id = $_GET['d'];
$delete = "DELETE FROM add_user_table WHERE user_id = '$id'";
$query = mysqli_query($conn,$delete);
header('Location: all-user.php');

?>
