<?php session_start();

	require_once('config.php');


	function get_header(){
		require_once('includes/header.php');
	}

	function get_footer(){
		require_once('includes/footer.php');
	}

	function get_bread(){
		include_once('includes/bread.php');
	}

	function get_part($addpart){
		include_once('includes/'.$addpart);
	}

	function get_sidebar(){
		require_once('includes/sidebar.php');
	}

	function isLogged(){
		return !empty($_SESSION['u_name'])? true:false;
	}

	function needLogged(){
		$logger = islogged();
		if(!$logger){
			header('Location: login.php');
		}
	}

	?>
