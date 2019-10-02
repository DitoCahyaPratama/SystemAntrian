<?php
	if(isset($_SESSION['role_id']) && $_SESSION['role_id'] == "1"){

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
    Hantri &#x261B; Pengaturan
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
          if(isset($_SESSION['role_id']) && $_SESSION['role_id'] == '1'){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="?p=<?php echo crypt('dashboard','DitoCahyaPratama') ?>">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=<?php echo crypt('panggil','DitoCahyaPratama') ?>">
                <i class="material-icons">person</i>
                <p>Panggil</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?p=<?php echo crypt('ambil_nomor','DitoCahyaPratama') ?>">
                <i class="material-icons">pan_tool</i>
                <p>Ambil Nomor</p>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="?p=<?php echo crypt('pengaturan','DitoCahyaPratama') ?>">
                <i class="material-icons">settings</i>
                <p>Pengaturan</p>
              </a>
            </li>
            <?php
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
            <a class="navbar-brand" href="#">Pengaturan</a>
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
                <a class="nav-link" href="#" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <?php
                if(isset($_SESSION['role_id']) && $_SESSION['role_id'] == '1'){
                  ?>
                  <p id="videoKanesa"></p>
                  <div class="col-lg-9">
                    <div class="card">
                      <div class="card-header card-header-primary">
                        <h4 class="card-title">Setting Loket</h4>
                      </div>
                      <div class="card-body">
                        <div style="text-align: left; color: #444444">
                          <form action="server.php?p=setting_ip" method="POST">
                            <div class="row">   
                            <?php
                            $abjads = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
                            $query = _run("SELECT * FROM settings");
                            $data = _get($query);
                            $jml = $data['jumlah_locket']-1;
                            for($a=0; $a<=$jml; $a++){
                              $abjadnya = $abjads[$a];
                              $query1 = _run("SELECT * FROM settings");
                              $data1 = _get($query1);
                              ?>
                              <div class="col-md-2 col-sm-4">
                                <div class="form-group">
                                  <label class="bmd-label-floating">Loket <?php echo $abjads[$a] ?></label>
                                  <input type="text" class="form-control" name="loket_<?php echo $abjads[$a] ?>" value="<?php echo $data1[$abjadnya]; ?>">
                                </div>
                              </div>
                              <?php
                            }
                            ?>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Update Pengaturan</button>
                            <div class="clearfix"></div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="card">
                      <div class="card-header card-header-success">
                        <h4 class="card-title">Setting Jumlah Loket</h4>
                      </div>
                      <div class="card-body">
                        <div style="text-align: left; color: #444444">
                          <a href="server.php?p=reset_db"><button type="submit" class="btn btn-primary">Reset Loket</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php
                }
              ?>
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
        url: 'server.php?p=ambilnomax',
        type: 'POST',
        success:function(res){
          $('#num').val(res); 
        }
      })
    }, 1000);
    $('#masuk').click(function(e){
      e.preventDefault();
      var num = $('#num').val();
      num = parseInt(num) + 1;
      $('#num').val(num);  
      speak(""+num+"");
      $.ajax({
        url:  'server.php?p=ambil_no_antrian',
        type: 'POST',
        data:{number:num,}
      })
    })
    function speak(num){
      var utterance = new SpeechSynthesisUtterance();
      utterance.voice = speechSynthesis.getVoices().filter(function(voice){
        return voice.name == "Agnes";
      })[0];
      var numb = num.length;
      if(numb == "1"){
        utterance.text = "Nomor antrian anda, 000"+num;
      }else if(numb == "2"){
        utterance.text = "Nomor antrian anda, 00,"+num;
      }else if(numb == "3"){
        utterance.text = "Nomor antrian anda, 0,"+num;
      }else{
        utterance.text = "Nomor antrian anda, "+num;
      }
      utterance.lang = "id";
      utterance.volume = 1;
      utterance.rate = 0.8;
      utterance.pitch = 1;
      speechSynthesis.speak(utterance);
    }
    function openslide(){
      document.getElementById('menu').style.width = '250px';
      document.getElementById('container').style.marginLeft = '250px';
    }
    function closeslide(){
      document.getElementById('menu').style.width = '0px';
      document.getElementById('container').style.marginLeft = '0px';
    } 
  </script>
</body>

</html>
