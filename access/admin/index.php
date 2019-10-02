<?php
	$page = isset($_GET['p'])?$_GET['p'] : '';
	if($page == crypt('dashboard','DitoCahyaPratama')){
		include_once('page/dashboard.php');
	}else if($page == crypt('panggil','DitoCahyaPratama')){
		include_once('page/panggil.php');
	}else if($page == crypt('ambil_nomor','DitoCahyaPratama')){
		include_once('page/ambil_nomor.php');
	}else if($page == crypt('pengaturan','DitoCahyaPratama')){
		include_once('page/pengaturan.php');
	}else{
		include_once('page/dashboard.php');
	}
?>