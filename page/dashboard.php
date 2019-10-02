<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/Logo_Antri.png"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Hantri &#x261B; Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
</head>

<body class="">
  <?php
  if(isset($_SESSION['role_id']) && $_SESSION['role_id'] == '3'){
    ?>
    <!-- <div class="wrapper"> -->
      <!-- <div class="main-panel"> -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
              <ul class="navbar-nav">
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
              <?php
                $abjads = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
                $query = _run("SELECT * FROM settings");
                $data = _get($query);
                $jml = $data['jumlah_locket']-1;
                for($a=0; $a<=$jml; $a++){
                  ?>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                          <i class="material-icons"><?php echo $abjads[$a] ?></i>
                        </div>
                        <p class="card-category">Nomor Antrian</p>
                        <h3 class="card-title" id="<?php echo $abjads[$a] ?>">
                          0000
                        </h3>
                      </div>
                      <div class="card-footer">

                      </div>
                    </div>
                  </div>
                  <?php
                }
              ?>
            </div>
            <?php
            if(isset($_SESSION['role_id']) && $_SESSION['role_id'] == '1'){

            }else{
              ?>
                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <div class="card">
                      <div class="card-header card-header-tabs card-header-primary">
                        <div class="nav-tabs-navigation">
                          <div class="nav-tabs-wrapper">
                            <span class="nav-tabs-title">Tasks:</span>
                            <ul class="nav nav-tabs" data-tabs="tabs">
                              <li class="nav-item">
                                <a class="nav-link active" href="#profile" data-toggle="tab">
                                  <i class="material-icons">perm_media</i> Video
                                  <div class="ripple-container"></div>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card-body" style="text-align: center;">
                        <video width="1000" height="450" id="videoKanesa" autoplay controls loop>
                          <source src="assets/video/kanesa.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
            }
            ?>
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
      <!-- </div> -->
    <!-- </div> -->
    <?php
  }else{
    ?>
    <div class="wrapper">
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
              <li class="nav-item active">
                <a class="nav-link" href="?p=<?php echo crypt('dashboard','DitoCahyaPratama') ?>">
                  <i class="material-icons">dashboard</i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item ">
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
              <a class="navbar-brand" href="#">Dashboard</a>
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
              <?php
                if(isset($_SESSION['role_id']) && $_SESSION['role_id'] == '1'){
                  ?>
                  <p id="videoKanesa"></p>
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header card-header-primary">
                        <h4 class="card-title">Setting Max. Antrian</h4>
                      </div>
                      <div class="card-body">
                        <div style="text-align: left; color: #444444">
                          <p id="nomor">Jumlah Nomor Maksimum : </p>
                          <button id="reset_no" class="btn btn-danger">Reset</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="card">
                      <div class="card-header card-header-success">
                        <h4 class="card-title">Setting Max. Antrian</h4>
                      </div>
                      <div class="card-body">
                        <div style="text-align: left; color: #444444">
                          <form action="server.php?p=aturmax" method="post">
                            <input type="text" name="jumlah" class="form-control" placeholder="Atur jumlah antrian" required="">
                            <input type="submit" name="submit" value="set" class="btn btn-primary">
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="card">
                      <div class="card-header card-header-info">
                        <h4 class="card-title">Setting No. Antrian</h4>
                      </div>
                      <div class="card-body">
                        <div style="text-align: left; color: #444444">
                          <button id="reset" class="btn btn-danger">Reset</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                }
                $abjads = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
                $query = _run("SELECT * FROM settings");
                $data = _get($query);
                $jml = $data['jumlah_locket']-1;
                for($a=0; $a<=$jml; $a++){
                  ?>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                          <i class="material-icons"><?php echo $abjads[$a] ?></i>
                        </div>
                        <p class="card-category">Nomor Antrian</p>
                        <h3 class="card-title" id="no_<?php echo $abjads[$a] ?>">
                          0000
                        </h3>
                      </div>
                    </div>
                  </div>
                  <?php
                }
              ?>
            </div>
            <?php
            if(isset($_SESSION['role_id']) && $_SESSION['role_id'] == '1'){

            }else{
              ?>
                <div class="row">
                  <div class="col-lg-12 col-md-12">
                    <div class="card">
                      <div class="card-header card-header-tabs card-header-primary">
                        <div class="nav-tabs-navigation">
                          <div class="nav-tabs-wrapper">
                            <span class="nav-tabs-title">Tasks:</span>
                            <ul class="nav nav-tabs" data-tabs="tabs">
                              <li class="nav-item">
                                <a class="nav-link active" href="#profile" data-toggle="tab">
                                  <i class="material-icons">perm_media</i> Video
                                  <div class="ripple-container"></div>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card-body" style="text-align: center;">
                        <video width="640" height="450" id="videoKanesa" style="border: 4px solid #000; border-radius: 20px" autoplay controls loop>
                          <source src="assets/video/kanesa.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
            }
            ?>
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
    <?php
  }
  ?>
  
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="assets/js/plugins/sweetalert2.js"></script>
  <script src="assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <script type="text/javascript">
    var idNow = 0;
    var vid = document.getElementById("videoKanesa");
    var abjadnya = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    vid.volume = 0.2;
    setInterval(function(){
      for (var a = 0; a <= <?php echo $jml ?>; a++) {
        const loket = document.getElementById("no_"+abjadnya[a]);
        $.ajax({
          url: 'server.php?p=ambil'+abjadnya[a],
          type: 'POST',
          success:function(res){
            if(res.length == 1){
              loket.innerHTML = "000"+ res;    
            }else if(res.length == 2){
              loket.innerHTML = "00"+ res;   
            }else if(res.length == 3){
              loket.innerHTML = "0"+ res;    
            }else{  
              loket.innerHTML = res;   
            }
          }
        }) 
      }
      $.ajax({
        url: 'server.php?p=ambilnomax',
        type: 'POST',
        success:function(res){
          if(res.length == 1){
            document.getElementById("nomor").innerHTML = "Jumlah Nomor Maksimum : 000"+ res;
          }else if(res.length == 2){
            document.getElementById("nomor").innerHTML = "Jumlah Nomor Maksimum : 00"+ res;
          }else if(res.length == 3){
            document.getElementById("nomor").innerHTML = "Jumlah Nomor Maksimum : 0"+ res;
          }else{  
            document.getElementById("nomor").innerHTML = "Jumlah Nomor Maksimum : "+ res;
          }
        }
      })
    }, 1000);
    setInterval(function(){
      $.ajax({
        url: 'server.php?p=bunyi',
        type: 'POST',
        success:function(res){
          var status = res.substr(0,3);
          var nums = res.substr(4,4);
          var number = parseInt(nums);
          var abjad = res.substr(9,2);
          if(status == "yes"){
            speak(number, abjad);
            $.ajax({
              url: 'server.php?p=setNo',
              type: 'POST',
              success:function(res){

              }
            });
          }else{

          }
        }
      })
    }, 2000);
    $('#reset').click(function(e){
      Swal.fire({
        title: 'Apakah anda yakin ?',
        text: "Anda tidak dapat mengembalikan lagi !",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Reset !'
      }).then((result) => {
        if (result.value) {
          $.ajax({
            url:  'server.php?p=kembali',
            type: 'POST',
            success:function(res){
              var angka = res;
              $('#num').val(angka); 
                speakend("Nomor antrian, berhasil di reset");
            }
          })
          Swal.fire(
            'Reset!',
            'Jumlah Nomor antrian berhasil direset.',
            'success'
          )
        }
      })
    })
    $('#reset_no').click(function(e){
      Swal.fire({
        title: 'Apakah anda yakin ?',
        text: "Anda tidak dapat mengembalikan lagi !",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Reset !'
      }).then((result) => {
        if (result.value) {
          $.ajax({
            url:  'server.php?p=kembali_nomax',
            type: 'POST',
            success:function(res){
              var angka = res;
              $('#num').val(angka); 
                speakend("Nomor antrian, berhasil di reset");
            }
          })
          Swal.fire(
            'Reset!',
            'Jumlah max.Nomor antrian berhasil direset.',
            'success'
          )
        }
      })
    })
    function speakend(text){
      var utterance = new SpeechSynthesisUtterance();
      utterance.voice = speechSynthesis.getVoices().filter(function(voice){
        return voice.name == "Agnes";
      })[0];
      utterance.text = text;
      utterance.lang = "id";
      utterance.volume = 1;
      utterance.rate = 0.8;
      utterance.pitch = 1;
      speechSynthesis.speak(utterance);
    }
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
  </script>
</body>

</html>
