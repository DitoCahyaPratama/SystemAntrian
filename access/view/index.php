<?php
	$page = isset($_GET['p'])?$_GET['p'] : '';
	if($page == crypt('dashboard','DitoCahyaPratama')){
		include_once('page/dashboard.php');
	}else{
		include_once('page/dashboard.php');
	}
?>