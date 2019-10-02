<?php
	if(isset($_SESSION['role_id']) && $_SESSION['role_id'] == "1" || $_SESSION['role_id'] == "2"){
    $abjads = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    $query = _run("SELECT * FROM settings");
    $data = _get($query);
    $jml = $data['jumlah_locket']-1;
	}else{
		header("Location:index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/Logo_Antri.png"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Hantri &#x261B; Panggil Nomor
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          KANESA
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <?php
          if(isset($_SESSION['role_id']) && $_SESSION['role_id'] == '1' || $_SESSION['role_id'] == '2'){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="?p=<?php echo crypt('dashboard','DitoCahyaPratama') ?>">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="?p=<?php echo crypt('panggil','DitoCahyaPratama') ?>">
                <i class="material-icons">person</i>
                <p>Panggil</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="?p=<?php echo crypt('ambil_nomor','DitoCahyaPratama') ?>">
                <i class="material-icons">pan_tool</i>
                <p>Ambil Nomor</p>
              </a>
            </li>
            <?php
            if($_SESSION['role_id'] == '1'){
                ?>
                <li class="nav-item ">
                  <a class="nav-link" href="?p=<?php echo crypt('pengaturan','DitoCahyaPratama') ?>">
                    <i class="material-icons">settings</i>
                    <p>Pengaturan</p>
                  </a>
                </li>
                <?php
              }
          }else{
          	?>
          	<li class="nav-item active">
              <a class="nav-link" href="?p=<?php echo crypt('dashboard','DitoCahyaPratama') ?>">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
              </a>
            </li>
          	<?php
          }
          ?>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#">Panggil</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="server.php?p=logout">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              	<div><input type="text" name="text" id="num" value="0" readonly="" class="form-control"></div>
				<div>
					<button id="masuk" class="btn btn-primary">Masuk !</button>
				</div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.khayal.tech.com">
                  Khayal Tech
                </a>
              </li>
              <li>
                <a href="https://khayal.tech.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.khayal.tech.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.khayal.tech.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.khayal.tech.com" target="_blank">Dito Cahya Pratama</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="assets/js/plugins/sweetalert2.js"></script>
  <script src="assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <script type="text/javascript">
		setInterval(function(){
			$.ajax({
				url: 'server.php?p=ambil',
				type: 'POST',
				success:function(res){
					$('#num').val(res);	
				}
			})
		}, 1000);
		$('#masuk').click(function(e){
			e.preventDefault();
			window.RTCPeerConnection = window.RTCPeerConnection || window.mozRTCPeerConnection || window.webkitRTCPeerConnection;//compatibility for Firefox and chrome
			var pc = new RTCPeerConnection({iceServers:[]}), noop = function(){};      
			pc.createDataChannel('');//create a bogus data channel
			pc.createOffer(pc.setLocalDescription.bind(pc), noop);// create offer and set local description
			pc.onicecandidate = function(ice)
			{
			 if (ice && ice.candidate && ice.candidate.candidate)
			 {
			  var myIP = /([0-9]{1,3}(\.[0-9]{1,3}){3}|[a-f0-9]{1,4}(:[a-f0-9]{1,4}){7})/.exec(ice.candidate.candidate)[1];
			  console.log('my IP: ', myIP);   
			  pc.onicecandidate = noop;
        var abjadnya = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
        <?php
          for($a=0; $a<=$jml; $a++){
            $abjadnya = $abjads[$a];
            ?>
            if(myIP == '<?php echo $data[$abjadnya] ?>'){
              var abjad = '<?php echo $abjadnya ?>';
            } 
            <?php
          }
        ?>
        else{
          var abjad = 'A';
        }
			  var num = $('#num').val();
			  num = parseInt(num) + 1;
			  $.ajax({
			  	url: 'server.php?p=seleksi_no_antrian',
			  	type: 'POST',
			  	data:{number:num},
			  	success:function(res){
			  		if(res == 'yes'){
			  			$.ajax({
							url:  'server.php?p=update',
							type: 'POST',
							data:{number:num, loket:abjad},
							success:function(res){
								$('#num').val(num);  
			  				speak(""+num+"", abjad);
							}
						})
			  		}else{
			  			speak_error("Batas nomor antrian telah berakhir di nomor ini,. harap ambil nomor antrian terlebih dahulu untuk melanjutkan");
			  		}
			  	}
			  })
			 }
			};
		})
		function speak(num, abjad){
			var utterance = new SpeechSynthesisUtterance();
			utterance.voice = speechSynthesis.getVoices().filter(function(voice){
				return voice.name == "Agnes";
			})[0];
			var numb = num.length;
			if(numb == "1"){
				utterance.text = "Nomor antrian, 000"+num+",. Harap mendekat ke loket ,"+abjad;
			}else if(numb == "2"){
				utterance.text = "Nomor antrian, 00,"+num+",. Harap mendekat ke loket ,"+abjad;
			}else if(numb == "3"){
				utterance.text = "Nomor antrian, 0,"+num+",. Harap mendekat ke loket ,"+abjad;
			}else{
				utterance.text = "Nomor antrian, "+num+",. Harap mendekat ke loket ,"+abjad;
			}
			utterance.lang = "id";
			utterance.volume = 1;
			utterance.rate = 0.8;
			utterance.pitch = 1;
			speechSynthesis.speak(utterance);
		}
		function speak_error(kata){
			var utterance = new SpeechSynthesisUtterance();
			utterance.voice = speechSynthesis.getVoices().filter(function(voice){
				return voice.name == "Agnes";
			})[0];
			utterance.text = kata;
			utterance.lang = "id";
			utterance.volume = 1;
			utterance.rate = 0.8;
			utterance.pitch = 1;
			speechSynthesis.speak(utterance);
		}	
	</script>
</body>

</html>
