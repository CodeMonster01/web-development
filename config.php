
<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db      = 'project05';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db);

if(!$conn){
	echo 'Database was unable to connect!';
}
?>
