<?php
  	error_reporting(E_ERROR | E_PARSE);
	$abjads = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
	$conn = mysqli_connect('localhost', 'root', '', 'antrians');
	include_once('config/function.php');
	$setting = _run('SELECT * FROM settings');
	$data_setting = _get($setting);
	$jml = $data_setting['jumlah_locket']-1;

	$page = isset($_GET['p'])? $_GET['p'] : '';
	if($page == 'setting_loket'){
		$jml_loket = $_POST['jml_loket'];
		include_once('config/database.php');
		header('location: index.php');
	}else if($page == 'add'){
		$query = _run("INSERT INTO lockets (id, angka) VALUES ('1', '".$_POST['number']."')");
	}else if($page == 'update'){
		$loket = $_POST['loket'];
		$query = _run("UPDATE lockets SET ".$loket."='".$_POST['number']."', abjad='".$loket."' WHERE id='1'");
		$query1 = _run("UPDATE lockets SET angka='".$_POST['number']."', status='1' WHERE id='1'");
	}else if($page == 'ambil_no_antrian'){
		$query = _run("SELECT * FROM lockets");
		$data = _get($query);
		$jumlah = $data['jumlah'] + 1;
		$query = _run("UPDATE lockets SET jumlah='".$jumlah."' WHERE id='1'"); 
		if(strlen($jumlah) == 1){
			$nomor = "000".$jumlah;
		}else if(strlen($jumlah) == 2){
			$nomor = "00".$jumlah;
		}else if(strlen($jumlah) == 3){
			$nomor = "0".$jumlah;
		}else if(strlen($jumlah) == 4){
			$nomor = $jumlah;
		}else{
			$nomor = $jumlah;
		}

		$handle = printer_open('\\\10.0.60.11\EPSON L360 Series (Copy 1)');
		printer_start_doc($handle, "My Document");
		printer_start_page($handle);

		$font = printer_create_font("Arial", 48, 20, 48, false, false, false, 0);
		printer_select_font($handle, $font);
		printer_draw_text($handle, "Selamat datang di KANESA", 10, 10);
		printer_delete_font($font);

		$font = printer_create_font("Arial", 48, 20, 48, false, false, false, 0);
		printer_select_font($handle, $font);
		printer_draw_text($handle, "Nomor antrian anda", 40, 60);
		printer_delete_font($font);

		$font = printer_create_font("Arial", 200, 48, 400, false, false, false, 0);
		printer_select_font($handle, $font);
		printer_draw_text($handle, $nomor, 50, 100);
		printer_delete_font($font);

		printer_end_page($handle);
		printer_end_doc($handle);
		printer_close($handle);

	}



//Abjad


	else if($page == 'ambilA'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['A'];
	}else if($page == 'ambilB'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['B'];
	}else if($page == 'ambilC'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['C'];
	}else if($page == 'ambilD'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['D'];
	}else if($page == 'ambilE'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['E'];
	}else if($page == 'ambilF'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['F'];
	}else if($page == 'ambilG'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['G'];
	}else if($page == 'ambilH'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['H'];
	}else if($page == 'ambilI'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['I'];
	}else if($page == 'ambilJ'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['J'];
	}else if($page == 'ambilK'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['K'];
	}else if($page == 'ambilL'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['L'];
	}else if($page == 'ambilM'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['M'];
	}else if($page == 'ambilN'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['N'];
	}else if($page == 'ambilO'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['O'];
	}else if($page == 'ambilP'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['P'];
	}else if($page == 'ambilQ'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['Q'];
	}else if($page == 'ambilR'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['R'];
	}else if($page == 'ambilS'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['S'];
	}else if($page == 'ambilT'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['T'];
	}else if($page == 'ambilU'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['U'];
	}else if($page == 'ambilV'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['V'];
	}else if($page == 'ambilW'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['W'];
	}else if($page == 'ambilX'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['X'];
	}else if($page == 'ambilY'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['Y'];
	}else if($page == 'ambilZ'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['Z'];
	}


