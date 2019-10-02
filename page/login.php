<?php
  error_reporting(E_ERROR | E_PARSE);
  $connect = mysqli_connect('localhost', 'root', '', 'antrians');
  if(!$connect){
    setting();
  }else{
    login();
  }

  function setting(){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Hantri &#x261B; Setup Configuration</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->  
      <link rel="icon" type="image/png" href="assets/img/Logo_Antri.png"/>
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/util.css">
      <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!--===============================================================================================-->
    </head>
    <?php
    $step = isset($_GET['step'])? $_GET['step'] : '';
    if($step == '1'){
      ?>
      <body>
        <div class="limiter">
          <div class="container-login100">
          <img src="assets/img/Logo_Antri.png" width="200px" style="padding: 20px">

            <div class="wrap-login100">
              <div class="login100-form-title" style="background-image: url(assets/img/bg-01.jpg);">
                <span class="login100-form-title-1">
                  Selamat Datang
                </span>
              </div>

              <div class="login100-form" style="padding: 50px;">
                <p>Di bawah ini Anda harus memasukkan detail loket yang digunakan.</p>
                <form class="login100-form validate-form" action="server.php?p=setting_loket" method="post" style="padding: 10px 80px 10px 200px">
                  <div class="wrap-input100 validate-input m-b-26" data-validate="Jumlah Loket is required">
                    <span class="label-input100">Jumlah Loket</span>
                    <input class="input100" type="number" name="jml_loket" placeholder="Enter Jumlah Loket ... " required="">
                    <span class="focus-input100"></span>
                  </div>

                  <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
                      Lanjut
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </body>
      <?php
    }else{
      ?>
      <body>
        <div class="limiter">
          <div class="container-login100">
          <img src="assets/img/Logo_Antri.png" width="200px" style="padding: 20px">

            <div class="wrap-login100">
              <div class="login100-form-title" style="background-image: url(assets/img/bg-01.jpg);">
                <span class="login100-form-title-1">
                  Selamat Datang
                </span>
              </div>

              <div class="login100-form" style="padding: 50px;">
                <p>Selamat datang di Hantri. Sebelum memulai, kami memerlukan beberapa informasi tentang database.</p>
                <a href="?step=1"><button class="login100-form-btn" type="button">Lanjut</button></a>
              </div>
            </div>
          </div>
        </div>
      </body>
      <?php
    }
    ?>
    <!--===============================================================================================-->
      <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
      <script src="assets/vendor/bootstrap/js/popper.js"></script>
    <!--===============================================================================================-->
      <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    </body>
    </html>
    <?php
  }
  function login(){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Hantri &#x261B; Login Page</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->  
      <link rel="icon" type="image/png" href="assets/img/Logo_Antri.png"/>
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/util.css">
      <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!--===============================================================================================-->
    </head>
    <body>
      <div class="limiter">
        <div class="container-login100">
          <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url(assets/img/bg-01.jpg);">
              <span class="login100-form-title-1">
                Sign In
              </span>
            </div>

            <form class="login100-form validate-form" onsubmit="system_login(); return false" id="form_login">
              <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                <span class="label-input100">Email</span>
                <input class="input100" type="email" name="email" placeholder="Enter Email" required="">
                <span class="focus-input100"></span>
              </div>

              <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                <span class="label-input100">Password</span>
                <input class="input100" type="password" name="password" placeholder="Enter password" required="">
                <span class="focus-input100"></span>
              </div>

              <div class="container-login100-form-btn">
                <button class="login100-form-btn" type="submit">
                  Login
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </body>
    <!--===============================================================================================-->
      <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
      <script src="assets/vendor/bootstrap/js/popper.js"></script>
    <!--===============================================================================================-->
      <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
      <script type="text/javascript">
        function system_login(){
          var form = $('#form_login');
          $.ajax({
            url: 'server.php?p=login',
            data: form.serialize(),
            type: 'POST',
            success:function(res){
              if(res == 'sukses'){
                alert('Wellcome');
                document.location = 'index.php';
              }else{
                alert(res);
              }
            },
            error:function(err){
              alert(err);
            }
          })
        }
      </script>
    </body>
    </html>
    <?php
  }
?>