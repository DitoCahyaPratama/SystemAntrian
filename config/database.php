<?php
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'antrians';
	$abjads = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

	$connect = mysqli_connect($servername, $username, $password);
	if(!$connect){
		die("Gagal terhubung ke server ". mysqli_connect_error());
	}else{
		$db = mysqli_query($connect, "CREATE DATABASE antrians")or die("query error");
		if($db){
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			include_once('function.php');
			if(!$conn){
				die("Gagal terhubung ke server ".mysqli_connect_error());
			}else{
				$roles = _run("CREATE TABLE roles(
								id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
								type VARCHAR(35) NOT NULL
							)");
				$users = _run("CREATE TABLE users(
								id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
								email VARCHAR(35) NOT NULL,
								username VARCHAR(35) NOT NULL,
								password VARCHAR(35) NOT NULL,
								role_id INT(11) NOT NULL,
								FOREIGN KEY (role_id) REFERENCES roles(id)
							)");
				$lockets = _run("CREATE TABLE lockets(
								id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
								angka INT(11) NULL,
								jumlah INT(11) NULL,
								abjad VARCHAR(1) NULL,
								status INT(1) NULL
							)");
				$settings = _run("CREATE TABLE settings(
								id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
								jumlah_locket INT(11) NULL
							)");
				$jml = $jml_loket-1;
				for($a=$jml;$a>=0; $a--){
					$update_locket = mysqli_query($conn, "ALTER TABLE `lockets` ADD `".$abjads[$a]."` INT NOT NULL AFTER `id`");
					$update_setting = mysqli_query($conn, "ALTER TABLE `settings` ADD `".$abjads[$a]."` VARCHAR(15) NOT NULL AFTER `id`");
				}
				$add_roles = _run("INSERT INTO `roles` (`type`) VALUES ('Admin'),('Petugas'),('View')");
				$add_users = _run("INSERT INTO `users` (`email`, `username`, `password`, `role_id`) VALUES ('admin@gmail.com', 'Admin', '".md5('admin')."', '1'), ('petugas@gmail.com', 'Petugas', '".md5('petugas')."', '2'), ('view@gmail.com', 'View', '".md5('view')."', '3')");
				$add_lockets = _run("INSERT INTO `lockets` (`id`, `angka`, `jumlah`) VALUES ('1', '0', '0')");
				$add_settings = _run("INSERT INTO `settings` (`jumlah_locket`) VALUES ('".$jml_loket."')");
			}
		}else{
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			include_once('function.php');
		}
	}
?>