//ends


	else if($page == 'ambil'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['angka'];
	}else if($page == 'ambilnomax'){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		echo $data['jumlah'];
	}else if($page == 'kembali'){
		for($a=0; $a<=$jml; $a++){
			$query = _run("UPDATE lockets SET ".$abjads[$a]."='0', angka='0' WHERE id='1'");
		}
	}else if($page == 'kembali_nomax'){
		$query = _run("UPDATE lockets SET jumlah='0' WHERE id='1'");
	}else if($page ==  "seleksi_no_antrian"){
		$query = _run("SELECT * FROM lockets WHERE id='1'");
		$data = _get($query);
		$jumlah = $data['jumlah'] - $_POST['number'];
		if($jumlah < 0){
			echo "no";
		}else{
			echo "yes";
		}
	}else if($page == "aturmax"){
		$jumlah = $_POST['jumlah'];
		$query = _run("UPDATE lockets SET jumlah='".$jumlah."' WHERE id='1'");
		header("location: index.php");
	}else if($page == "login"){
		$email = trim($_POST['email']);
		$upass = trim(md5($_POST['password']));
		$query = _run("SELECT * FROM users WHERE email='".$email."' AND password='".$upass."'");
		$data = _get($query);
		$emails = $data['email'];
		$username = $data['username'];
		$password = $data['password'];
		$role_id = $data['role_id'];
		if(_num($query) > 0){
			if($email == $emails){
				if($upass == $password){
					if($role_id == '1' || $role_id == '2' || $role_id == '3'){
						session_start();
						$_SESSION['role_id'] = $role_id;
						$_SESSION['username'] = $username;
						$_SESSION['id'] = $data['id'];
						$_SESSION['email'] = $emails;
						echo "sukses";
					}else{	
						echo "Maaf akun anda tidak dapat digunakan untuk login ! Silahkan login menggunakan akun yang lain !";
					}
				}else{
					echo "Maaf password yang anda inputkan salah ! Masukkan password dengan benar !";
				}	
			}else{
				echo "Maaf username yang anda inputkan salah ! Masukkan username dengan benar !";
			}
		}else{
			echo "Maaf akun belum terdaftar !";
		}
	}else if($page == "logout"){
		session_start();
		session_destroy();
		?>
			<script type="text/javascript">
				alert('Anda berhasil logout !!');
				document.location = "index.php";
			</script>
		<?php
	}else if($page == "bunyi"){
		$query = _run("SELECT * FROM lockets");
		$data = _get($query);
		$status = $data['status'];
		$jumlah = $data['angka'];
		$abjad = $data['abjad'];
		if(strlen($jumlah) == 1){
			$nomor = "000".$jumlah;
		}else if(strlen($jumlah) == 2){
			$nomor = "00".$jumlah;
		}else if(strlen($jumlah) == 3){
			$nomor = "0".$jumlah;
		}else if(strlen($jumlah) == 4){
			$nomor = $jumlah;
		}
		if($status == '1'){
			echo "yes-".$nomor."-".$abjad;
		}else if($status == '0'){
			echo "not-0000-0";
		}
	}else if($page == 'setNo'){
		$query = _run("UPDATE lockets SET status='0'");
		if($query){
			echo "sukses";
		}else{
			echo "gagal";
		}
	}else if($page == 'setting_ip'){
		for($a=0; $a<=$jml; $a++){
			$abjadnya = 'loket_'.$abjads[$a];
			$loket = $_POST[$abjadnya];
			$query = _run("UPDATE settings SET ".$abjads[$a]."='".$loket."' WHERE id='1'");
		}
		header('location: index.php?p=DiOrAPgcmvJEc');
	}else if($page == 'reset_db'){
		$query = _run("DROP DATABASE antrians");
		if ($query) {
			session_start();
			session_destroy();
			header('location: index.php');
		} else {

		}
	}else{

	}
?>