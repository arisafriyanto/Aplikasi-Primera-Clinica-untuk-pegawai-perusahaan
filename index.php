<?php 
session_start();


if(isset($_SESSION['Admin'])){
  header("location: pages/admin/index.php");
}else if(isset($_SESSION['Administrator'])) {
  header("location: pages/administrator/index.php");
}else if(isset($_SESSION['Perusahaan'])) {
  header("location: pages/perusahaan/index.php");
}else if(isset($_SESSION['Karyawan(pasien)'])) {
  header("location: pages/karyawan/index.php");
}

include "functions.php";

if(isset($_POST['login'])) {

  @$username = htmlspecialchars(addslashes(mysqli_real_escape_string($conn, $_POST['username'])));

  $password = mysqli_real_escape_string($conn, $_POST['password']);

  @$cek = mysqli_query($conn, "select * from users where username='$username'");
  @$pas = mysqli_query($conn, "select * from users where password='$password'");
  
  if (!mysqli_fetch_assoc($cek)) {
    echo "<script>
        alert ('Username Belum Terdaftar...!!');
        window.location.href='index.php';
      </script>";

      return false;
  }else if (!mysqli_fetch_assoc($pas)) {
    echo "<script>
        alert ('Password Salah...!!');
        window.location.href='index.php';
      </script>";

      return false;
  }else{

    $sql = mysqli_query($conn, "select * from users where username='$username'");

    $data = mysqli_fetch_assoc($sql);
    @$hak_akses = $data['hak_akses'];

    if(mysqli_num_rows($sql) === 1) {

        if($password === $data['password']) {

          if($hak_akses == "Admin") {
            $_SESSION['Admin'] = "Admin";
            $_SESSION['id_users'] = $data['id_users'];
            $_SESSION['username'] = $username;
            header("location: pages/admin/index.php");
          }else if($hak_akses == "Administrator / pemilik perusahaan klinik") {
            $_SESSION['Administrator'] = "Administrator";
            $_SESSION['id_users'] = $data['id_users'];
            $_SESSION['username'] = $username;
            header("location: pages/administrator/index.php");
          }else if($hak_akses == "Perusahaan") {
            $_SESSION['Perusahaan'] = "Perusahaan";
            $_SESSION['id_users'] = $data['id_users'];
            $_SESSION['kode_perusahaan'] = $data['kode_perusahaan'];
            $_SESSION['nama_perusahaan'] = $data['nama_perusahaan'];
            $_SESSION['username'] = $username;
            header("location: pages/perusahaan/index.php");
          }else if($hak_akses == "Karyawan(pasien)") {
            $_SESSION['Karyawan(pasien)'] = "Karyawan(pasien)";
            $_SESSION['id_users'] = $data['id_users'];
            $_SESSION['kode_perusahaan'] = $data['kode_perusahaan'];
            $_SESSION['nama_perusahaan'] = $data['nama_perusahaan'];
            $_SESSION['nrp'] = $data['nrp'];
            $_SESSION['username'] = $username;
            header("location: pages/karyawan/index.php");
          }
        }
      }
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">

<style type="text/css">

    body {
        background-image: url("assets/img/4.jpg");
        background-size: 100%;
    }

</style>

</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-3">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="assets/img/loro.png" alt="logo" width="80%">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" action="index.php" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input id="username" type="username" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your Username
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>

                  <div class="form-group mt-2">
                    <input type="submit" name="login" value="Login" class="btn btn-primary btn-lg btn-block" tabindex="4">
                  </div>
                </form>


              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; arisafriyanto 2020
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
</body>
</html>
