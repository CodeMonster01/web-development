<?php
require_once('function/function.php');

needLogged();
$id = $_GET['d'];
$delete = "DELETE FROM add_user_table WHERE user_id = '$id'";
$query = mysqli_query($conn,$delete);
header('Location: all-user.php');

?>

<?php 
$id = $_GET['d'];
$delete = "DELETE FROM cit_contact WHERE contact_id = '$id'";
$query = mysqli_query($conn,$delete);
header('Location: visitors.php');

?>

<?php 
$id = $_GET['d'];
$delete = "DELETE FROM cit_banner WHERE ban_id = '$id'";
$query = mysqli_query($conn,$delete);
header('Location: all-banner.php');

?>

<?php
$delete = "DELETE FROM cit_social_media WHERE id = '1'";
$query = mysqli_query($conn,$delete);
header('Location: social-media.php');
?>

<?php
$delete = "DELETE FROM add_product WHERE product_id = '$id'";
$query = mysqli_query($conn,$delete);
header('Location: all-product.php');
?>